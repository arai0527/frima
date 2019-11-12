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
    <div class="container text-center" style="width: 700px;">
        <header class="header py-5">
            <h1>
                <a hraf="">
                    <img src="/storage/fakeimg-2.png" class="img-responsive" style="max-width: 20%;">
                </a>
            </h1>
        </header>
        <body class="bg-light">
            <div class="card">
                <div class="card-header py-4 bg-white" style="font-size: 20px;">新規会員登録</div>
                <div class="card-body py-4">
                    <a href="/signup/registration/" class="btn-default btn-mail">メールアドレスで登録する</a>
                </div>
            </div>
        </body>
        <footer>
        </footer>
    </div>
</html>