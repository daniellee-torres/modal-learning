<x-layout>

    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Users</h1>
        </div>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <x-button type="button" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                      onclick="$modals.show('add-user')">Add user</x-button>
        </div>
    </div>

    <script>
        window.$modals = {
            show(name){
                window.dispatchEvent(new CustomEvent('modal', {detail: name}));             }
        }
    </script>

    <x-add-user-modal name="add-user" >
        <x-slot name="title">
            <h1>ADD A USER</h1>
        </x-slot>
        <x-slot name="body">
            <p>
                Here are some details about our plans.
            </p>
        </x-slot>
        <x-slot name="footer">
            <x-button class="bg-gray-500 hover:bg-gray-800">Close</x-button>
        </x-slot>

    </x-add-user-modal>

    <livewire:manage-users/>

</x-layout>
