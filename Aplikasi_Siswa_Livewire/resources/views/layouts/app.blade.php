<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;0,800;1,700;1,800&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />


    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrapDash.css" />
    <link rel="stylesheet" href="/css/style.css" />


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>

    @livewireStyles
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <div class="container-fluid" style="height: 100vh; overflow: hidden">
        <livewire:dashboard.navbar>
            </livewire:dashboard>
            <div class="row" style="height: 100%">
                <livewire:dashboard.sidebar>
                    </livewire:dashboard>
                    <div class="col-9 p-4 py-2">
                        {{ $slot }}
                    </div>
            </div>
    </div>

    <script src="{{ asset('dashboard.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
    @livewireScripts
</body>

</html>
