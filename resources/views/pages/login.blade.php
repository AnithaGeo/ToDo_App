@extends('layouts.userlayout')

@section('title','Login')
    

@section('content')
<form class="my-3" method="POST" action="{{ route('login') }}">
    @csrf
    <input type="email" name="email" class="form-control"  placeholder="Email">
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
    <input type="password" name="password" class="form-control my-2"  placeholder="Password">
    <x-input-error :messages="$errors->get('password')" class="mt-2" />
    <span class=""><a href="#">Forgot password?</a></span><br>
    <input type="submit" class="btn btn-primary btn-block my-2">
    <span>Don't have an account? <a href="{{route('pages.register')}}">REGISTER</a></span>
 </form>
@endsection