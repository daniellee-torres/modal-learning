<x-layout>
    <div class="container max-w-lg mx-auto bg-gray-300">
        <header class="bg-blue-600 p-4">
            <h1 class="font-bold text-white">My Site</h1>
        </header>

        <div class="grid grid-cols-12 p-4">
            <aside class="mr-6 col-span-3 text-sm">
                <ul>
                    <li>Link 1</li>
                    <li>Link 2</li>
                    <li>Link 3</li>
                </ul>
            </aside>

            <main class="test-sm col-span-9">
                <p class="mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam blandit arcu lectus, a feugiat mi faucibus ac. Maecenas congue auctor quam, ut malesuada elit consectetur ac.
                </p>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam blandit arcu lectus, a feugiat mi faucibus ac. Maecenas congue auctor quam, ut malesuada elit consectetur ac.
                </p>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam blandit arcu lectus, a feugiat mi faucibus ac. Maecenas congue auctor quam, ut malesuada elit consectetur ac.
                </p>
            </main>
        </div>

        <footer class="bg-blue-600 p-4 flex items-center justify-between text-xs text-white">
            <h5 class="text-xs">My Site</h5>
            <p>2023</p>
        </footer>
    </div>

{{--    Modal--}}

    <x-confirmation-modal>
        <x-slot name="title">
            Are You Sure?
        </x-slot>
        <x-slot name="body">
            Continuing will delete your account permanently.
        </x-slot>
        <x-slot name="footer">
            <x-button class="bg-gray-400 hover:bg-gray-500">Cancel</x-button>
            <x-button class="bg-blue-400 hover:bg-blue-500">Continue</x-button>
        </x-slot>
    </x-confirmation-modal>
</x-layout>
