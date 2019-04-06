<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Process;
use App\Http\Requests\Admin\ProcessRequest;

class ProcessController extends Controller
{
  /**
   * Show all processes
   *
   * @return response
   */
  public function index(Process $processes) {
     $processes = $processes->orderBy('id', 'asc')->get();
    
     return view('admin.processes.index', compact('processes'));
  }

  /**
   * Create new processes
   *
   * @return response
   */
  public function create() {
    return view('admin.processes.create');
  }

  /**
   * Store new processes
   *
   * @return response
   */
  public function store(ProcessRequest $request) {
    

    $processes = Process::create($request->all());
    
    $processes->save();

    return redirect()->back()->with(['success' => 'Process inserted successfully']);
  }

  /**
   * edit existing processes
   *
   * @return response
   */
  public function edit($id) {
    $process = Process::find($id);
    if (! $process) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }

    return view('admin.processes.edit', compact('process'));
  }

  /**
   * update existing processes
   *
   * @return response
   */
  public function update($id, ProcessRequest $request) {
    $process = Process::find($id);

    if (! $process) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }

   $process->title=$request->title;
   $process->description=$request->description;
    //$process = $process->update($request->all);
   
    $process->update();

   return redirect()->back()->with(['success' => 'Process updated successfully']);
  }

  /**
   * Delete processes by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $process = Process::find($id);

    if (! $process) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    Process::destroy($id);
    return redirect()->back()->with(['success' => 'Process deleted successfully']);
  }
}
