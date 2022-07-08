@extends('layouts.admin.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Client Testimonial Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Client Testimonial Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
      <div class="card card-default">
          <div class="card-header">
            <div class="my-2">
                <a class="btn btn-primary" href="{{ url('manage-testimonials') }}"> Back</a>
            </div> 
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

           <form action="{{ route('manage-testimonials.update', $clienttestimonials->id) }}" method="POST" enctype="multipart/form-data">   
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="exampleInputEmail1">Client name</label>
                        <input type="text" class="form-control" name="client_name" id="client_name" value="{{$clienttestimonials->client_name}}" placeholder="Client name" />
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$clienttestimonials->title}}" placeholder="Title" />
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="exampleInputEmail1">Upload Image</label>
                        <input type="file" class="form-control" name="image" id="image" value="{{$clienttestimonials->image}}" />
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea class="form-control" name="description">{{$clienttestimonials->description}}</textarea>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="1" {{ $clienttestimonials->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $clienttestimonials->status == 0 ? 'selected' : '' }}>In-active</option>
                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="submit" class="btn btn-primary" value="Submit" />
                    </div>
                </div>
                <!-- /.row -->
            </form> 
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
</div>
@endsection
