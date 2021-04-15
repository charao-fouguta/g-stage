@extends('admin.layouts.app')

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