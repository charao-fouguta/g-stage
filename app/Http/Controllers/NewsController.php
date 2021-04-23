<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::PostedDate()
                        ->Visible()
                        ->paginate(4)
                        ->appends(request()->all());

        return view('news.index', compact('news'));
    }
}
