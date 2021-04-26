@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="h3 mb-2 text-gray-800">News一覧</h1>
            <a href="{{ route('admin.news.create') }}" class="btn btn-primary mb-2">新規登録</a>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table table-sm">
                    <thead>
                        <th>投稿日</th>
                        <th>メイン画像</th>
                        <th>タイトル</th>
                        <th>掲載可否</th>
                        <th>編集</th>
                    </thead>
                    <tbody>
                        @foreach($news as $new)
                        <tr>
                            <td>{{ $new->posted_date }}</td>
                            <td><img src="{{ $new->main_img }}" style="max-width: 80px; max-height: 80px"></td>
                            <td>{{ $new->title }}</td>
                            <td>{{ $new->visible ? '掲載' : '非掲載' }}</td>
                            <td><a href="{{ route('admin.news.edit', ['news' => $new->id]) }}" class="btn btn-primary">編集</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- ページネーション -->
        <div class="mt-2">{{ $news->links() }}</div>
    </div>
</div>
@endsection