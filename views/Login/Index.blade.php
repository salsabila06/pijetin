
@extends('Main.Index')

@section('title','Login')

<div class="title">
    <p>
        Login
    </p>
</div>

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div>
    <form method="POST" action="/">
        <fieldset>
            <div>
                <input type="text" id="username" name="username" placeholder="username">
            </div>
            <div>
                <input type="password" id="password" name="password" placeholder="password">
            </div>
            <button type="submit" id="login-btn">Login</button>
            <div class="text">
                <p id="dont-have-account">
                    Don't have account? <a href="{{route('register-page')}}">register</a>
                </p>
                <p>
                    <a id="forgot-pass" href="{{route('reset')}}">Forgot password?</a>
                </p>
            </div>
        </fieldset>
    </form>
</div>




