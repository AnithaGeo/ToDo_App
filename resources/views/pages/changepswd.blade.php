@extends('layouts.userlayout')

@section('title','ChangePassword')
    
@section('content')
<form class="my-3">
    <input type="email" id="email" class="form-control"  placeholder="Email">
    <input type="text" id="username" class="form-control my-2"  placeholder="Username">
    <input type="password" id="password" class="form-control my-2"  placeholder="Enter new password">
    <input type="submit" class="btn btn-primary btn-block my-2">
    <span>Don't have an account? <a href="{{route('pages.register')}}">REGISTER</a></span>
 </form>
@endsection