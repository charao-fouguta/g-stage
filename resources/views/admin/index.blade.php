@extends('admin.layouts.app')

@section('css')
<style>
.g-stage-link, .GALLIPOLI-link, .news-link{
    color : inherit;
}
.g-stage-link:hover {
    text-decoration: none;
    color: inherit;
}
.GALLIPOLI-link:hover {
    text-decoration: none;
    color: inherit;
}
.news-link:hover {
    text-decoration: none;
    color: inherit;
}

.g-stage-block, .GALLIPOLI-block, .news-block {
    background-color: #f7f7f7;
    height: 40px;
}

.g-stage-block:hover {
    background-color: #0a0837;
}
.GALLIPOLI-block:hover {
    background-color: #0a0837;
}
.news-block:hover {
    background-color: #0a0837;
}
</style>
@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">ダッシュボード</h1>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-2 ml-4 text-center">
                <span style="color: #0a0837">ブランド管理</span>
                <a class="g-stage-link" href=""><p class="g-stage-block mt-3 d-flex align-items-center justify-content-around">G-stage</p></a>
                <a class="GALLIPOLI-link" href=""><p class="GALLIPOLI-block mt-3 d-flex align-items-center justify-content-around">GALLIPOLI</p></a>
            </div>
            <div class="col-2 text-center">
                <span style="color: #0a0837">News管理</span>
                <a class="news-link" href=""><p class="news-block mt-3 d-flex align-items-center justify-content-around">News</p></a>
            </div>
        </div>
    </div>
</div>
@endsection