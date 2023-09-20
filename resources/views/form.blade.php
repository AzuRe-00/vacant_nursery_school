<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>保育施設情報入力画面</title>
    </head>
    <body>
        <form method='POST' action='/form/confirm'>
            @csrf
            <div>
                <x-input-label for='name' value='氏名（漢字）'/>
                <input id='name' name='user[name]' type='text' :value='old('user[name]')'required autofocus/>
                <x-input-error class='mt-2' :messages='$errors->get('user[name]')'/>
            </div>
            <div>
                <x-input-label for=kana_name value='氏名（カナ）' />
                <input id='kana_name' name='user[kana_name]' type='text' :value='old('user[kana_name]')' required />
                <x-input-error class='mt-2' :messages='$errors->get('user[kana_name]')' />
            </div>
            <div>
                <x-input-label for='email' value='E-mail' />
                <input id='email' name='user[email]' type='text' :value='old('user[email]')' required />
                <x-input-error class='mt-2' :messages='$errors->get('user[email]')' />
            </div>
            <div>
                <x-input-label for='phone' value='電話番号' />
                <input id='phone' name='user[phone]' type='text' :value='old('user[phone]')' required />
                <x-input-error class='mt-2' :messages='$errors->get('user[phone]')' />
            </div>
            <div>
                <x-input-label for='address' value='住所' />
                <input id='address' name='user[address]' type='text' :value='old('user[address]')' required />
                <x-input-error class='mt-2' :messages='$errors->get('user[address]')' />
            </div>
            <div>
                <x-input-label for='hope' value='ご希望される保育施設' />
                <input id='hope' name='user[hope]' type='text' :value='old('user[hope]')' required />
                <x-input-error class='mt-2' :messages='$errors->get('user[hope]')' />
            </div>
            <div>
                <x-input-label for='other' value='その他ご要望・ご質問（任意）' />
                <textarea name='user[other]' :value=old'('user[other]')'></textarea>
                <x-input-error class='mt-2' :messages='$errors->get('user[other]')' />
            </div>
            
            
            <div>
                <x-primary-button>内容を確認</x-primary-button>
            </div><!--後で丸くするために-->
        </form>
    </body>
</html>