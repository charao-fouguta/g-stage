<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderby('posted_date', 'desc')
                        ->paginate(10)
                        ->appends(request()->all());   

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'posted_date' => 'required|date',
            'image' => 'required|image|file|mimes:jpg,png',
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'visible' => 'required|boolean',
            'link' => 'nullable|string|max:500',
        ]);

        if($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $validatedData['image'] = Storage::putFileAs('news', $request->image, $filename);
        }

        $news = News::create($validatedData);

        return redirect()->route('admin.news.index')->with('success', "News: {$news->title}を追加しました");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'posted_date' => 'required|date',
            'image' => 'nullable|image|file|mimes:jpg,png',
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'visible' => 'required|boolean',
            'link' => 'nullable|string|max:500',
        ]);

        if($request->hasFile('image')) {
            if(Storage::exists('news', $request->image)) {
                Storage::delete($news->image);
                $filename = $request->image->getClientOriginalName();
                $validatedData['image'] = Storage::putFileAs('news', $request->image, $filename);
            } 
        }

        $news->update($validatedData);
        
        return redirect()->route('admin.news.index')->with('success', "News: {$news->title}を更新しました");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', "News: {$news->title}を削除しました");
    }
}
