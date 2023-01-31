<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    //
    public function todolist(){
        return view('todolist')->with('todolist',todolist::all());
    }

public function create(){
    return view('create_new_todolist');
    
    
}

public function store(Request $request){
  

    $todo = new todolist();
    
    $todo->name = $request->input('name');
    $todo->save();
    return back();

}

public function delete(todolist $todolist,$id){
        $row = todolist::destroy($id);
        // $row->delete();
        return back();

}

public function edit(todolist $todolist,$id){
    $todo =  todolist::find($id);
    return view('editlist')->with('todolist', $todo );
}

public function update(Request $request,todolist $todolist,$id){
    $todo =todolist::find($id);
    
    $todo->name = $request->input('name');
    $todo->save();
    return back();

}








}
