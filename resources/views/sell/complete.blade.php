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
    <div class="container">
        <div class="card text-center mx-auto my-3"   style="width: 45rem;">
            <div class="card-header py-4 lead">出品完了</div>
            <div class="card-body mx-4">
                <div class="form-group col-auto">
                    <button onClick="location.href='/'" class="btn-danger btn-block p-3 mt-5">ホームに戻る</button>
                </div>
            </div>
        </div>
    </div>
</html>