<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cats;
use App\Models\News;


class CatsController extends Controller
{
    public function index()
   {
       $cats = Cats::getCats();
       return view('categories')->with('cats', $cats);
   }
   public function show($id)
   {
       $news = News::getNews();
       foreach ($news as $key => $new) {
           if ($new['cat_id'] == $id) {
               $newsCurCat[] = $news[$key];
           }
       }
       $arResult['news'] = $newsCurCat;
       $arResult['category'] = Cats::getCatsId($id);
       return view('cat-one')->with('arResult', $arResult);
   }
}
