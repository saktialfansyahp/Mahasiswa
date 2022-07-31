@extends('layout_auth')
@section('title', "Login")
@section("content")
<div class="container">
    <div class="row" style="padding-top: 50px">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="form-login" style="text-align: center;">
                <h4>Login</h4>
            </div>
            @if (session("success"))
            <div class="alert alert-primary">{{ session('success') }}</div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                {!! implode('', $errors->all('<li>:message</li>')) !!}
            </div>
            @endif
            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email"
                        value="{{ old('email')}}">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <br>
            belum punya akun ? <a href="{{ url('/register') }}">Register</a>
        </div>
    </div>
</div>
@endsection
