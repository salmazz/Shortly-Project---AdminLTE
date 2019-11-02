@extends('admin.layouts.layout')
@section('css')
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
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
        <li class="active">{{$title}}</li>
    </ol>
</section>
<section class="content">

    <div class="box">
          <!-- Main content -->
    <section class="content">
            <div class="row">
              <div class="col-12">
                @if(session('message'))
              <div class="alert alert-info">{{flash('message')}}</div>
                @endif
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">
                    <a class="btn btn-primary" href="{{url('admin-panel/admins/create')}}">Add New Admin</a>
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="datatable" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>ID</th>
                        <th>First NAme </th>
                        <th>Lastname</th>
                        <th>UserName</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                @foreach ($admins as $admin )
                <tr>
                <td>{{$admin->id}}</td>
                <td>{{$admin->first_name}}</td>
                <td>{{$admin->last_name}}</td>
                <td>{{$admin->user_name}}</td>
                <td>
                <a class="btn btn-success" href="{{url('admin-panel/admins/'.$admin->id.'/edit')}}">Edit</a>
                <a href="#" data-action="{{ url('admin-panel/admins/'. $admin->id . '/delete') }}" class="btn btn-danger delete_confirmation" data-toggle="modal" data-target="#deleteModal">Delete</a>
             
              </td>
                  </tr>
                @endforeach
                 
              </tbody>
              <tfoot>
                  <tr>
                      <th>ID</th>
                      <th>First name</th>
                      <th>Last name</th>
                      <th>User name</th>
                      <th>Actions</th>
                  </tr>
                  </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
    </div>
    
</section>
</div>
@include('admin.layouts.delete_model')
@endsection
@section('js')
<!-- DataTables -->
<script src="{{asset(
    'admin/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}" type="text/javascript"></script>
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