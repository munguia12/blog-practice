<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Blog / Noticiero</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('header')    
    
    <main role="main" class="container">
        @yield('content')
    </main>

    <footer>
        <div class="footer text-center py-3">
            <p>&copy; {{ date('Y') }} Mi Blog. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>
