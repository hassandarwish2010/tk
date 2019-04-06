<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Http\Requests\Admin\ProductRequest;

class ProductsController extends Controller
{
  /**
   * Show all products
   *
   * @return response
   */
  public function index(Product $product) {
     $products = $product->with('category')->orderBy('id', 'asc')->get();
     foreach ($products as $product) {
       $product->en_details = clean_limit($product->en_details);
       $product->image = asset('public/uploads/thumbs/' . $product->image);
     }
     return view('admin.products.index', compact('products'));
  }

  /**
   * Create new product
   *
   * @return response
   */
  public function create() {
    $categories = Category::all();

    return view('admin.products.create', compact('categories'));
  }

  /**
   * Store new product
   *
   * @return response
   */
  public function store(ProductRequest $request) {
    //dd($request->all());
    request()->validate([
     'image' => 'required|image|max:5000',
      'image2' => 'required|image|max:5000',
       'image3' => 'required|image|max:5000',
     'permalink' => 'required|string|unique:products',
    ]);

      // if($request->position==1){
      //     $img=uploadImageProject($request->image, 750, 375,367,244);
      // }elseif ($request->position==2){
      //     $img=uploadImageProject($request->image, 750, 375,367,570);

      // }elseif ($request->position==3){
      //     $img=uploadImageProject($request->image, 750, 375,744,319);

      // }else{
      //     $img=uploadImageProject($request->image, 750, 375,600,300);

      // }
    $request->image = uploadImage($request->image,367,244);
    $request->image2 = uploadImage2($request->image2,367,570);
    $request->image3 = uploadImage3($request->image3,744,319);

    $product = Product::create($request->all());
    $product->image =$request->image;
    $product->image2 =$request->image2;
    $product->image3=$request->image3;

    $product->save();

    return redirect()->back()->with(['success' => 'Product inserted successfully']);
  }

  /**
   * edit existing product
   *
   * @return response
   */
  public function edit($id) {
    $categories = Category::all();
    $product = Product::where('id', $id)->first();
    if (! $product) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    $product->image = asset('public/uploads/thumbs/' . $product->image);
      $product->image2 = asset('public/uploads/thumbs2/' . $product->image2);
      $product->image3 = asset('public/uploads/thumbs3/' . $product->image3);

    return view('admin.products.edit', compact('product', 'categories'));
  }

  /**
   * update existing product
   *
   * @return response
   */
  public function update($id, ProductRequest $request) {
    $product = Product::where(['id' => $id])->first();

    if (! $product) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }

    request()->validate([
      'permalink' => 'required|string|unique:products,permalink,'.$id,
    ]);

    $product = $product->fill($request->except('image'));
     if($request->hasFile('image')) {
         // if($product->position==1){
         //     $product->image=uploadImageProject($request->image, 750, 375,367,244);
         // }elseif ($product->position==2){
         //     $product->image=uploadImageProject($request->image, 750, 375,367,570);

         // }elseif ($product->position==3){
         //     $product->image=uploadImageProject($request->image, 750, 375,744,319);

         // }else{
         //     $product->image=uploadImageProject($request->image, 750, 375,600,300);

         // }
      $product->image = uploadImage($request->image,367,244);
     }
     if($request->hasFile('image2')) {
      $product->image2 = uploadImage2($request->image2,367,570);
     }
     if($request->hasFile('image3')) {
      $product->image3 = uploadImage3($request->image3,744,319);
     }
    $product->save();

   return redirect()->back()->with(['success' => 'product updated successfully']);
  }

  /**
   * Delete product by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $product = Product::where(['id' => $id])->first();

    if (! $product) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    Product::destroy($id);
    return redirect()->back()->with(['success' => 'Product deleted successfully']);
  }
}
