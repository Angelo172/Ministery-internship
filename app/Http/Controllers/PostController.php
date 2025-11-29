<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Slider;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        $actualites = Slider::latest()->skip(1)->first();
        return view('actualites', compact('articles', 'actualites'));
    }

    public function show(Article $article)
    {
        return view('actualite', compact('article'));
    }
    //
    public function search(Request $request){
        $actualite = Slider::latest()->first();
        $query = $request->input('q');
        $articles = Article::where('title', 'LIKE', "%{$query}%")
                ->orWhere('description', 'LIKE', "%{$query}%")
                ->paginate(10);
        return view('articles.search_results', compact('actualite','articles', 'query'));
    }
}

