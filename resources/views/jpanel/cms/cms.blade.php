@extends('jpanel.layouts.app')
@section('title')
    Menu
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 flash-message">
            <div class="col-sm-3">
                <h1>Menu</h1>
            </div>
            <div class="col-6 messageArea">
                @include('jpanel/flash-message')
            </div>
            <div class="col-sm-3">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">View Menu</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="row">
            @if(hasPermission('cms',2))
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Menu List</h3>
                        <div class="card-tools">
                            @if(hasPermission('cms',1))
                            <a href="{{route('create.cms')}}" class="btn btn-sm btn-secondary">
                                <i class="fas fa-plus-square"></i> Add Menu
                            </a>
                            @endif
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="cmsDataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Parent</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($cms as $key =>$cms)

                                <tr class="dataRow{{$cms->id}}">
                                    <td>{{++$key}}</td>
                                    <td>{{$cms->name}}</td>
                                    <td><a href="{{$cms->link}}">{{$cms->link}}</a></td>
                                    <td>{{$cms->parent_id ? $cms->parent->name : '-' }}</td>
                                    <td>
                                        @if(hasPermission('cms',2))
                                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            <input data-id="{{$cms->id}}" type="checkbox" class="custom-control-input cmsStatus" id="status{{$cms->id}}" name="status{{$cms->id}}" {{ $cms->status ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="status{{$cms->id}}"></label>
                                        </div>
                                        @endif
                                    </td>
                                    <td>
                                        @if(hasPermission('cms',3))
                                        <a href="{{route('edit.cms',$cms->id)}}" class="text-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a> |
                                        @endif
                                        @if(hasPermission('cms',4))
                                        <a href="javascript:void(0)" data-id="{{$cms->id}}" class="text-danger deleteCms" id="delete{{$cms->id}}" name="delete{{$cms->id}}" data-toggle="tooltip" data-placement="top" title="Trash"><i class="fas fa-trash"></i></a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Parent</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">

                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
            @endif
        </div>
    </div>
</section>
<!-- /.content -->
@endsection

@section('scripts')
    @include('jpanel.cms.ajax')
@endsection
