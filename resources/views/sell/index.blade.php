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
                <form action="{{ route('sell') }}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="1-single-content px-5 font-weight-bold">
                        <div class="form-group col-auto py-2">
                            <label for="photo" class="float-left">出品物の画像を選択</label>
                            <div class="input-group">
                                <label class="input-group-btn">
                                    <span class="btn btn-primary">
                                        Choose File<input type="file" name="photo" style="display:none">
                                    </span>
                                </label>
                                <input type="text" class="form-control" readonly="">
                            </div>
                        </div>
                        <div class="form-group col-auto py-2">
                            <label for="name" class="float-left">商品の名前</label>
                            <input type="text" name="name" class="form-control" placeholder="">
                            @if($errors->has('email'))<span class="float-left" style="color:#ff0000;">{{ $errors->first('email') }}</span>@endif
                        </div>
                        <div class="form-group col-auto py-2">
                            <label for="category" class="float-left">カテゴリー</label>
                            <select class="custom-select d-block w-100" name="category">
                                <option>選択...</option>
                                @foreach ($categories as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-auto py-2">
                            <label for="brand"  class="float-left">ブランド</label>
                            <select class="custom-select d-block w-100" name="brand">
                                <option>選択...</option>
                                @foreach ($brands as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('city'))<span class="float-left" style="color:#ff0000;">{{ $errors->first('city') }}</span>@endif
                        </div>
                        <div class="form-group col-auto py-2">
                            <label for="condition"  class="float-left">商品の状態</label>
                            <select class="custom-select d-block w-100" name="condition">
                                <option>選択...</option>
                                @foreach ($conditions as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('city'))<span class="float-left" style="color:#ff0000;">{{ $errors->first('city') }}</span>@endif
                        </div>
                        <div class="form-group col-auto py-2">
                            <label for="delivery_payment"  class="float-left">配送料の負担</label>
                            <select class="custom-select d-block w-100" name="delivery_payment">
                                <option>選択...</option>
                                @foreach ($delivery_payments as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('city'))<span class="float-left" style="color:#ff0000;">{{ $errors->first('city') }}</span>@endif
                        </div>
                        <div class="form-group col-auto py-2">
                            <label for="delivery_method"  class="float-left">配送の方法</label>
                            <select class="custom-select d-block w-100" name="delivery_method">
                                <option>選択...</option>
                                @foreach ($delivery_methods as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('city'))<span class="float-left" style="color:#ff0000;">{{ $errors->first('city') }}</span>@endif
                        </div>
                        <div class="form-group col-auto py-2">
                            <label for="area"  class="float-left">配送元地域</label>
                            <select class="custom-select d-block w-100" name="area">
                                <option>選択...</option>
                                @foreach ($areas as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('city'))<span class="float-left" style="color:#ff0000;">{{ $errors->first('city') }}</span>@endif
                        </div>
                        <div class="form-group col-auto py-2">
                            <label for="delivery_day"  class="float-left">発送日の目安</label>
                            <select class="custom-select d-block w-100" name="delivery_day">
                                <option>選択...</option>
                                @foreach ($delivery_days as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('city'))<span class="float-left" style="color:#ff0000;">{{ $errors->first('city') }}</span>@endif
                        </div>
                        <div class="form-group col-auto py-2">
                            <label for="price" class="float-left">値段</label>
                            <input type="text" name="price" class="form-control" placeholder="">
                            @if($errors->has('email'))<span class="float-left" style="color:#ff0000;">{{ $errors->first('email') }}</span>@endif
                        </div>
                        <div class="form-group col-auto py-2">
                            <label for="text" class="float-left">商品説明</label>
                            <input type="text" name="text" class="form-control" placeholder="">
                            @if($errors->has('email'))<span class="float-left" style="color:#ff0000;">{{ $errors->first('email') }}</span>@endif
                        </div>
                        <div class="form-group col-auto pt-2">
                            <button type="submit" class="btn-danger btn-block p-3 my-4">出品する</button>
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