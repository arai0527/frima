<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
</html>
<div class="container">
    <div class="card text-center mx-auto my-3"   style="width: 45rem;">
        <div class="card-header py-4 lead">入力内容確認</div>
        <div class="card-body mx-4">
            <div class="1-single-content font-weight-bold">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="bg-light">ニックネーム</th>
                            <td>{{ $data['registration_form']['nickname'] }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">メールアドレス</th>
                            <td>{{ $data['registration_form']['email'] }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">パスワード</th>
                            <td>{{ $data['registration_form']['password'] }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">郵便番号</th>
                            <td>{{ $data['payment_method_form']['zip'] }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">都道府県</th>
                            <td>{{ $data['payment_method_form']['pref'] }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">市町村</th>
                            <td>{{ $data['payment_method_form']['city'] }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">地番</th>
                            <td>{{ $data['payment_method_form']['address'] }}</td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" onClick="location.href='/signup/complete'" class="btn-danger btn-block py-3 my-4">登録する</button>
            </div>
        </div>
    </div>
</div>