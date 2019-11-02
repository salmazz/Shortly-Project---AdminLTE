@extends('admin.layouts.layout')
@section('css')
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection
@section('js')
<!-- DataTables -->
<script src="{{asset(
    'admin/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
        $(function () {
          $("#datatable").DataTable();
          $('#datatable').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
          });
        });
      </script>
@endsection
@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
    <h1>
     {{$title}}
    </h1>
    <ol class="breadcrumb">
        <li> <a href="{{url('admin-panel/dashboard')}}">
            <i class="fa fa-dashboard"></i>
            Dashboard</a></li>
        <li><a href="{{url('admin-panel/admins')}}">
        
        <i class="fa fa-cogs">Admins</i>
        </a></li>
        <li class="active">{{$title}}</li>
    </ol>
</section>
<section class="content">

    <div class="box">
          <!-- Main content -->
    <section class="content">
            <div class="row">
              <div class="col-md-12">
            
      
                <div class="card card-danger">
                        <div class="card-header">
                          <h3 class="card-title">Input masks</h3>
                        </div>
                        <div class="card-body">
                          <!-- Date dd/mm/yyyy -->
                          <form action="{{ url('admin-panel/admins/' . $admin->id . '/update') }}" method="post">
                        




                        @include('admin.admins.form')

                    <button class="btn btn-primary" type="sumbit">Submit</button>
                        </form>
                     
          
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->      
    </div>
</section>
</div>
@endsection