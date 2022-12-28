@extends('layout')

@section('content')
    <h1>paiza bbs</h1>
    <p>{{$message}}</p>
    <form method="post"action="{{route('article.store')}}">
        @csrf
        <div class="form-group">
            <label>
                Content:
            </label>
            <input type="text"name="content">
        </div>
        <div class="form-group">
            <label>
                Name:
            </label>
            <input type="text"name="user_name">
        <div class="form-group">

            <button type="submit"class="btn btn-primary">作成する</button>
            <a href="{{route('article.list')}}">一覧に戻る</a>
        </div>
    </form>
@endsection
