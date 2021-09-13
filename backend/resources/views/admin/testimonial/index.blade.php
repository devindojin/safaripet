@extends('layouts.admin.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Client Testimonial</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Client Testimonial</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-check"></i> Alert!</h5>
          {{ $message }}
        </div>
        @endif
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <div class="float-left">
                    <a class="btn btn-primary" href="{{ url('admin/manage-testimonials/create') }}"> Add New</a>
                </div>

                <div class="float-right">
                    <input type="checkbox" id="testimonial-setting" name="my-checkbox" @if($settings->status == 1) checked @endif data-bootstrap-switch data-off-color="danger" data-on-text="Enabled" data-off-text="Disabled" data-on-color="success">
                </div>
            <!-- /.card -->
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Client Name</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($clienttestimonials as $clienttestimonial)
                        <tr>
                            <td>{{$clienttestimonial->client_name}}</td>
                            <td>{{$clienttestimonial->title}}</td>
                            <td>
                            @if ($clienttestimonial->status === 1)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-warning">In-active</span>
                            @endif 
                            </td>
                            <td>
                                <a href="{{ route('manage-testimonials.edit',$clienttestimonial->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {

        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });
        $('#testimonial-setting').on('switchChange.bootstrapSwitch', 
            function(event, state) {
                $.ajax({
                    method: 'POST',
                    url: '{{route("update-settings")}}',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'name':'show_testimonial',
                        'value': event.target.checked
                    },
                    success: function(data){
                        console.log(data);
                    }
                });
            });
    });

</script>
@endsection