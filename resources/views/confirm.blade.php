<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>申し込み確認画面</title>
    </head>
    <body>
        <form method='POST' action='/form/complete'>
            @csrf
            <div>
                <dl>
                    <div>
                        <dt>氏名（漢字）</dt>
                        <dd>{{ $inputs['user[name]'] }}</dd>
                    </div>
                    <div>
                        <dt>氏名（カナ）</dt>
                        <dd>{{ $inputs['user[kana_name]'] }}</dd>
                    </div>
                    <div>
                        <dt>E-mail</dt>
                        <dd>{{ $inputs['user[email'] }}</dd>
                    </div>
                    <div>
                        <dt>電話番号</dt>
                        <dd>{{ $inputs['user[phone]'] }}</dd>
                    </div>
                    <div>
                        <dt>住所</dt>
                        <dd>{{ $inputs['user[address]'] }}</dd>
                    </div>
                    <div>
                        <dt>ご希望される保育施設</dt>
                        <dd>{{ $inputs['user[hope]'] }}</dd>
                    </div>
                    <div>
                        <dt>その他ご要望・ご質問（任意）</dt>
                        <dd>{{ $inputs['user[other]'] }}</dd>
                    </div>
                </dl>
            </div>
            <div>
                <x-primary-button name='back'>修正する</x-primary-button>
                <x-primary-button>内容を送信</x-primary-button>
            </div><!--後で丸くするために-->
        </form>
    </body>
</html>