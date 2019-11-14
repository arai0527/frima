@extends('./layouts/app')
@section('content')
<div class="container">
    <div class="card text-center mx-auto"  style="width: 45rem;">
        <div class="card-header">
            <div class="btn-group float-right">
                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ...
                </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('profile') }}">プロフィール編集</a>
                    </div>
                </div>
        </div>
        <img class="card-img-top" src="/storage/sheep-4499562_960_720.jpg" alt="Card image cap" style="height: 20rem;">
        <div class="card-body">
            <div>
                出品数:{{ $product_count }}
            </div>
            <hr>
            <p class="card-text">
                {{ $user->text }}
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="text-center mx-auto"  style="width: 45rem;">
        <div class="row mt-3">
            <div class="col text-left">
                <h3>この出品者の出品</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($user->product as $value)
                <a href="/{{ $value['id'] }}" class="card m-3 shadow-sm" style="width: 13rem;">
                    <img class="card-img-top" src="/storage/{{ $value->image[0]->name }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $value['name'] }}</h5>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection