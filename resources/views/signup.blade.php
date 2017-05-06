@extends('master')

@section('body')
    <!-- Notifications -->
    @if(isset($_GET['error']) && ($_GET['error'] == 'sd'))
        <section class="notification grey-bg">
            <span class="title-text">Invalid details</span>
        </section>
    @endif
    <section class="session-frame">
        <div class="login-div">
            {{ Form::open(['route'=>'action_signup_path', 'method'=>'POST']) }}
                {{ Form::text('name', null, ['class'=>'login', 'placeholder'=>'Full Name']) }}
                {!! $errors->first('name', '<span class="error">* :message</span>') !!}

                {{ Form::email('email', null, ['class'=>'login', 'placeholder'=>'Email']) }}
                {!! $errors->first('email', '<span class="error">* :message</span>') !!}

                {{ Form::text('phone', null, ['class'=>'login', 'placeholder'=>'Phone No']) }}
                {!! $errors->first('phone', '<span class="error">* :message</span>') !!}

                {{ Form::text('alt_phone', null, ['class'=>'login', 'placeholder'=>'Alternative Phone No']) }}

                {{ Form::text('address', null, ['class'=>'login', 'placeholder'=>'Address']) }}
                {!! $errors->first('address', '<span class="error">* :message</span>') !!}

                {{ Form::text('username', null, ['class'=>'login', 'placeholder'=>'Choose Username']) }}
                {!! $errors->first('username', '<span class="error">* :message</span>') !!}

                {{ Form::password('password', ['placeholder'=>'Password'], ['class'=>'login']) }}
                {!! $errors->first('password', '<span class="error">* :message</span>') !!}

                {{ Form::password('password2', ['placeholder'=>'Retype Password'], ['class'=>'login']) }}

                {{ Form::submit('Create Account') }}
            {{ Form::close() }}
            <hr><!-- Signup Section -->

            <a href=""><span class="account-help-text">Already Have an Account?</span></a>
            <a href="{{ route('login_path') }}"><input type="submit" value="Login"></a>
        </div>

    </section>

@stop