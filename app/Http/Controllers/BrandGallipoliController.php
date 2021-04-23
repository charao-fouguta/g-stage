<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandGallipoliController extends Controller
{
    public function index()
    {
        $gallipoli = Brand::BrandGallipoli()->first();
        return view('gallipoli.index', compact('gallipoli'));
    }
}
