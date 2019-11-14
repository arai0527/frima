@extends('./layouts/app')
@section('content')
<header class="single-header">
</header>
<div class="container">
    <div class="card text-center mx-auto my-3"   style="width: 45rem;">
        <div class="card-body mx-4">
            <form action="{{ route('update_profile') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="1-single-content px-5 font-weight-bold">
                    <div class="form-group col-auto py-2">
                        <label for="text" class="float-left">ニックネーム</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder="">
                        @if($errors->has('name'))<span class="float-left" style="color:#ff0000;">{{ $errors->first('name') }}</span>@endif
                    </div>
                    <div class="form-group col-auto py-2">
                        <label for="textarea" class="float-left">自己紹介文</label>
                        <textarea rows="5" name="text" class="form-control">{{ $user->text }}</textarea>
                        @if($errors->has('text'))<span class="float-left" style="color:#ff0000;">{{ $errors->first('text') }}</span>@endif
                    </div>
                    <div class="form-group col-auto pt-2">
                        <button type="submit" class="btn-danger btn-block p-3 my-4">更新する</button>
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
@endsection