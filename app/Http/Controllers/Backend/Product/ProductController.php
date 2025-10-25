<?php

namespace App\Http\Controllers\Backend\Product;

use App\Models\Image\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;
use App\Models\Product\Product;
use App\Models\Category\Categoty;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //* INDEX 
    public function productIndex()
    {
        $categories = Categoty::get();
        return view('backend.product.index', compact('categories'));
    }

    //* STORE 
    public function productCreate(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->categoty_id = $request->category_id;
        $product->slug = 'product' . time() . Str::slug($request->title); // i-phone-15
        $product->price = $request->price;
        $product->dis_price = $request->dis_price;
        $product->is_stock = $request->stock;
        $product->status = $request->status;
        $product->descriptions = $request->descriptions;
        $product->save();
        Swal::success([
            'title' => 'New Product Added! ',
        ]);
        return back();
    }

    //* SHOW 
    public function productShow()
    {
        $products = Product::simplePaginate(10);
        return view('backend.product.show', compact('products'));
    }

    //* EDIT 
    public function productEdit($id)
    {
        $categories = Categoty::get();
        $editProduct = Product::find($id);
        // dd($editProduct);
        return view('backend.product.edit', compact('editProduct', 'categories'));
    }
    //* UPDATE 
    public function productUpdate(Request $request, $id)
    {
        $product = Product::find($id);
        $product->title = $request->title;
        $product->categoty_id = $request->category_id;
        $product->slug = 'product' . time() . Str::slug($request->title); // i-phone-15
        $product->price = $request->price;
        $product->dis_price = $request->dis_price;
        $product->is_stock = $request->stock;
        $product->status = $request->status;
        $product->descriptions = $request->descriptions;
        $product->save();
        Swal::success([
            'title' => 'Product Updated!',
        ]);
        return redirect()->route('dashboard.product.show');
    }

    //* delete 
    public function productDelete($id)
    {
        $product = Product::find($id)->delete();
        return redirect()->route('dashboard.product.show');
    }
    //* productImage
    public function productImage()
    {
        $products = Product::select('id', 'title')->get();
        // dd($products);
        return view('backend.product.image', compact('products'));
    }


    //**productImagesStore 

    public function productImagesStore(Request $request)
    {



        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $uniName = 'product-' . time() . '.' . $image->getClientOriginalName();
                $image->storeAs('product/', $uniName, 'public');
                Image::create([
                    'image'=> $uniName,
                    'product_id' => $request->product_id,
                ]);
            }
        }

        
    }


    //* productImageShow
    public function productImageShow(){
        $images = Product::with('images')->simplePaginate(10);
        // dd($images);
        return view('backend.product.imageShow', compact('images'));
    }

    //* EDIT 
    public function productImageEdit($id){
        $products = Product::select('id', 'title')->get();
        $findImages = Product::with('images')->find($id);

        // dd($products,$findImages);
        return view('backend.product.editImage', compact('products', 'findImages'));
    }


    //* DELETE 
    public function productImageDelete($id){
        Image::find($id)->delete();
        return back();
    }

    //* UPDATE 
    public function productImageUpdate(Request $request, $id){
     
        
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $uniName = 'product-' . time() . '.' . $image->getClientOriginalName();
                $image->storeAs('product/', $uniName, 'public');
                Image::create([
                    'image'=> $uniName,
                    'product_id' => $request->product_id,
                ]);
            }
        }
        return redirect()->route('dashboard.product.image.show');
    }
}
