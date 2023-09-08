<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>保育記事一覧</title>
    </head>
    <body>
        <h1>保育施設</h1>
        <h1 class='title'>{{ $admin->name }}</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        
        <h2 class='switch'><!--DBの追加-->
            <a href='/admin/{{ $admin }}'>保育情報追加</a>
        </h2>
        
        <form method="POST" action="{{ route('admin.login.logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('ログアウト') }}
            </button>
        </form>
    </body>