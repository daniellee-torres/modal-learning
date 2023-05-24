<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Users</h1>
        </div>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <button type="button" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add user</button>
        </div>
    </div>
    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Name</th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                <span class="sr-only">Delete</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($users as $user)
                            <tr>
                                <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="font-medium text-gray-900">
                                                {{ $user->name }}
                                            </div>
                                            <div class="mt-1 text-gray-500">
                                                {{$user->email}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                    <button class="text-indigo-600 hover:text-indigo-900" wire:click="confirmDelete({{ $user->id }})">Delete<span class="sr-only">, Lindsay Walton</span></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <form wire:submit.prevent="deleteUser">
        @csrf
        <x-confirmation-modal wire:model.defer="showDeleteUserModal">
            <x-slot name="title">
                Delete {{$currentUser->name}}
            </x-slot>
            <x-slot name="body">
                Continuing will delete your account permanently.
            </x-slot>
            <x-slot name="footer">
                <x-button class="bg-gray-400 hover:bg-gray-500" wire:click="$set('showDeleteUserModal', false)">Cancel</x-button>
                <x-button type="submit" class="bg-blue-400 hover:bg-blue-500">Continue</x-button>
            </x-slot>
        </x-confirmation-modal>
    </form>

</div>
