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
            <div class="card-header py-4 lead">お支払い情報入力</div>
            <div class="card-body mx-4">
                <div class="1-single-content px-5 font-weight-bold">
                    <form action="/signup/confirm" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-md-3 m-3">
                                <label for="zip"  class="float-left">郵便番号</label>
                                <input type="text" class="form-control" name="zip">
                                @if($errors->has('zip'))<span class="float-left" style="color:#ff0000;">{{ $errors->first('zip') }}</span>@endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 m-3">
                                <label for="pref" class="float-left">都道府県</label>
                                <select class="custom-select d-block w-100" name="pref">
                                    <option>選択...</option>
                                    <option>北海道</option>
                                </select>
                                @if($errors->has('pref'))<span class="float-left" style="color:#ff0000;">{{ $errors->first('pref') }}</span>@endif
                            </div>
                            <div class="col-md-4 m-3">
                                <label for="city"  class="float-left">市町村</label>
                                <select class="custom-select d-block w-100" name="city">
                                    <option>選択...</option>
                                    <option>札幌市</option>
                                </select>
                                @if($errors->has('city'))<span class="float-left" style="color:#ff0000;">{{ $errors->first('city') }}</span>@endif
                            </div>
                        </div>
                        <div class="m-3">
                            <label for="address" class="float-left">住所</label>
                            <input type="text" class="form-control" name="address" placeholder="地番">
                            @if($errors->has('address'))<span class="float-left" style="color:#ff0000;">{{ $errors->first('address') }}</span>@endif
                        </div>
                        <div class="form-group col-auto">
                            <button type="submit" class="btn-danger btn-block p-3 mt-5">次へ進む</button>
                        </div>
                    </form>
                </div>
                <div class="1-single-content">
                    <div class="form-group col-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>