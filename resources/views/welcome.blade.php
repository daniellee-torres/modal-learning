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

    <div>
        <div class="fixed inset-0 bg-gray-900 opacity-90"></div>
        <div class="bg-white shadow-md p-4 h-48 max-w-sm m-auto rounded-md fixed inset-0">
            <div class="flex flex-col h-full justify-between">
                <header class="font-bold text-lg">
                    <h3>Are you sure?</h3>
                </header>

                <main >
                    <p>If you proceed, your account will be deleted entirely.</p>
                </main>

                <footer>
                    <button class="bg-gray-400 text-xs uppercase py-2 px-4 rounded-md text-white hover:bg-gray-500 transition-all duration-200 mr-2">Cancel</button>
                    <button class="bg-blue-400 text-xs uppercase py-2 px-4 rounded-md text-white hover:bg-blue-500 transition-all duration-200">Continue</button>
                </footer>
            </div>
        </div>
    </div>
</x-layout>
