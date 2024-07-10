<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Laravel Template</title>
</head>

<body>

    @include('shared.header')
    <main>
        <div class="container py-3">
            <div class="row">
                @yield('main')
            </div>
        </div>
    </main>


    {{-- Example tag for images --}}
    {{-- <img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> --}}

    @include('shared.footer')
</body>

</html>
