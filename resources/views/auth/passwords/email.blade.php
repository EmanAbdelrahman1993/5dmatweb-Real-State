@extends('layouts.app')

@section('title')
  استرجاع كلمة المرور
@endsection

@section('content')
<div class="container">
    <div class="contact_bottom">
        <h3>اعادة ادخال الايميل</h3>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('اعادة كلمة المرور') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-6 col-form-label text-md-right">{{ __('الايميل') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-success">
                                    {{ __('ارسال رابط تأكيد كلمة المرور') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
