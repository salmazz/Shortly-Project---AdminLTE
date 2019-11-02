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
        <li><a href="<?php echo e(url('admin-panel/users')); ?>">
        
        <i class="fa fa-cogs">users</i>
        </a></li>
        <li class="active"><?php echo e($title); ?></li>
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
                          <form action="<?php echo e(url('admin-panel/users/' . $user->id . '/update')); ?>" method="post">
                        




                        <?php echo $__env->make('admin.users.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <button class="btn btn-primary" type="sumbit">Submit</button>
                        </form>
                     
          
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->      
    </div>
</section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\LiteProject\views/admin/users/edit.blade.php ENDPATH**/ ?>