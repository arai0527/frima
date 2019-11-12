@extends('../layouts/app')
@section('content')
<div class="container-fuild">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <!-- スライドさせる画像の設定 -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/storage/sheep-4499562_960_720.jpg" style="height: 300px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/storage/dandelion-4492884_960_720.jpg" style="height: 300px;">
            </div>
        </div>
        <!-- スライドコントロールの設定 -->
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">前へ</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">次へ</span>
        </a>
    </div>
</div>
<div class="container-field bg-white mb-4">
    <div class="row mx-auto p-4">
        <div class="col text-center pt-4">
            <h2>人気のカテゴリー</h2>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="col text-center mb-3">
            @foreach ($products_by_categories as $key => $product)
                <button type="button" class="btn bg-light btn-outline-info rounded-pill m-2">
                    <a href="/category/{{ $product[0]->category_id }}">
                        {{ $key }}
                    </a>
                </button>
            @endforeach
        </div>
    </div>
</div>
@foreach ($products_by_categories as $key => $product)
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>{{ $key }} 新着アイテム</h3>
        </div>
        <div class="col text-right">
            <a class="btn btn-default" href="/category/{{ $product[0]->category_id }}">もっと見る ></a>
        </div>
    </div>
    <div class="row">
        @foreach ($product as $detail)
        <a href="/{{ $detail['id'] }}" class="card m-3 shadow-sm" style="width: 15rem;">
            <img class="card-img-top" src="/storage/{{ $detail->image[0]->name }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $detail['name'] }}</h5>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endforeach

<div class="container-field bg-white mb-4">
    <div class="row mx-auto p-4">
        <div class="col text-center pt-4">
            <h2>人気のブランド</h2>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="col text-center mb-3">
            @foreach ($products_by_brands as $key => $product)
                <button type="button" class="btn bg-light btn-outline-info rounded-pill m-2">
                    <a href="/brand/{{ $product[0]->brand_id }}">
                        {{ $key }}
                    </a>
                </button>
            @endforeach
        </div>
    </div>
</div>
@foreach ($products_by_brands as $key => $product)
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>{{ $key }} 新着アイテム</h3>
        </div>
        <div class="col text-right">
            <a class="btn btn-default" href="/brand/{{ $product[0]->brand_id }}" >もっと見る ></a>
        </div>
    </div>
    <div class="row">
        @foreach ($product as $detail)
        <a href="/{{ $detail['id'] }}" class="card m-3 shadow-sm" style="width: 15rem;">
            <img class="card-img-top" src="/storage/{{ $detail->image[0]->name }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $detail['name'] }}</h5>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endforeach
@endsection

