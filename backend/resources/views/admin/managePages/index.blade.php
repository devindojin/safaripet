@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Pages</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Pages</li>
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
                      <a class="btn btn-primary" href="{{ route('manage-pages.create') }}"> Add New</a>
                  </div>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Page Title</th>
                    <th>Banner Text</th>
                    <th>Slug</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($pages as $page)
                        @if ($page->status === 1)
                            @php
                                $text = "Deactivate";
                                $class = "text-danger";
                            @endphp
                        @else
                            @php
                                $text = "Activate";
                                $class = "text-success";
                            @endphp
                        @endif
                        <tr>
                            <td>{{$page->page_title}}</td>
                            <td>{{$page->banner_text}}</td>
                            <td>{{$page->slug}}</td>
                            <td>
                                <a href="{{ route('manage-pages.edit',$page->id) }}" class="text-primary">Edit</a>
                                &nbsp;&nbsp;
                                <i class="fa fa-star fa-xs" aria-hidden="true"></i>
                                &nbsp;&nbsp;
                                <a href="javascript:void(0)" class="{{$class}}" attr="" data-toggle="modal" data-target="#confirm-action-{{$page->id}}"> 
                                    {{$text}}
                                </a>
                            </td>
                        </tr>
                        @include('admin.managePages.modal', ['page' => $page])
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
    function changeStatus (id,status) {
      $.ajax({
          method: 'POST',
          url: '{{route("change-status")}}',
          data: {
            _token: "{{ csrf_token() }}",
            id: id,
            status: status
          },
          beforeSend: function() {
            
          },
          success: function(data){
            location.reload();
          }
      });
    }
</script>
@endsection