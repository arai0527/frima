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
<div class="container">
    <div class="card text-center mx-auto my-4"  style="width: 45rem;">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <img src="/storage/{{ $product->image[0]->name }}" class="img-fuild w-100" alt="">
                </div>
                <div class="col-lg-6">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th class="bg-light">商品名</th>
                                <td>{{ $product->name }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light">配送先</th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="my-4">
                <span class="h1">￥{{ $product->price }}</span>
                <span class="h6">(税込)</span>
                <span class="h5">送料込み</span>
            </div>
            <form action="{{ route('purchase.complete') }}" method="post">
                @csrf
                <input type="hidden" name="product" value="{{ $product->id }}">
                <button type="submit" class="btn-danger btn-block p-3 lead">購入する</button>
            </form>
        </div>
    </div>
</div>
