@extends('template.main')
@section('title', 'Login')

@section('page')
<form id="login-form" class="form" action="" method="post">
    <h4 class="text-center">Login</h4>
    <div class="card-body">
        {{-- Email --}}
        <div class="form-group row">
            <label for="email_address" class="col-md-5 col-form-label text-md-right">E-Mail Address</label>
            <div class="col-md-3">
                <input type="email" id="email_address" class="form-control" name="email-address" required>
            </div>
        </div>
        {{-- Password --}}
        <div class="form-group row">
            <label for="password" class="col-md-5 col-form-label text-md-right">Password</label>
            <div class="col-md-3">
                <input type="password" id="password" class="form-control" name="password" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6 offset-md-5">
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember Me</label>
                </div>
            </div>
        </div>
        {{-- Button --}}
        <div class="col-md-6 offset-md-5">
            <button type="submit" class="btn btn-primary">
                Login
            </button>
            <a href="#" class="btn btn-link">
                Forgot Your Password?
            </a>
        </div>
    </div>
</form>
@endsection


