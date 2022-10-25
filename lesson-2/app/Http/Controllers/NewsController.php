<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::getNews();
        return view('news')->with('news', $news);
    }
    public function show($id)
    {
        $news = News::getNewsId($id);
        return view('single-new-one')->with('news', $news);
    }
}
