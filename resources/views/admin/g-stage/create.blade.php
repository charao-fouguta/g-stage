@extends('admin.layouts.app')

@section('css')
<style>
.coordination {
    display: flex;
    flex-wrap: wrap;
}
</style>
@endsection

@section('content')
<h1 class="h3 mb-2 text-gray-800">G-stage</h1>

<div class="card mb-5">
    <div class="card-body">
        <div class="row">
            <div class="col text-danger">
                ※　必須入力
            </div>
        </div>
        <form action="{{ route('admin.brand.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="brand_type" value="1">
            <div class="form-group row mt-4">
                <label class="col-sm-2 col-form-label">メイン動画<sup class="text-danger">※</sup></label>
                <div class="col-sm-3">
                    <video-preview :old-video="{{ json_encode($gstage->main_video ?? null) }}"></video-preview>
                </div>
                @error('video')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-group row mt-4">
                <label class="col-sm-2 col-form-label">コーディネーション</label>
                <div class="col-sm-3">
                    <!-- vue component -->
                    <image-preview></image-preview>
                </div>
            </div>
            <div class="form-group row mt-4">
                <div class="ml-4" style="max-width: 600px;">
                    @if($gstage)
                        @foreach($coordinations as $coordination)
                            <a href="{{ route('admin.coordination.edit', ['coordination' => $coordination]) }}"><img src="{{ $coordination->coordination_img }}" class="mb-4 mr-4" style="width: 150px; height: 150px;"></a>
                        @endforeach
                    @endif
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