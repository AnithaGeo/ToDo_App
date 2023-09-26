<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index(){
        $tasks=todo::where("user_id",Auth::user()->id)->orderBy('id','DESC')->get();

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
    public function editt(String $id){
        $task = todo::findOrFail($id);
        return view('pages.edittask',compact("task"));
    }

    public function update(Request $request,String $id){
        $task = todo::findOrFail($id);
        $task->title = $request->input('title');
        $task->desc = $request->input('desc');
        $task->save();
        return redirect()->route("pages.index");
    }

    public function profile(){
        return view('pages.profile');
    }

    public function store(Request $request){
        $tasks=todo::create([
            'title'=>$request->input('title'),
            'desc'=>$request->input('desc'),
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route("pages.index");
    }

    // public function edit(){
    //     return view('edit');
    // 
    public function destroy(String $id){
        $id = todo::findOrFail($id);
        $id->delete();
        return back();
    }
}
