@extends('layouts.layout')

@section('title','AddTask')
    
@section('content')
    <div class="container-md text-center mx-auto my-5 p-3 border" style="width: 650px">
        <form action="" method="post" class="p-4">
            <input type="text" class="form-control my-4" name="name" placeholder="Todo Name">
            <textarea class="form-control my-4" name="description"  placeholder="Todo Description"></textarea>
            <input type="submit" class="btn btn-primary float-end" value="Submit">
        </form>
    </div>
@endsection

