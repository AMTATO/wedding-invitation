<!DOCTYPE html>
<html lang="lang={{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wedding Invitation</title>

    @vite('resources/sass/app.scss')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@100;400;600;700&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>
    @yield('content')

    <!-- Core plugin JavaScript-->
    @vite('resources/js/app.js')
</body>

</html>
