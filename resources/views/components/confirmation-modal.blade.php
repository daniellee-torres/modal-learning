<div x-data="{show: false}" x-show="show">
    <div class="fixed inset-0 bg-gray-900 opacity-90"></div>
    <div class="bg-white shadow-md p-4 h-48 max-w-sm m-auto rounded-md fixed inset-0">
        <div class="flex flex-col h-full justify-between">
            <header class="font-bold text-lg">
                {{ $title }}
            </header>

            <main >
                {{ $body }}
            </main>

            <footer>
                {{ $footer }}
            </footer>
        </div>
    </div>
</div>
