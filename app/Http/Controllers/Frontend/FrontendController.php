<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    //** HOME
    public function index(){
        $products = Product::with('images')->get();
        // dd($products);
        return view('welcome', compact('products'));
    }
}
