<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Discover;
use App\Http\Requests\Admin\DiscoverRequest;

class DiscoversController extends Controller
{
    /**
     * Show all discovers
     *
     * @return response
     */
    public function index(Discover $discover) {
        $discovers = $discover->orderBy('id', 'asc')->get();
        
        return view('admin.discovers.index', compact('discovers'));
    }

    /**
     * Create new category
     *
     * @return response
     */
    public function create() {
        return view('admin.discovers.create');
    }

    /**
     * Store new category
     *
     * @return response
     */
    public function store(DiscoverRequest $request) {

        $discover = Discover::create($request->all());
        $discover->save();

        return redirect()->back()->with(['success' => 'Discover inserted successfully']);
    }

    /**
     * edit existing category
     *
     * @return response
     */
    public function edit($id) {
        $discover = Discover::where('id', $id)->first();

        if (! $discover) {
            return redirect()->back()->with(['error' => 'Data Not Found']);
        }
        return view('admin.discovers.edit', compact('discover'));
    }

    /**
     * update existing category
     *
     * @return response
     */
    public function update($id, DiscoverRequest $request) {
        $discover = Discover::where(['id' => $id])->first();

        if (! $discover) {
            return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
        }

        $discover = $discover->fill($request->all());

        $discover->save();

        return redirect()->back()->with(['success' => 'Discover updated successfully']);
    }

    /**
     * Delete category by the given id
     *
     * @return message
     */
    public function destroy($id) {
        $discover = Discover::where(['id' => $id])->first();

        if (! $discover) {
            return redirect()->back()->with(['error' => 'Data Not Found']);
        }
        Discover::destroy($id);
        return redirect()->back()->with(['success' => 'Discover deleted successfully']);
    }
}
