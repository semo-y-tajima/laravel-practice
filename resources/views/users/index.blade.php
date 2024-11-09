@extends('adminlte::page')

@section('title', 'ユーザー一覧')

@section('content_header')
    @can('access-admin')
        <!-- 管理者専用のリンクを表示 -->
        <p>Admin Dashboard 権限確認用</p>
    @endcan
    <h1>ユーザー一覧</h1>
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="ユーザー名で検索" value="{{ request()->get('search') }}">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">検索</button>
        </div>
    </div>
@stop

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop