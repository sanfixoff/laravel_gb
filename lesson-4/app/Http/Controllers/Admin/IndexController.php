<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function create(Request $request, Category $category, News $news) {
        if ($request->isMethod('post')) {

            $data = $news->getNews();
            $data[] = [
                "title" => $request->title,
                "text" => $request->text,
                "isPrivate" => isset($request->isPrivate),
                "category_id" => (int)$request->category
            ];
            $id = array_key_last($data);
            $data[$id]['id'] = $id;
            Storage::disk('local')->put('news.json', json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

            // $request->flash();
            return redirect()->route('admin.create')->with('success', 'Новость успешно добавлена!');
        }
        return view('admin.create', [
            'categories' => $category->getCategories()
        ]);
    }

    public function test1()
    {
        return response()->download('news-img1.jpg');
    }

    public function test2(News $news)
    {
        return response()->json($news->getNews())
            ->header('Content-Disposition', 'attachment; filename = "news.txt"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}
