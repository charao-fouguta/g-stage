<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class TopController extends Controller
{
    public function index()
    {
        $news = News::PostedDate()
            ->Visible()
            ->orderby('posted_date', 'desc')
            ->take(4)
            ->get();

        return view('index', compact('news'));
    }
}
