<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} | Template Laravel Tailwind</title>

    {{-- STYLE CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/e5ccf98c71.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    {{-- END STYLE CSS --}}
</head>
<body>
    @if (Route::is('auth.login') || Route::is('auth.register'))
        <main class="login">
            @yield('content-auth')
        </main>
    @else
        <main class="dashboard w-full">
            @include('component.sidebar')
            <div class="dashboard-content">
                @include('component.topbar')
                @yield('content-dashboard')
            </div>
        </main>
    @endif

    {{-- SCRIPT JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    @stack('child-script')
    {{-- END SCRIPT JS --}}
</body>
</html>
