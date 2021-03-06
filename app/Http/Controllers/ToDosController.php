<?php

namespace App\Http\Controllers;

use App\ToDo;
use Illuminate\Http\Request;

class ToDosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    //fetch all todo's from database
    //list all the to dos in index page
        return view('todos.index')->with('todos', ToDo::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request());
    
    $this->validate(request(),[
        'name' => 'required',
        'description' => 'required|min:6|max:100'

    ]);

    $data = request()->all();

    $todo = New Todo();
    $todo->name = $data['name'];
    $todo->description = $data['description'];
    $todo->completed = false;
    $todo->save();

    session()->flash('success', 'Task created sucessfully!');
    
    return redirect('/todos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ToDo $todo)
    {
        // $todo = Todo::find($todoId);
        return view('todos.show')->with('todo', $todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ToDo $todo)
    {
       // $todo = ToDo::find($todoId);

        return view('todos.edit')->with('todo', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ToDo $todo)
    {
        $this->validate(request(),[
            'name' => 'required',
            'description' => 'required|min:6|max:100'
    
        ]);
    
        $data = request()->all();

        // $todo = ToDo::find($todoId);

        $todo->name = $data['name'];

        $todo->description = $data['description'];

        $todo->save();

        session()->flash('update', 'Task updated sucessfully!');

        return redirect('/todos');
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function complete(Request $request, ToDo $todo)
    {
        // $this->validate(request(),[
        //     'name' => 'required',
        //     'description' => 'required|min:6|max:100'
    
        // ]);
    
        $data = request()->all();

        // $todo = ToDo::find($todoId);

        $todo->completed = 1;

        $todo->save();

        session()->flash('complete', 'Task marked as completed!');

        return redirect('/todos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ToDo $todo)
    {
    
    //$todo = ToDo::find($todoId);

    $todo->delete();
    
    session()->flash('delete', 'Task deleted sucessfully!');

    return redirect('/todos');
    }
}
