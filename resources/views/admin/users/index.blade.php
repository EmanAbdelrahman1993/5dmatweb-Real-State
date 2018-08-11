@extends('admin.layouts.layout')

@section('title')
كل الأعضاء
@endsection

@section('header')
    <link rel="stylesheet" href="back-end/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            التحكم فى الاعضاء

        </h1>

        <ol class="breadcrumb">
            <li><a href="adminPanel"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
            <li class="active"><a href="users">بيانات الاعضاء</a></li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Hover Data Table</h3>


                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="pull-right">#</th>
                                <th>أسم العضو</th>
                                <th>البريد الإلكترونى</th>
                                <th>الصلاحيات</th>
                                <th>التحكم</th>
                            </tr>
                            </thead>
                            <tbody>
							@foreach($user as $userInfo)
                            <tr>
                                <td >{{$userInfo->id}}</td>
                                <td>{{$userInfo->name}}</td>
                                <td>{{$userInfo->email}}</td>
                                <td>{{$userInfo->admin == 1 ? 'مدير' : 'عضو' }}</td>
                                <td>
                                    <a href="{{url('users/'.$userInfo->id.'/edit')}}">تعديل</a>
                                    <a href="{{url('users/'.$userInfo->id.'/delete')}}">حذف</a>

                                </td>
                            </tr>
							@endforeach

                            </tbody>
							<tfoot>
							<tr>
                                <th class="pull-right">#</th>
                                <th>أسم العضو</th>
                                <th>البريد الإلكترونى</th>
                                <th>الصلاحيات</th>
                                <th>التحكم</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection



@section('footer')
    <!-- DataTables -->
    <script src="back-end/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="back-end/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
            })
        })
    </script>@endsection