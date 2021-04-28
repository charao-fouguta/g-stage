<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\BrandCoordination;
use Illuminate\Http\Request;
use Storage;


class BrandCoordinationController extends Controller
{
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, BrandCoordination $coordination)
    {
        $coordination->delete();
        // リファラーの参照
        if($request->referrer == 'gstage') {
            return redirect()->route('admin.gstage.create')->with('success', "G-stageを更新しました");
        } else if($request->referrer == 'gallipoli') {
            return redirect()->route('admin.gallipoli.create')->with('success', "GALLIPOLIを更新しました");
        }
    }
}
