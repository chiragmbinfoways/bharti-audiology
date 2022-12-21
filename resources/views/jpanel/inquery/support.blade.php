@extends('jpanel.layouts.app')
@section('title')
    Support and care Inquerys
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 flash-message">
            <div class="col-sm-3">
                <h1>Support and care</h1>
            </div>
            <div class="col-6 messageArea">
                @include('jpanel/flash-message')
            </div>
            <div class="col-sm-3">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">View Support and care</li>
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
                        <h3 class="card-title">Support and care List</h3>
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
                        <table class="table table-bordered table-hover" id="supportDataTable">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Intrest</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($supports as $key =>$support)

                                <tr class="dataRow{{$support->id}}">
                                    <td>{{++$key}}</td>
                                    <td>{{$support->created_at->format('d/m/Y')}}</td>
                                    <td>{{$support->name}}</td>
                                    <td>{{$support->phone}}</td>
                                    <td>{{$support->email}}</td>
                                    <td>{{$support->address}}</td>
                                    <td>{{$support->intrest}}</td>
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
                                    <th>Address</th>
                                    <th>Intrest</th>
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
