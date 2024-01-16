<?php

// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use image;

class ProductController extends Controller
{
    public function __construct()
    {

    }


    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        if ($product) {
            return view('products.show', compact('product'));
        } else {
            return redirect('/products')->with('error', 'Product tidak ditemukan');
        }
    }

    public function image($imageName)
    {
        $filePath = storage_path(env('PATH_IMAGE').'/product/'.$imageName);
        return Image::make($filePath)->response();
    }
}

