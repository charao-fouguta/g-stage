@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="h3 mb-2 text-gray-800">コーディネーション一覧</h1>
            <a href="{{ route('admin.coordination.create') }}" class="btn btn-primary mb-2">新規登録</a>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table table-sm">
                    <thead>
                        <th style="width: 25%">ID</th>
                        <th style="width: 25%">ブランドタイプ</th>
                        <th style="width: 25%">画像</th>
                        <th style="width: 25%">編集</th>
                    </thead>
                    <tbody>
                        @foreach($coordinations as $coordination)
                            <tr>
                                <td style="width: 25%">{{ $coordination->id }}</td>
                                <td style="width: 25%">{{ $coordination->selected_brand_type }}</td>
                                <td style="width: 25%"><img src="{{ $coordination->coordination_img }}" style="max-width: 80px; max-height: 80px"></td>
                                <td style="width: 25%"><a class="btn btn-primary" href="{{ route('admin.coordination.edit', ['coordination' => $coordination->id]) }}">編集</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection