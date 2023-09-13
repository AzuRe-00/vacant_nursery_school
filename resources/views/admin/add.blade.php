<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>保育施設情報入力画面</title>
    </head>
    <body>
        <form method='POST' action='/admin/posts'>
            @csrf
            <div class='name'>
                <input type='text' name='post[admin_id]' placeholder='保育施設名'/>
            </div>
            <div class='title'>
                <input type='text' name='post[title]' placeholder='見出し文'/>
            </div>
            <div class='vacant'>
                <textarea name='post[body]' placeholder='人数空き状況'></textarea>
            </div>
            <input type="submit" value="記事を追加する"/>
        </form>
        <div class='footer'>
            <a href='/admin/'>戻る</a>
        </div>
    </body>
</html>