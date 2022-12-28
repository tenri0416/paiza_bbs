<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->filled('keyword')) { //空かどうかチェック
            $keyword = $request->input('keyword');
            $message = 'Welcome to BBS' . $keyword;
            $articles = Article::where('content', 'like', '%' . $keyword . '%')->get();
        } else {
            $message = 'Welcome to my BBS';
            $articles = Article::all();
        }
        return view('index', ['message' => $message, 'articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $message = 'NEW article';
        return view('new', ['message' => $message,]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->content = $request->content;
        $article->user_name = $request->user_name;
        $article->save();

        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $message = 'This is your article' . $id;
        $article = Article::find($id);
        return view('show', ['message' => $message, 'article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message = 'edit!! is your article' . $id;
        $article = Article::find($id);
        return view('edit', ['message' => $message, 'article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Article $article)
    {
        $article = Article::find($id);
        $article->content = $request->content;
        $article->user_name = $request->user_name;
        $article->save();

        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id, Article $article)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles');
    }
}
