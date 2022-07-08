@extends('layouts.admin.app')

@section('style')

<link rel="stylesheet" href="{{asset('admin/css/bootstrap-iconpicker.min.css')}}">

@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Menu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Menu</li>
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card-title">Menu Builder</div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-5 pb-5">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card border-primary mb-3">
                                <div class="card-header bg-primary text-white">Choose from Redymade Menus</div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">{{__('Home')}} <a data-text="{{__('Home')}}" data-type="home" class="addToMenus btn btn-primary btn-sm float-right" href="">Add to Menus</a></li>
                                        
                                        @foreach ($pages as $page)
                                            <li class="list-group-item">{{$page->page_title}} <a data-text="{{$page->page_title}}" data-type="{{$page->id}}" class="addToMenus btn btn-primary btn-sm float-right" href="{{$page->slug}}">Add to Menus</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card border-primary mb-3">
                                <div class="card-header bg-primary text-white">Add / Edit Menu</div>
                                <div class="card-body">
                                    <form id="frmEdit" class="form-horizontal">
                                        <input class="item-menu" type="hidden" name="type" value="">

                                        <div id="withUrl">
                                            <div class="form-group">
                                                <label for="text">Text</label>
                                                <input type="text" class="form-control item-menu" name="text" placeholder="Text">
                                            </div>
                                            <div class="form-group">
                                                <label for="href">URL</label>
                                                <input type="text" class="form-control item-menu" name="href" placeholder="URL">
                                            </div>
                                            <div class="form-group">
                                                <label for="target">Target</label>
                                                <select name="target" id="target" class="form-control item-menu">
                                                    <option value="_self">Self</option>
                                                    <option value="_blank">Blank</option>
                                                    <option value="_top">Top</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="withoutUrl" style="display: none;">
                                            <div class="form-group">
                                                <label for="text">Text</label>
                                                <input type="text" class="form-control item-menu" name="text" placeholder="Text">
                                            </div>
                                            <div class="form-group">
                                                <label for="href">URL</label>
                                                <input type="text" class="form-control item-menu" name="href" placeholder="URL">
                                            </div>
                                            <div class="form-group">
                                                <label for="target">Target</label>
                                                <select name="target" class="form-control item-menu">
                                                    <option value="_self">Self</option>
                                                    <option value="_blank">Blank</option>
                                                    <option value="_top">Top</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button type="button" id="btnUpdate" class="btn btn-primary" disabled><i class="fas fa-sync-alt"></i> Update</button>
                                    <button type="button" id="btnAdd" class="btn btn-success"><i class="fas fa-plus"></i> Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-header bg-primary text-white">Website Menus</div>
                                <div class="card-body">
                                    <ul id="myEditor" class="sortableLists list-group">
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-footer pt-3">
                    <div class="form">
                        <div class="form-group from-show-notify row">
                            <div class="col-12 text-center">
                                <button id="btnOutput" class="btn btn-success">Update Menu</button>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('admin/js/jquery-menu-editor.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/fontawesome5-3-1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/bootstrap-iconpicker.min.js')}}"></script>

<script>
    function disableWithUrl() {
        $("#withUrl input").removeClass('item-menu');
        $("#withUrl select").removeClass('item-menu');
    }

    function enableWithUrl() {
        $("#withUrl input").addClass('item-menu');
        $("#withUrl select").addClass('item-menu');
    }

    function disableWithoutUrl() {
        $("#withoutUrl input").removeClass('item-menu');
        $("#withoutUrl select").removeClass('item-menu');
    }

    function enableWithoutUrl() {
        $("#withoutUrl input").addClass('item-menu');
        $("#withoutUrl select").addClass('item-menu');
    }

    jQuery(document).ready(function () {
        /* =============== DEMO =============== */
        // menu items
        var arrayjson = {!! json_encode($prevMenu) !!};

        // icon picker options
        var iconPickerOptions = {searchText: "Buscar...", labelHeader: "{0}/{1}"};
        // sortable list options
        var sortableListOptions = {
            placeholderCss: {'background-color': "#cccccc"}
        };

        var editor = new MenuEditor('myEditor', {listOptions: sortableListOptions, iconPicker: iconPickerOptions});
        editor.setForm($('#frmEdit'));
        editor.setUpdateButton($('#btnUpdate'));
        // $('#btnReload').on('click', function () {

            editor.setData({!! $prevMenu !!});
        // });

        $('#btnOutput').on('click', function () {
            var str = editor.getString();
            let fd = new FormData();
            // fd.append('language_id', );
            fd.append('str', str);
            fd.append( "_token", "{{ csrf_token() }}"); // <- adding csrf token


            $.ajax({
                url: "{{route('manage-menu.store')}}",
                type: 'POST',
                data: fd,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data == "success") {
                        location.reload();
                    }
                }
            });
        });

        $("#btnUpdate").click(function(){
            disableWithoutUrl();
            editor.update();
            enableWithoutUrl();
        });

        $('#btnAdd').click(function(){
            disableWithoutUrl();
            $("input[name='type']").val('custom');
            editor.add();
            enableWithoutUrl();
        });
        /* ====================================== */



        // when menu is chosen from readymade menus list
        $(".addToMenus").on('click', function(e) {
            e.preventDefault();
            disableWithUrl();
            $("input[name='type']").val($(this).data('type'));
            $("#withoutUrl input[name='text']").val($(this).data('text'));
            $("#withoutUrl input[name='target']").val('_self');
            editor.add();
            enableWithUrl();

        });
    });
</script>
@endsection