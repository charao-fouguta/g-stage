@extends('admin.layouts.app')

@section('content')
<h1 class="h3 mb-2 text-gray-800">コーディネーション編集</h1>

<div class="card mb-5">
    <div class="card-body">
        <div class="row">
            <div class="col text-danger">
                ※　必須入力
            </div>
        </div>
        <form action="{{ route('admin.coordination.update', ['coordination' => $coordination->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <input name="referrer" type="hidden" value="{{ $referrer }}">
            <div class="form-group row mt-4">
                <label class="col-sm-2 col-form-label">ブランドタイプ<sup class="text-danger">※</sup></label>
                <div class="col-sm-3">
                    @foreach(config('admin.brand_type') as $value => $name)
                        <div class="form-check form-check-inline">
                            <input type="radio" name="brand_id" class="form-check-input" value="{{ $value }}" @if(old('brand_id', $coordination->brand_id) == $value) checked @endif>
                            <label class="form-check-label">{{ $name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for='image' class="col-sm-2 col-form-label">画像<sup class="text-danger">※</sup></label>
                <div class="col-sm-3">
                    <!-- vue component -->
                    <image-preview :old-image="{{ json_encode($coordination->coordination_img) }}"></image-preview>
                </div>
            </div>
            <div class="form-group row mt-4">
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-success">保存</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection