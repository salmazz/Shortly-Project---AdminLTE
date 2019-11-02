<?php if(session('message')): ?>
<div class="alert alert-info"><?php echo e(flash('message')); ?></div>
  <?php endif; ?>
<div class="row">
    <div class="col-sm-6">
            <div class="form-group has-feedback <?php if($errors && $errors->has('first_name')): ?> has-error <?php endif; ?>">
                    <input type="text" name="first_name" class="form-control" placeholder="FirstName" value="<?php if($old && $old['first_name']): ?><?php echo e($old['first_name']); ?><?php elseif(isset($admin)): ?><?php echo e($admin->first_name); ?><?php endif; ?>">
                    <span class="fa fa-user form-control-feedback"></span>
                    <?php if($errors && $errors->has('first_name')): ?>
                        <div class="help-block"><?php echo e($errors->first('first_name')); ?></div>
                    <?php endif; ?>
                </div>
                <div class="form-group has-feedback <?php if($errors && $errors->has('last_name')): ?> has-error <?php endif; ?>">
                        <input type="text" name="last_name" class="form-control" placeholder="LastName" value="<?php if($old && $old['last_name']): ?><?php echo e($old['last_name']); ?><?php elseif(isset($admin)): ?><?php echo e($admin->last_name); ?><?php endif; ?>">
                        <span class="fa fa-user form-control-feedback"></span>
                        <?php if($errors && $errors->has('last_name')): ?>
                            <div class="help-block"><?php echo e($errors->first('last_name')); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group has-feedback <?php if($errors && $errors->has('user_name')): ?> has-error <?php endif; ?>">
                            <input type="text" name="user_name" class="form-control" placeholder="Username" value="<?php if($old && $old['user_name']): ?><?php echo e($old['user_name']); ?><?php elseif(isset($admin)): ?><?php echo e($admin->user_name); ?><?php endif; ?>">
                            <span class="fa fa-user form-control-feedback"></span>
                            <?php if($errors && $errors->has('user_name')): ?>
                                <div class="help-block"><?php echo e($errors->first('user_name')); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group has-feedback <?php if($errors && $errors->has('password')): ?> has-error <?php endif; ?>">
                                <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo e($old?$old['password']:''); ?>">
                                <span class="fa fa-user form-control-feedback"></span>
                                <?php if($errors && $errors->has('password')): ?>
                                    <div class="help-block"><?php echo e($errors->first('password')); ?></div>
                                <?php endif; ?>
                            </div>
    </div>
</div><?php /**PATH E:\xamp\htdocs\LiteProject\views/admin/admins/form.blade.php ENDPATH**/ ?>