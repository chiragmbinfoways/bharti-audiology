@extends('jpanel.layouts.app')
@section('title')
    Product Inquery List
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 flash-message">
            <div class="col-sm-3">
                <h1> Product Inquery List</h1>
            </div>
            <div class="col-6 messageArea">
                @include('jpanel/flash-message')
            </div>
            <div class="col-sm-3">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">View Product Inquery List</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="row">
            @if(hasPermission('inquery',2))
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> Product Inquery List</h3>
                        <div class="card-tools">
                            {{-- @if(hasPermission('inquery',1))
                            <a href="{{route('create.cms')}}" class="btn btn-sm btn-secondary">
                                <i class="fas fa-plus-square"></i> Add Inquery
                            </a>
                            @endif --}}
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="ProductinqueryDataTable">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Title</th>
                                    <th>Message</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($productInquerys as $key =>$productInquery)

                                <tr class="dataRow{{$productInquery->id}}">
                                    <td>{{++$key}}</td>
                                    <td>{{$productInquery->created_at->format('d/m/Y')}}</td>
                                    <td>{{$productInquery->name}} </td>
                                    <td>{{$productInquery->phone}}</td>
                                    <td>{{$productInquery->email}}</td>
                                    <td>{{$productInquery->title}}</td>
                                    <td>{{$productInquery->message}}</td>
                                    {{-- <td>
                                        @if(hasPermission('inquery',4))
                                        <a href="javascript:void(0)" data-id="{{$inquery->id}}" class="text-danger deleteInquery" id="delete{{$inquery->id}}" name="delete{{$inquery->id}}" data-toggle="tooltip" data-placement="top" title="Trash"><i class="fas fa-trash"></i></a>
                                        @endif
                                    </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Date</th>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Title</th>
                                    <th>Message</th>
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
    @include('jpanel.inquery.ajax')
@endsection
