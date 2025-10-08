<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use App\Models\Category\Categoty;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //categoryIndex
    public function categoryIndex()
    {
      $allCategory = Categoty::select('id' ,'title')->get();
      return view('backend.category.index', compact('allCategory'));
    }

    //*STORE 
    public function categoryStore(Request $request)
    {
        dd($request->all());
    }

        
    
}
