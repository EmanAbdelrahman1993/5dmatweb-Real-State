@extends('layouts.app')

@section('title')
صفحة الدخول
@endsection

@section('content')
<div class="container">
    <div class="contact_bottom">
        <h3>تسجيل الدخول</h3>
        </br>
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="text2">
                            <div class="col-md-12">

                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="إدخل إيميلك"   required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="text2">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="كلمة المرور" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="text2">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                          <input type="checkbox" name="remember" id="remember" style="float: right; margin-left: 10px;" {{ old('remember') ? 'checked' : '' }}>

                                        تذكرنى
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-warning">
                                    <i class="fa fa-btn fa-sign-in" style="color: #ffffff"></i>
                                    تسجيل الدخول
                                </button>

                                <a class="banner_btn" href="{{ route('password.request') }}">
                                    هل نسيت كلمة المرور؟
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
