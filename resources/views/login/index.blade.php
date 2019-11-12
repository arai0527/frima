<html>
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
    </head>
    <header class="single-header">
    </header>
    <div class="container">
        <div class="card text-center mx-auto my-3"   style="width: 45rem;">
            <div class="card-body mx-4">
                <form action="/login_auth" method="post">
                    @csrf
                    <div class="1-single-content px-5 font-weight-bold">
                        <div class="form-group col-auto py-2">
                            <label for="email" class="float-left">Eメールアドレス</label>
                            <input type="email" name="email" class="form-control" placeholder="Eメールアドレス">
                            @if($errors->has('email'))<span class="float-left" style="color:#ff0000;">{{ $errors->first('email') }}</span>@endif
                        </div>
                        <div class="form-group col-auto py-2">
                            <label for="password"  class="float-left">パスワード</label>
                            <input type="password" name="password" class="form-control" placeholder="7文字以上">
                            @if($errors->has('password'))<span class="float-left" style="color:#ff0000;">{{ $errors->first('password') }}</span>@endif
                        </div>
                        <div class="form-group col-auto pt-2">
                            <button type="submit" class="btn-danger btn-block p-3 my-4">ログイン</button>
                        </div>
                    </div>
                </form>
                <div class="1-single-content">
                    <div class="form-group col-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="single-footer">
    </footer>
</html>