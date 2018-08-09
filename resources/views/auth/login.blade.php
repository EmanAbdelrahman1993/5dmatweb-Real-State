@extends('layouts.app')

@section('title')
صفحة الدخول
@endsection

@section('content')
<div class="container">
    <div>
        <h3>تسجيل الدخول</h3>
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('تسجيل الدخول') }}">
                        @csrf


                       <div class="row" >

                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <label for="password">رقم المرور</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                       </div>
                           <div class="col-lg-12">
                               <div class="form-group">
                                   <label for="email">الايميل</label>
                                   <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                   @if ($errors->has('email'))
                                       <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                   @endif
                               </div>
                           </div>


                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        تذكرنى
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-warning">
                                    <i class="fa fa-btn fa-sign-in"></i>
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
