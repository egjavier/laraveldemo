<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import Model Todo
use App\Models\Todo;

class TodoController extends Controller
{
    // READ AND RETURN DATA
    public function display(){
        return view('home')->with('todos', Todo::all());
        // Todo is the Model
        // ::all() means all data from Todo Model
    }

    public function create(Request $request) {

        $todo = new Todo();
        $todo->content = $request->content;
        $todo->status = 'Pending';
        $todo->save();

        return redirect()->route('home')->with('success', "Added new task successfully");
    }
}
