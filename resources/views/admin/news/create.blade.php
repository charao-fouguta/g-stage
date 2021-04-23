@extends('admin.layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
@endsection

@section('content')
<h1 class="h3 mb-2 text-gray-800">News登録</h1>

<div class="card mb-5">
    <div class="card-body">
        <div class="row">
            <div class="col text-danger">
                ※　必須入力
            </div>
        </div>
        <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row mt-4">
                <label for='posted_date' class="col-sm-2 col-form-label">投稿日<sup class="text-danger">※</sup></label>
                <div class="col-sm-3">
                    <input type="date" class="form-control form-control-sm-2" name="posted_date" id="posted_date" value="{{ old('posted_date') }}">
                </div>
                @error('posted_date')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-group row mt-4">
                <label for='image' class="col-sm-2 col-form-label">メイン画像<sup class="text-danger">※</sup></label>
                <div class="col-sm-3">
                    <!-- vue component -->
                    <image-preview></image-preview>
                </div>
                @error('image')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-group row mt-4">
                <label for="title" class="col-sm-2 col-form-lable">タイトル<sup class="text-danger">※</sup></label>
                <div class="col-5">
                    <input type="text" class="form-control form-control-sm-2" name="title" id="title" value="{{ old('title') }}">
                </div>
                @error('title')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-group row mt-4">
                <label for="content" class="col-sm-2 col-form-lable">内容</label>
                <div class="col-6">
                    <textarea name="content" id="content" class="form-control form-control-sm" rows="12">{{ old('content') }}</textarea>
                </div>
                @error('content')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-group row mt-4">
                <legend class="col-2 col-form-label">掲載可否<sup class="text-danger">※</sup></legend>
                <div class="col-8">
                    <div class="form-check form-check-inline">
                        <input type="radio" name="visible" id="visible" class="form-check-input" value="1" @if(old('visible') == "1") checked @endif>
                        <label for="visible" class="form-check-label">掲載</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="visible" id="not_visible" class="form-check-input" value="0" @if(old('visible') == "0") checked @endif>
                        <label for="not_visible" class="form-check-label">非掲載</label>
                    </div>
                    @error('visible')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
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

@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://rawgit.com/jquery/jquery-ui/master/ui/i18n/datepicker-ja.js"></script>

<script>
$('#posted_date').datepicker({
    dateFormat: 'yy-mm-dd'
});
</script>
@endsection