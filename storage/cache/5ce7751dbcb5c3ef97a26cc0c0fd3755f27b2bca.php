<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<!-- DataTables -->
<script src="<?php echo e(asset(
    'admin/plugins/datatables/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')); ?>"></script>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <!-- Content Header (Page header) -->
 <section class="content-header">
    <h1>
     <?php echo e($title); ?>

    </h1>
    <ol class="breadcrumb">
        <li> <a href="<?php echo e(url('admin-panel/dashboard')); ?>">
            <i class="fa fa-dashboard"></i>
            Dashboard</a></li>
        <li class="active"><?php echo e($title); ?></li>
    </ol>
</section>
<section class="content">

    <div class="box">
          <!-- Main content -->
    <section class="content">
            <div class="row">
              <div class="col-12">
                <?php if(session('message')): ?>
              <div class="alert alert-info"><?php echo e(flash('message')); ?></div>
                <?php endif; ?>
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">
                    <a class="btn btn-primary" href="<?php echo e(url('admin-panel/users/create')); ?>">Add New User</a>
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
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->first_name); ?></td>
                <td><?php echo e($user->last_name); ?></td>
                <td><?php echo e($user->user_name); ?></td>
                <td>
                <a class="btn btn-success" href="<?php echo e(url('admin-panel/users/'.$user->id.'/edit')); ?>">Edit</a>
                <a href="#" data-action="<?php echo e(url('admin-panel/admins/'. $user->id . '/delete')); ?>" class="btn btn-danger delete_confirmation" data-toggle="modal" data-target="#deleteModal">Delete</a>
              </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 
              </tbody>
                 
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
    </div>
    
</section>
</div>
<?php echo $__env->make('admin.layouts.delete_model', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\LiteProject\views/admin/users/index.blade.php ENDPATH**/ ?>