<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>保育記事詳細</title>
    </head>
    <body>
        <div>
            @if ($status == 'stored')
            <p class="max-w-2xl text-sm text-gray-500">申し込みが完了しました！</p>
            @endif
        </div>
        <div class="mt-4">
            <a href="{{ route('user.dashboard') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700">戻る</a>
        </div>
    </body>
</html>