@extends('layouts.admin.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">About Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage About Page</li>
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
                <a class="btn btn-primary" href="{{ url('admin/manage-pages') }}"> Back</a>
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

           <form action="{{ route('manage-pages.update', $pages->id) }}" method="POST" enctype="multipart/form-data">   
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="exampleInputEmail1">Page Title</label>
                        <input type="text" class="form-control" name="page_title" id="page_title" value="{{ $pages->page_title }}" placeholder="Page Title" />
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="exampleInputEmail1">Banner Caption</label>
                        <input type="text" class="form-control" name="banner_text" id="banner_text" value="{{ $pages->banner_text }}" placeholder="Banner Caption" />
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="exampleInputEmail1">Upload Banner</label>
                        <input type="file" class="form-control" name="banner" id="banner" value="{{ $pages->banner }}" placeholder="Title" />
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="exampleInputEmail1">Slug</label>
                        <input type="text" class="form-control" name="slug" id="slug" value="{{ $pages->slug }}" placeholder="Page slug" />
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea class="form-control" name="description" id="full-featured-non-premium">{{ $pages->description }}</textarea>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="">Select Status</option>
                            <option value="1" {{ $pages->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $pages->status == 0 ? 'selected' : '' }}>In-active</option>
                        </select>
                    </div>
                    <hr/>
                    <div class="col-md-12 form-group">
                        <label for="exampleInputEmail1">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title" id="meta_title" value="{{ $pages->meta_title }}" placeholder="Meta Title" />
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="exampleInputEmail1">Meta Tag</label>
                        <input type="text" class="form-control" name="meta_tag" id="meta_tag" value="{{ $pages->meta_tag }}" placeholder="Meta Tag" />
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea class="form-control" name="meta_description" id="meta_description">{{ $pages->meta_description }}</textarea>
                    </div>
                    <div class="form-group">
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
