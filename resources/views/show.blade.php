@extends('layout')
@section('content')
    <h1>paiza bbs</h1>
    <p>{{$message}}</p>


     <p>{{$article->content}}</p>
    <p>{{$article->user_name}}</p>
    <a href="{{route('article.list')}}"class="btn btn-outline-primary">一覧に戻る</a>
    <a class="btn btn-outline-primary"href="{{route('article.edit',$article->id)}}">編集</a>
    <div>
        <form method="post"action="{{route('article.delete',$article)}}">
        @method('DELETE')
        @csrf
        <button type="submit"class="btn btn-outline-secondary">削除</button>
        </form>
    </div>
@endsection
