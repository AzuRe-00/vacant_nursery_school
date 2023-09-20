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
                <input type='text' name='post[admin_id]' placeholder='番号'/>
            </div>
            <div class='title'>
                <input type='text' name='post[title]' placeholder='保育施設名'/>
            </div>
            <div class='vacant'>
                <textarea name='post[body]' placeholder='人数空き状況'></textarea>
            </div>
            <div class='borrow'>
                <textarea name='post[body]' placeholder='預かり時間（延長保育を含む）'></textarea>
            </div>
            <div class='fee'>
                <textarea name='post[body]' placeholder='料金体系'></textarea>
            </div>
            <div class='parking'>
                <textarea name='post[body]' placeholder='近隣の交通機関や駐車施設'></textarea>
            </div>
            <div class='schedule'>
                <textarea name='post[body]' placeholder='１日の主な日程'></textarea>
            </div>
            <div class='free'>
                <textarea name='post[body]' placeholder='自由記入欄（保育施設宣伝や教育方針）'></textarea>
            </div>
            <input type="submit" value="記事を追加する"/>
        </form>
        <div class='footer'>
            <a href='/admin/'>戻る</a>
        </div>
    </body>
</html>