<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Article;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class FrontController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->where('status', 'actived')->get();
        $sliders = Slider::latest()->where('status', 'actived')->get()->take(4);
        $articlesday = Article::latest()->where('status', 'actived')->get();
        /* $selectedArticles = Article::where('status', 'actived')->whereIn('id', [6, 7, 8])->get(); */
        /* $article = Article::where('status', 'actived')->find(1);
        $articles = Article::where('status', 'actived')->find(2); */
        return view('index', compact('sliders','articles', 'articlesday'));
    }
    //
}




// Example of selecting specific articles by IDs
        // You can replace the IDs with the ones you want to select
        // For example, if you want to select articles with IDs 3, 4, and 5:
        // $selectedArticles = Article::where('status', 'actived')->whereIn('id', [3, 4, 5])->get();
        // For demonstration purposes, let's assume you want to select articles with IDs 3, 4, and 5
        // This will retrieve articles with those IDs if they exist
        // If you want to select articles with specific IDs, you can modify the array accordingly
        // Example: $selectedArticles = Article::where('status', 'actived')->whereIn('id', [3, 4, 5])->get();
        // Here, we are selecting articles with IDs 3, 4, and 5
        // You can adjust the IDs based on your requirements
        // $selectedArticles = Article::where('status', 'actived')->whereIn('id', [3, 4, 5])->get();
        // For demonstration purposes, let's assume you want to select articles with IDs 3, 4, and 5
        // This will retrieve articles with those IDs if they exist
        // If you want to select articles with specific IDs, you can modify the array accordingly
        // Example: $selectedArticles = Article::where('status', 'actived')->whereIn('id', [3, 4, 5])->get();
        // Here, we are selecting articles with IDs 3, 4, and 5
        // You can adjust the IDs based on your requirements
        // $selectedArticles = Article::where('status', 'actived')->whereIn('id', [3, 4, 5])->get();
        // For demonstration purposes, let's assume you want to select articles with IDs 3, 4, and 5
        // This will retrieve articles with those IDs if they exist
        // If you want to select articles with specific IDs, you can modify the array accordingly
        // Example: $selectedArticles = Article::where('status', 'actived')->whereIn('id', [3, 4, 5])->get();
        // Here, we are selecting articles with IDs 3, 4, and 5
        // You can adjust the IDs based on your requirements
        // $selectedArticles = Article::where('status', 'actived')->whereIn('id', [3, 4, 5])->get();
        // For demonstration purposes, let's assume you want to select articles with IDs 3, 4, and 5
        // This will retrieve articles with those IDs if they exist
        // If you want to select articles with specific IDs, you can modify the array accordingly
        // Example: $selectedArticles = Article::where('status', 'actived')->whereIn('id', [3, 4, 5])->get();
        // Here, we are selecting articles with IDs 3, 4, and 5
        // You can adjust the IDs based on your requirements
        // $selectedArticles = Article::where('status', 'actived')->whereIn('id', [3, 4, 5])->get();
        // For demonstration purposes, let's assume you want to select articles with IDs 3, 4, and 5
        // This will retrieve articles with those IDs if they exist
