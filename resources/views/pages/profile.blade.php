@extends('layouts.userlayout')

@section('title','profile')
    
@section('content')
<form class="my-3">
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" id="email" value="email@example.com">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="fullname" class="col-sm-2 col-form-label">FullName</label>
        <div class="col-sm-10">
          <input type="fullname" class="form-control" id="fullname">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="username" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
          <input type="username" class="form-control" id="username">
        </div>
      </div>
   <div class="input-group mb-3">
    <div class="mx-4">
        <input type="checkbox" class="form-check-input" id="notification">
        <label for="notification" class="form-check-label"><h6>Allow Notifications</h6></label>
    </div>
  </div>
  <span class="mx-5"><a href="{{route('pages.changepswd')}}">Change password</a></span>
  <span class="btn-group">
    <button type="button" class="btn btn-primary" style="border-radius: 20px" id="toggleButton" data-toggle="button" aria-pressed="false" autocomplete="off">
        Get Premium Account
        </button>
  </span>

   <input type="submit" class="btn btn-primary btn-block mt-2" value="Save Changes">
   <a href="/pages/login" class="btn btn-secondary my-3 mx-5">Logout</a>
   <a href="#" class="btn btn-danger my-3">Delete Account</a>

</form>
@endsection