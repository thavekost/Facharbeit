<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;

class HomeController extends Controller
{
    //
    public function index()
    {
        $articles = article::all();
        return view('home',['articles'=>$articles]);
    }
    public function overview()
    {
        //
        $articles=article::all();
        return view('deleteArticles',['articles'=>$articles]);
    }
}
