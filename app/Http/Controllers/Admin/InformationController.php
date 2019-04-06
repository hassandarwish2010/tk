<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Information;
use App\Http\Requests\Admin\InformationRequest;
use File;
class InformationController extends Controller
{
  /**
   * Show all information
   *
   * @return response
   */
  public function index(Information $info) {
     $information = $info->orderBy('id', 'asc')->get();
//dd($information);
     return view('admin.information.index', compact('information'));
  }

  /**
   * Create new category
   *
   * @return response
   */
  public function create() {

    return view('admin.information.create');
  }

  /**
   * Store new category
   *
   * @return response
   */
  public function store(InformationRequest $request) {
    $info = Information::create($request->all());
    $info->save();

    return redirect()->back()->with(['success' => 'Information inserted successfully']);
  }

  /**
   * edit existing category
   *
   * @return response
   */
  public function edit($id) {
    $info = Information::where('id', $id)->first();

    if (! $info) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }

      return view('admin.information.edit',compact('info'));
  }

  /**
   * update existing category
   *
   * @return response
   */
  public function update($id, InformationRequest $request) {
    $info = Information::where(['id' => $id])->first();

    if (! $info) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }

    $info = $info->fill($request->all());
    $info->save();

   return redirect()->back()->with(['success' => 'Information updated successfully']);
  }

  /**
   * Delete category by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $info = Information::where(['id' => $id])->first();
    Information::destroy($id);
    return redirect()->back()->with(['success' => 'Information deleted successfully']);
  }


}
