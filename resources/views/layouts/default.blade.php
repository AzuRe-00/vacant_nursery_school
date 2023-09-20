<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>保育記事一覧</title>
    </head>
    <body>
        @error('form')
         <p>{{ $message }}</p>
         @enderror
    </body>
</html>