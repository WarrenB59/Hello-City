<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello City</title>
    </head>
    <body>
        <h1>Bonjour de France !</h1>

        <p>Il est actuellement {{date('H:i:s')}}</p>

        <footer>
            <p>&copy; Copyright {{date('Y')}} &middot; <a href="about-us">A Propos</a></p>
        </footer>
    </body>
</html>
