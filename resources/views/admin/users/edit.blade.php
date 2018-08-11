@extends('admin.layouts.layout')

@section('title')
    تعديل بيانات العضو
@endsection


@section('content')
    <section class="content-header">
        <h1>
            
                    تعديل بيانات العضو
                        {{$user->name}}
        </h1>

        <ol class="breadcrumb">
            <li><a href="{{url('/adminPanel')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
            <li><a href="{{url('users')}}">بيانات الاعضاء</a></li>
            <li class="active"><a href="{{url('/users/'.$user->id.'/edit')}}">
                    تعديل بيانات العضو

			</a></li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"/>
                    تعديل بيانات العضو
                        {{$user->name}}
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="POST" action="{{url('users/'.$user->id)}}">
                            <input type="hidden" name="_method" value="PUT"/>
                            @include('admin.users.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
