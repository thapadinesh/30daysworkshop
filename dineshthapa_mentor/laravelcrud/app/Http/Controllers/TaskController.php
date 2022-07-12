<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskCreateRequest;
use Illuminate\Http\Request;

use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = new Task;
        $task = $task->get();
        return view('tasks.index',compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskCreateRequest $request)
    {
        $task = new Task;
        $task->title = $request->title;
        $task->des = $request->des;

        $task->save();

        notify()->success('Task is added successfully.😊');

        return redirect('task');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = new Task;
        $task = $task->where('id',$id)->first();
        return view('tasks.show',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = new Task;
        $task = $task->where('id',$id)->first();
        return view('tasks.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TaskCreateRequest $request, $id)
    {
        $task = new Task;
        $task = $task->where('id',$id)->first();
        $task->title = $request->title;
        $task->des = $request->des;

        $task->update();

        notify()->success('Task is updated successfully.😊');

        return redirect('task');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = new Task;
        $task = $task->where('id',$id)->first();
        $task->delete();

        notify()->success('Task is deleted successfully.😊');

        return redirect('task');
    }
}
