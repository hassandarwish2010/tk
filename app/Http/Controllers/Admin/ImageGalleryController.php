<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ImageGallery;
use App\Http\Requests\Admin\galleryRequest ;
use File;
use App\Image;
class ImageGalleryController extends Controller
{
  /**
   * Show all images
   *
   * @return response
   */
  public function index(ImageGallery $image) {
     $images = $image->orderBy('id', 'asc')->get();
      foreach ($images as $image) {
       $image->main_image = asset('public/uploads/thumbs/' . $image->main_image);
       $image->afterimage = asset('public/uploads/thumbs/' . $image->afterimage);
     }
//dd($images);
     return view('admin.imagesgellery.index', compact('images'));
  }

  /**
   * Create new category
   *
   * @return response
   */
  public function create() {

    return view('admin.imagesgellery.create');
  }

  /**
   * Store new category
   *
   * @return response
   */
  public function store(galleryRequest $request) {
    request()->validate([
     'main_image' => 'required|image|max:5000',
        'afterimage' => 'required|image|max:5000',
    ]);
    $request->main_image = uploadImage($request->main_image,750, 500);
    $request->afterimage = uploadImage($request->afterimage,750, 500);
    $image = ImageGallery::create($request->all());
       $image->main_image = $request->main_image;
      $image->afterimage = $request->afterimage;

    $image->save();

    return redirect()->back()->with(['success' => 'ImageGallery inserted successfully']);
  }

  /**
   * edit existing category
   *
   * @return response
   */
  public function edit($id) {
    $image = ImageGallery::where('id', $id)->first();

    if (! $image) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
        $image->main_image = asset('public/uploads/thumbs/' . $image->main_image);
      $image->afterimage = asset('public/uploads/thumbs/' . $image->afterimage);

        
      return view('admin.imagesgellery.edit',compact('image'));
  }

  /**
   * update existing category
   *
   * @return response
   */
  public function update($id, galleryRequest $request) {
    $image = ImageGallery::where(['id' => $id])->first();

    if (! $image) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }

    $image = $image->fill($request->except(['main_image','afterimage']));
     if($request->hasFile('main_image')) {
         $image->main_image = uploadImage($request->main_image,  750, 500);
     }
      if($request->hasFile('afterimage')) {
          $image->afterimage = uploadImage($request->afterimage,  750, 500);
      }
    $image->save();

   return redirect()->back()->with(['success' => 'ImageGallery updated successfully']);
  }

  /**
   * Delete category by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $image = ImageGallery::where(['id' => $id])->first();
    //$pro_img=Image::where('page_id',$id)->where('type_page','imageGallery')->get();

    $path=$image->main_image;
    $image_path = "public/uploads/thumbs/".$path;  
    $image_path_upload = "public/uploads/".$path;

      $path2=$image->afterimage;
      $image_path2 = "public/uploads/thumbs/".$path2;
      $image_path_upload2 = "public/uploads/".$path2;


  if (! $image) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }



    ImageGallery::destroy($id);
    File::delete($image_path_upload);
    File::delete($image_path);

      File::delete($image_path_upload2);
      File::delete($image_path2);

    return redirect()->back()->with(['success' => 'ImageGallery deleted successfully']);
  }
}