@extends('jpanel.layouts.app')
@section('title')
    Contact Us
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 flash-message">
            <div class="col-sm-3">
                <h1>Contact Us</h1>
            </div>
            <div class="col-6 messageArea">
                @include('jpanel/flash-message')
            </div>
            <div class="col-sm-3">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">View  Contact Us list</li>
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
                        <h3 class="card-title"> Contact Us List</h3>
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
                        <table class="table table-bordered table-hover" id="inqueryDataTable">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Postcode</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    {{-- <th>Action</th> --}}
                                    
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($inqueries as $key =>$inquery)

                                <tr class="dataRow{{$inquery->id}}">
                                    <td>{{++$key}}</td>
                                    <td>{{$inquery->created_at->format('d/m/Y')}}</td>
                                    <td>{{$inquery->fname}}  {{$inquery->lname }}</td>
                                    <td>{{$inquery->phone}}</td>
                                    <td>{{$inquery->email}}</td>
                                    <td>{{$inquery->postcode}}</td>
                                    <td>{{$inquery->subject}}</td>
                                    <td>{{$inquery->message}}</td>
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
                                    <th>Postcode</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    {{-- <th>Action</th> --}}
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
