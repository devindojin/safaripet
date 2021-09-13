@extends('layouts.admin.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pet Images</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pet Images</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                <div class="my-2">
                    <button id="loading" class="btn btn-primary" type="button" disabled>
                      <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                      <span>Loading...</span>
                    </button>
                    <a id="pull-images" class="btn btn-primary" href="javascript:void(0)">Pull Images</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm-refresh">Truncate & Pull Again</button>
                    <div class="float-right">
                        <span class="badge badge-primary font-15">
                            Total:{{$totalImages}}
                        </span>
                        <span class="badge badge-success font-15">
                            Completed:{{$completeImages}}
                        </span>
                        <span class="badge badge-warning font-15">
                            Pending:{{$pendingImages}}
                        </span>
                    </div>
                </div> 
            </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S. No</th>
                    <th>Pet Id</th>
                    <th>Pet Name</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    @if($petImages->count()>0)
                    @php 
                    $i = $petImages->perPage() * ($petImages->currentPage() - 1) + 1; 
                    @endphp
                    @foreach($petImages as $petimage)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{$petimage->pet_id}}</td>
                            <td>{{$petimage->pet_display_name}}</td>
                            <td>
                            @if ($petimage->status === 1)
                                <span class="badge badge-success"><i class="fa fa-check"></i></span>
                            @else
                                <span class="badge badge-danger"><i class="fa fa-remove"></i></span>
                            @endif 
                            </td>
                        </tr>
                        @php $i++ @endphp
                    @endforeach
                    @else
                        <tr>
                            <td colspan=4 class="text-center">No records found!</td>
                        </tr>
                    @endif
                  </tbody>
                </table>
               </div>
              <!-- /.card-body -->
              @if($petImages->count()>0)
              <div class="card-footer clearfix">
                {!! $petImages->links() !!}
              </div>
              @endif
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      <div class="modal fade" id="confirm-refresh">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Sure?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Do you really want to truncate all&hellip;?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              <a class="btn btn-danger" id="truncate" href="{{url('admin/truncate-images')}}">Done</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
      $("#loading").hide();
      $('#pull-images').click(function() {
        $(this).hide();
        $.ajax({
            method: 'GET',
            url: '{{route("get-images")}}',
            beforeSend: function() {
              $("#loading").show();
            },
            success: function(data){
              location.reload();
            }
        });
      });
    });
</script>
@endsection