<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function index(){
        $todo=todo::all();
        return view('pages.index');
    }
    public function add(){
        return view('pages.addtask');
    }
    public function store(){
        $todo=todo::create([
            'title'=>request('title'),
            'desc'=>request('desc'),
        ]);
        return redirect('/pages/index');
    }

    public function edit(){
        return view('edit');
    }
    public function update(){
    }
    public function delete(){
    }
}
