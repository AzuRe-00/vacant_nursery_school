<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>保育記事一覧</title>
    </head>
    <body>
        <h1>保育施設一覧</h1>
        <form action="/psots" method="POST"><!--後で治す-->
            @csrf
            <a>test</a>
        </form>
        
        <form method="POST" action="{{ route('login.logout') }}">
            @csrf
            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('ログアウト') }}
            </button>
        </form>
    </body>