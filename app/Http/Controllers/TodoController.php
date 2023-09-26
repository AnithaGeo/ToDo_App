<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function index(){
        $tasks=todo::orderBy('id','DESC')->get();

        // dd($tasks);
        return view('pages.index',[
          'tasks'=>$tasks,
        ]);
    }
    public function add(){
        return view('pages.addtask');
    }
    public function cpswd(){
        return view('pages.changepswd');
    }
    public function editt(){
        return view('pages.edittask');
    }

    public function profile(){
        return view('pages.profile');
    }

    public function store(Request $request){
        $tasks=todo::create([
            'title'=>$request->input('title'),
            'desc'=>$request->input('desc'),
            'user_id' => 1,
        ]);
        return redirect()->route("pages.index");
    }

    // public function edit(){
    //     return view('edit');
    // }
    public function update(){
    }
    public function delete(){
    }
}
