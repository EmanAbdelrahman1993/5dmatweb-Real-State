@csrf
{{--@include('admin.users.form')--}}


<div class="text">
    <div class="col-md-12">
        {!! Form::text('name' , null , ['class'=> 'form-control' , 'placeholder' => 'الأسم']) !!}
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
        @endif
    </div>
</div>

<div class="text2">
    <div class="col-md-12">
        {!! Form::text('email' , null , ['class'=> 'form-control'  , 'placeholder' => 'الإيميل']) !!}

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
    </div>
</div>




@if(!isset($user))
    <div class="text2{{$errors->has('password')}} ? 'has-error' : '' ">
        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password" placeholder="رقم المرور" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="text2{{$errors->has('password_confirmation')}} ? 'has-error' : '' ">
        <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="تأكيد رقم المرور" required>
            @if ($errors->has('password_confirmation'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
    </div>
</div>

    <div class="form-group row mb-0">
        <div class="col-md-12">
            <button type="submit" class="btn btn-warning">
                <i class="fa fa-btn fa-sign-in" style="color: #ffffff"></i>
            </button>
نسيت كلمة المرور
        </div>
    </div>




@endif


<div class="form-group row mb-0">
    <div class="col-md-12">
        <button type="submit" class="btn btn-warning">
            <i class="fa fa-btn fa-sign-in" style="color: #ffffff"></i>
        </button>
حفظ
    </div>
</div>
