<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::orderBy('created_at', 'desc')->get();
        // $todos = Todo::orderBy('created_at', 'asc')->get();


        // dd($todos);
        return view('index')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->input('title'));
        $this->validate($request,
            [
                'title' => 'required',
                'content' => 'required',
                'due' => 'required',
            ]
        );

        $todo = new Todo();
        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->due = $request->input('due');

        $todo->save();

        return redirect('/')->with('succes', 'Todo created succesfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = Todo::find($id);
        // dd($todo);
        return view('show')->with('todo', $todo);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::find($id);
        // dd($id);
        return view('edit')->with('todo', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request, $id);

        $todo = Todo::find($id);

        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->due = $request->input('due');

        $todo->save();

        return redirect('/')->with('succes', 'Todo edit succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);

        $todo = Todo::find($id);
        $todo->delete();

        return redirect('/')->with('succes', 'Todo deleted succesfully');
    }
}
