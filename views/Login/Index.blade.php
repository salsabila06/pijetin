
@extends('Main.Index')

@section('title','Login')

<div class="title">
    <p>
        Login
    </p>
</div>


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

@foreach($data as $dt)
    <div>
        <ul>
            <li>
                {{$dt->first_name}}
            </li>
        </ul>
    </div>
@endforeach



