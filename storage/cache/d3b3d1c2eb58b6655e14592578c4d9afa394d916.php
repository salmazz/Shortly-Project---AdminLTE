<div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Warning</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>are you sure ? you want to delete !! </p>
            </div>
            <div class="modal-footer justify-content-between">
            <form action="<?php echo e(url('admin-panel/admins/'. $link->id . '/delete')); ?>" method="post" id="delete_action">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                </form>
        
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal --><?php /**PATH E:\xamp\htdocs\LiteProject\views/admin/layouts/delete_modal_links.blade.php ENDPATH**/ ?>