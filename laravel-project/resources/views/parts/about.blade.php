<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{  asset('css/style.css') }}" />
        <title>Laravel</title>

    </head>
    <body>
        @include("parts/header")
        <main>
            <h1>Aboutページ</h1>
        </main>
        @include("parts/footer")
    </body>
</html>