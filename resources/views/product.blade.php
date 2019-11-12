@extends('./layouts/app')
@section('content')
<div class="container">
    <div class="card text-center mx-auto"  style="width: 45rem;">
        <div class="card-body">
            <div class="card-title my-4">
                <h2>{{ $product->name }}</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="/storage/{{ $product->image[0]->name }}" class="img-fuild w-100" alt="">
                </div>
                <div class="col-lg-6">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th class="bg-light">出品者</th>
                                <a href="/user/{{ $product->user->id }}">
                                    <td>{{ $product->user->name }}</td>
                                </a>
                            </tr>
                            <tr>
                                <th class="bg-light">カテゴリー</th>
                                <td>{{ $product->category->name }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light">ブランド</th>
                                <td>{{ $product->brand->name }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light">商品の状態</th>
                                <td>{{ $product->condition->name }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light">配送料の負担</th>
                                <td>{{ $product->deliveryPayment->name }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light">配送方法</th>
                                <td>{{ $product->deliveryMethod->name }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light">発送元地域</th>
                                <td>{{ $product->area->name }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light">発送日の目安</th>
                                <td>{{ $product->deliveryDay->name }}</td>
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
            <button onclick="location.href='/purchase/{{ $product->id }}'" class="btn-danger btn-block p-3 lead">購入画面に進む</button>
            <div class="my-5">
                <p class="h3">{{ $product->text }}</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="text-center mx-auto"  style="width: 45rem;">
        <div class="row mt-3">
            <div class="col text-left">
                <h3>{{ $product->user->name }}さんのその他の出品</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($products_by_user as $product)
            <a href="/{{ $product->id }}" class="card m-3 shadow-sm" style="width: 13rem;">
                <img class="card-img-top" src="/storage/{{ $product->image[0]->name }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <div class="text-center mx-auto"  style="width: 45rem;">
        <div class="row mt-3">
            <div class="col text-left">
                <h3>{{ $product->category->name }}　その他の出品</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($products_by_categories as $product)
            <a href="/{{ $product->id }}" class="card m-3 shadow-sm" style="width: 13rem;">
                <img class="card-img-top" src="/storage/{{ $product->image[0]->name }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection