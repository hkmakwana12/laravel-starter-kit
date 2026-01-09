<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name') }}</title>

    {{-- favicon --}}
    <link rel="icon" type="image/jpeg" href="https://pub-99de907071b34c5b818be772a36c0976.r2.dev/logo-icon.jpg" sizes="32x32">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&ampdisplay=swap"
        rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Theme Script -->
    <script type="text/javascript">
        (function() {
            try {
                const root = document.documentElement;
                const savedTheme = localStorage.getItem('theme') || 'light';
                root.setAttribute('data-theme', savedTheme);
            } catch (e) {
                console.warn('Early theme script error:', e);
            }
        })();
    </script>
</head>

<body class="bg-base-200">
    <x-partials.alert />

    <div
        class="flex h-auto min-h-screen items-center justify-center overflow-x-hidden py-10">
        <div class="relative flex items-center justify-center px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
