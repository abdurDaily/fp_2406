<?php

namespace App\Http\Controllers\Backend\Category;

use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;
use App\Models\Category\Categoty;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
  //categoryIndex
  public function categoryIndex()
  {
    $allCategory = Categoty::select('id', 'title')->get();
    return view('backend.category.index', compact('allCategory'));
  }

  //*STORE 
  public function categoryStore(Request $request)
  {
    $request->validate([
      'title' => 'required',
      'status' => 'required',
    ]);

    $category = new Categoty();
    $category->title = $request->title;
    $category->parent_id  = $request->state;
    $category->status  = $request->status;
    $category->meta_title  = $request->meta_title;
    $category->meta_description  = $request->meta_des;

    if ($request->hasFile('meta_image')) {
      $image = $request->file('meta_image');
      $uniName = 'category-' . time() . '.' . $image->getClientOriginalName();
      $image->storeAs('category/', $uniName, 'public');
      $category->image = $uniName;
    }



    $category->save();
    Swal::success([
      'title' => 'New Category stored! ',
    ]);
    return back();
  }

  //* SHOW 
  public function categoryShow()
  {
    $categories = Categoty::with('subCategories')->latest()->get();
    return view('backend.category.show', compact('categories'));
  }


  //* EDIT CATEGORY 
  public function categoryEdit($id)
  {
    $edit_category = Categoty::with('parentCategories')->find($id);
    // dd($edit_category);
    
    $allCategory = Categoty::select('id', 'title')->get();
    return view('backend.category.edit', compact('edit_category', 'allCategory'));
    // dd($edit_category);
  }


  //* UPDATE 
  public function categoryUpdate(Request $request, $id){
    $request->validate([
      'title' => 'required',
      'status' => 'required',
    ]);


    $update_category = Categoty::find($id);

    $update_category->title = $request->title;
    $update_category->parent_id  = $request->state;
    $update_category->status  = $request->status;
    $update_category->meta_title  = $request->meta_title;
    $update_category->meta_description  = $request->meta_des;

    if ($request->hasFile('meta_image')) {
      $image = $request->file('meta_image');
      $uniName = 'category-' . time() . '.' . $image->getClientOriginalName();
      $image->storeAs('category/', $uniName, 'public');
      $update_category->image = $uniName;
    }

    $update_category->save();
    Swal::success([
      'title' => 'New Category updated! ',
    ]);
    return redirect()->route('dashboard.category.show');
  }

  //* DELETE 
  public function categoryDelete($id){
    Categoty::find($id)->delete();
    return back();
  }
}
