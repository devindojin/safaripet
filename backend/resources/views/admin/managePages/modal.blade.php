<div class="modal fade" id="confirm-action-{{$page->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Sure?</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @if ($page->status === 1)
            <p>Do you really want to deactivate this page&hellip;?</p>
            @else
            <p>Do you really want to activate this page&hellip;?</p>
            @endif
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" onclick="return changeStatus({{$page->id}},{{$page->status}})">Done</button>
        </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->