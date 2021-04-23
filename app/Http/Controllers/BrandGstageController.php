<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandGstageController extends Controller
{
    public function index()
    {
        $gstage = Brand::BrandGstage()->first();
        return view('g-stage.index', compact('gstage'));
    }
}
