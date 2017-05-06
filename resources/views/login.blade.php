@extends('master')

@section('body')
    <!-- Notifications -->
    @if(isset($_GET['error']) && ($_GET['error'] == 'ld'))
        <section class="notification grey-bg">
            <span class="title-text">Invalid login details</span>
        </section>
    @endif

    <section class="session-frame">
        <div class="login-div">
            {{ Form::open(['route'=>'action_login_path', 'method'=>'POST']) }}
                <div class="{{ $errors->has('username')? 'has-error': '' }}">
                    {!! Form::text('username', null, ['class'=>'login', 'placeholder'=>'Username']) !!}
                    {!! $errors->first('username', "<span class='error'>* :message</span>") !!}
                </div>

            <div class="{{ $errors->has('password')? 'has-error': '' }}">
                {!! Form::password('password', ['placeholder'=>'Password'], ['class'=>'login']) !!}
                {!! $errors->first('password', "<span class='error'>* :message</span>") !!}
            </div>

                <a href=""><span class="account-help-text">Forgot Password?</span></a>
                {{ Form::submit('Login', ['class'=>'login']) }}
            {{ Form::close() }}

            <hr>

            <!-- Signup Section -->
            <span class="account-help-text">Dont Have an Account?</span>
            <a href="{{ route('signup_path') }}"><input type="submit" value="Create Account"></a>
        </div>
    </section>

@stop