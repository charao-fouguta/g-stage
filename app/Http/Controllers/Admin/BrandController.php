<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Storage;

class BrandController extends Controller
{
    public function gstage_create()
    {
        $gstage = Brand::BrandGstage()->first();
        $coordinations = $gstage ? $gstage->coordination()->get() : null;
        return view('admin.g-stage.create', compact('gstage', 'coordinations'));
    }

    public function gallipoli_create()
    {
        $gallipoli = Brand::BrandGallipoli()->first();
        $coordinations = $gallipoli ? $gallipoli->coordination()->get() : null;
        return view('admin.gallipoli.create', compact('gallipoli', 'coordinations'));
    }

    public function store(Request $request)
    {
        Brand::where('brand_type', $request->brand_type)->exists() ? $judge = 'nullable' : $judge = 'required';
        $validatedData = $request->validate([
            'video' => $judge . '|file|mimes:mp4', 
            'brand_type' => 'nullable|integer',
        ]);

        if($request->hasFile('video')) {
            $filename = $request->video->getClientOriginalName();
            $validatedData['video'] = Storage::putFileAs('brand', $request->video, $filename);
        }

        $brand = Brand::updateOrCreate(['brand_type' => $request->brand_type], $validatedData);

        foreach($request->all() as $key => $val) {
            if(preg_match('/image/', $key)) {
                $filename = $request->image->getClientOriginalName();
                $brand->coordination()->updateOrCreate([
                    'image' => Storage::putFileAs('coordination', $request->image, $filename),
                    'brand_id' => $request->brand_type,
                ]);
            }
        }

        $brand_type = config('admin.brand_type')[$request->brand_type];

        return redirect()->back()->with('success', "{$brand_type}を更新しました");
    }
}
