@extends('layouts.app')

@section('title')
تسجيل عضوية جديدة
@endsection

@section('content')
<div class="container">


    <div class="contact_bottom">
        <h3>تسجيل عضوية جديدة</h3>
        </br>
        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('تسجيل عضوية جديدة') }}">
            @csrf

            <div class="text">
                <div class="col-md-12">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="الأسم" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="text2">
                <div class="col-md-12">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="الايميل" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="text2">
                <div class="col-md-12">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="رقم المرور" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="text2">
                <div class="col-md-12">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="تأكيد رقم المرور" required>
                </div>
            </div>
            </br>

            <div class="text2">
                <div class="col-md-12 ">
                    <button type="submit" class="btn btn-warning">
                        <i class="fa fa-btn fa-sign-in" style="color: #ffffff"></i>
                        {{ __('تسجيل') }}
                    </button>
                </div>
            </div>

        </form>

    </div>




</div>



@endsection
