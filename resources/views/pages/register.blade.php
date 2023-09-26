@extends('layouts.userlayout')

@section('title','Register')

@section('content')
<form class="my-3" action="{{route('user.register')}}" method="POST">
    @csrf
    <input type="text" name="fullname" class="form-control mb-2" placeholder="Full name">
    <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
    <input type="email" name="email" class="form-control mb-2"  placeholder="Email">
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
    <input type="text" name="username" class="form-control mb-2" placeholder="Username">
    <x-input-error :messages="$errors->get('username')" class="mt-2" />
    <input type="password" name="password" class="form-control mb-2"  placeholder="Password">
    <x-input-error :messages="$errors->get('password')" class="mt-2" />
    <input id="password_confirmation" class="form-control mb-2"
                            type="password"
                            placeholder="Confirm Password"
                            name="password_confirmation" required autocomplete="new-password" />

    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    <div>
    <input type="checkbox" class="form-check-input" id="notification">
    <label for="notification" class="form-check-label"><h6>Allow Notifications</h6></label>
    </div>
     <input type="submit" class="btn btn-primary w-50 mx-auto my-2" style="border-radius: 10px;">
 </form>
@endsection