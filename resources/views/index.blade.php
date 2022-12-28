@extends('layout')
@section('content')

    <h1>paiza bbs</h1>
    <p>{{$message}}</p>
    @include('search')
    <table class="table table-striped table-hover">
        @foreach($articles as $article)
        <tr>
    <td><a href="{{route('article.show',$article->id)}}">
        {{$article->content}}
        {{$article->user_name}}
    </a></td>
        </tr>
    @endforeach


    </table>
    <div>
        <a href="{{route('article.new')}}"class="btn btn-outline-primary">新規登録</a>
    </div>
@endsection


