@extends('layouts.userlayout')

@section('title','profile')
    
@section('content')
    <form>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder="Username">
            </div>
        </div>
        <div class="form-group row">
            <label for="fullname" class="col-sm-2 col-form-label">FullName</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="fullname" placeholder="Full Name">
            </div>
        </div>
        <div>
            <input type="checkbox" class="form-check-input" id="notification">
            <label for="notification" class="form-check-label float-left"><h6>Allow Notifications</h6></label>
        </div>
        <br>
        <div class="btn btn-primary float-left mt-2">Change Password</div>       
        <div class="">
            <button type="submit" class="btn btn-primary btn-block float-right">Save Changes</button>
        </div>
    </form>
@endsection