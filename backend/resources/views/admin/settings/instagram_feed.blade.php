@extends('layouts.admin.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Instragm Feed</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Instragm Feed</li>
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

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h5><i class="icon fas fa-check"></i> Alert!</h5>
              {{ $message }}
            </div>
            @endif

           <form action="{{ route('updateInstagramFeedSetting') }}" method="POST" enctype="multipart/form-data">   
                @csrf
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="exampleInputEmail1">Token</label>
                        <input id="in_toke" type="text" class="form-control" name="token" value="{{$settingInsta->token}}">
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
