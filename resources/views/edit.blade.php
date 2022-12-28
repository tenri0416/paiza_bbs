@extends('layout')

@section('content')
    <h1>paiza bbs</h1>
    <p>{{$message}}</p>

    <form method="post"action="{{route('article.update',$article->id)}}">
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

            <button type="submit"class="btn btn-primary">保存する</button>
            <a href="{{route('article.show',$article)}}">一覧に戻る</a>
        </div>
    </form>
@endsection
