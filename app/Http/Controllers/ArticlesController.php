<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $articles = Article::paginate(5);
        return view('articles.index', compact('articles'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {

        return view('articles.create');
        /* dd($sliders); */
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $articleRequest)
    {

        $data=$articleRequest->validated();
        $data['users_id']=auth()->id();
        /* dd($data); */
        $post=Article::create($data);
        if($articleRequest->hasFile('image')){
            /* $post->clearMediaCollection('post-image'); */
            $post->addMediaFromRequest('image')
                ->toMediaCollection('post-image');
        }
        toastr()->timeOut(10000)->closeButton()->addSuccess('Article ajouter avec succès');
        return redirect()->route('articles.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article): View
    {
        /* dd($article->getFirstMediaUrl('post-image')); */
        return view('articles.show', compact('article'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article): View
    {
            /* dd($article->all()); */
        return view('articles.edit', compact('article'));

        //
    }
    /**
     * Update the specified resource in storage.
     */
   public function update(ArticleRequest $articleRequest, Article $article)
{
    $data = $articleRequest->validated();
    $data['users_id']=auth()->id();
   /*  dd($article->all()); */
   /*  $post=Article::update($data); */
    $article->update($data);

    if ($articleRequest->hasFile('image')) {
        $article->clearMediaCollection('post-image');
        $article->addMediaFromRequest('image')
            ->toMediaCollection('post-image');
    }
    toastr()->timeOut(10000)->closeButton()->addSuccess('Article modifier avec succès');
    return redirect()->route('articles.index');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Article supprimer avec succès');
        return redirect()->route('articles.index');
        //
    }

}
