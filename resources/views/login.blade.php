@extends('userlayout')

@section('title','Login')
    
@endsection

@section('content')
<form class="my-3">
    <input type="email" id="email" class="form-control"  placeholder="Email">
    <input type="password" id="password" class="form-control my-2"  placeholder="Password">
    <span class=""><a href="#">Forgot password?</a></span><br>
    <input type="submit" class="btn btn-primary btn-block my-2">
    <span>Don't have an account? <a href="#">Register</a></span>
 </form>
@endsection