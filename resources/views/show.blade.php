<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>保育記事詳細</title>
    </head>
    <body>
        <h1 class='title'>{{ $post->title }}</h1>
        <div class="content">
            <div class="content__post">
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/use/">戻る</a>
        </div>
    </body>
</html>