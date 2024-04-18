<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Blog / Noticiero</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/app.css">
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
