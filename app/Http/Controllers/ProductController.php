<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $product = Product::get();
        // dd($product);
        return view('dashboard', ['product' => $product]);
    }
}
