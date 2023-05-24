<!doctype html>
<title> MODAL LEARNING</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
{{--<link href="{{ mix('css/app.css') }}" rel="stylesheet">--}}
{{--<script src="{{ mix('js/app.js') }}"></script>--}}

@livewireStyles

<body class="bg-gray-200">
    {{ $slot }}
    @livewireScripts
</body>

