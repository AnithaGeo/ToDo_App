@extends('layouts.userlayout')

@section('title','Register')

@section('content')
<form class="my-3">
    <input type="text" id="name" class="form-control mb-2" placeholder="Full name">
    <input type="email" id="email" class="form-control mb-2"  placeholder="Email">
    <input type="text" id="username" class="form-control mb-2" placeholder="Username">
    <input type="password" id="password" class="form-control mb-2"  placeholder="Password">
    <div>
    <input type="checkbox" class="form-check-input" id="notification">
    <label for="notification" class="form-check-label"><h6>Allow Notifications</h6></label>
    </div>
     <input type="submit" class="btn btn-primary w-50 mx-auto my-2" style="border-radius: 10px;">
 </form>
@endsection