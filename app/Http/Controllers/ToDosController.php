<?php

namespace App\Http\Controllers;

use App\ToDo;
use Illuminate\Http\Request;
use Session;

class ToDosController extends Controller
{
    public function index()
    {
    	$todos = ToDo::all();
    	// return $todos;
    	
    	 // return view('todos',compact('todos'));
    	 return view('todos')->with('todos',$todos);
    }

    public function store(Request $request)
    {

    	$todos = new ToDo;
    	$todos->todos = $request->todo;
    	$todos->save();
    	Session::flash('success','Your ToDo was Created');
    	return redirect()->back();
    }

    public function delete($id)
    {	
    	$todo = ToDo::find($id);
    	$todo->delete();
    	Session::flash('success','Your ToDo was Deleted');
    	return redirect()->back();


    }
    public function update($id)
    {	
    	$todo = ToDo::find($id);
    	// return $todo;
    	
    	return view('update')->with('todo',$todo);


    }
    public function save(Request $request, $id)
    {
    	// dd($request->all());
    	$todo = ToDo::findOrFail($id);
    	$todo->todos = $request->todo;
    	$todo->save();
    	Session::flash('success','Your ToDo was Updated');
    	return redirect()->route('todos');
    }
    public function finished($id)
    {
    	// dd($request->all());
    	$todo = ToDo::findOrFail($id);
    	$todo->completed = 1;
    	$todo->save();
    	Session::flash('success','Your ToDo was Marked Competed');
    	return redirect()->back();
    }
}
