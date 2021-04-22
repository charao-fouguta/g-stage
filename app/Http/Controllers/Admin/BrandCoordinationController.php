<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\BrandCoordination;
use Illuminate\Http\Request;
use Storage;


class BrandCoordinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coordinations = BrandCoordination::all();
        return view('admin.coordination.index', compact('coordinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coordination.create');
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
            'brand_id' => 'required|integer',
            'image' => 'required|image|file|mimes:jpg,png',
        ]);

        if(Brand::doesntExist()) {
            return redirect()->route('admin.coordination.index')->with('error', "ブランドの登録がないため追加できませんでした");
        }

        if($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $validatedData['image'] = Storage::putFileAs('coordination', $request->image, $filename);
        }

        BrandCoordination::create($validatedData);

        return redirect()->route('admin.coordination.index')->with('success', "コーディネーションを追加しました");
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
    public function edit(BrandCoordination $coordination)
    {
        // リファラーの参照
        $referrer = null;
        if(url()->previous() === route('admin.gstage.create')) {
            $referrer = 'gstage';
        } else if (url()->previous() === route('admin.gallipoli.create')) {
            $referrer = 'gallipoli';
        }

        return view('admin.coordination.edit', compact('coordination', 'referrer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BrandCoordination $coordination)
    {
        $validatedData = $request->validate([
            'brand_id' => 'required|integer',
            'image' => 'nullable|image|file|mimes:jpg,png',
        ]);

        if($request->hasFile('image')) {
            if(Storage::exists('coordination', $request->image)) {
                Storage::delete($coordination->image);
                $filename = $request->image->getClientOriginalName();
                $validatedData['image'] = Storage::putFileAs('coordination', $request->image, $filename);
            } 
        }

        $coordination->update($validatedData);

        // リファラーの参照
        if($request->referrer == 'gstage') {
            return redirect()->route('admin.gstage.create')->with('success', "G-stageを更新しました");
        } else if($request->referrer == 'gallipoli') {
            return redirect()->route('admin.gallipoli.create')->with('success', "GALLIPOLIを更新しました");
        }
        
        return redirect()->route('admin.coordination.index')->with('success', "コーディネーションを更新しました");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
