@extends('layouts.layout')

@section('title','EditTask')
    
@section('content')
    <div class="container-md text-center mx-auto my-5 p-3 border" style="width: 650px">
        <div class="h4">Edit Task</div>
        <form action="/pages" method="POST" class="p-4">
            @csrf
            <input type="text" class="form-control my-4" name="title" placeholder="Todo Name">
            <textarea class="form-control my-4" name="desc" placeholder="Todo Description"></textarea>
            <input type="submit" class="btn btn-primary float-end" value="Submit">
        </form>
    </div>
@endsection

