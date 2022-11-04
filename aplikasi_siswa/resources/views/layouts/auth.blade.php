<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.links')
    <link rel="stylesheet" href="/css/auth.css">
    @livewireStyles
    <title>Heho</title>
</head>

<body class="bg-light d-flex" style="height: 100vh;">

    <div class="container m-md-auto mt-3 mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11">
                <div class="d-flex flex-column flex-md-row rounded overflow-hidden">
                    <div class="col-12 col-md-6 bg-primary ">
                        <div class="p-4 text-white">
                            <h1>Forum web Application</h1>
                            <hr>
                            <p>Tempat terbaik untuk berbagi permasalahan dan berdiskusi </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="bg-white p-4">
                            @yield('body')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.script')
    @livewireScripts

</body>

</html>
