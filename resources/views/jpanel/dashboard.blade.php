@extends('jpanel.layouts.app')
@section('title')
    Dashboard
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Layout</a></li>
                    <li class="breadcrumb-item active">Dashboard</li> --}}
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                {{-- @if(hasPermission(4,1)==1) --}}
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Dashboard</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                                    <div class="col-md-3 col-sm-6 col-12">
                                        <div class="small-box bg-info bg-primary">
                                            <div class="inner">
                                                <h3>{{$noOfCategory}}</h3>
                                                <p>Categories</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-sitemap"></i>
                                            </div>
                                            <a href="{{route('list.category')}}" class="small-box-footer">
                                                Manage Categories <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                              
                              
                                    <div class="col-md-3 col-sm-6 col-12">
                                        <div class="small-box bg-warning">
                                            <div class="inner">
                                                <h3>{{$noOfProducts}}</h3>
                                                <p> products</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-box"></i>
                                            </div>
                                            <a href="{{route('list.products')}}" class="small-box-footer">
                                                Manage products <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                              
                                    <div class="col-md-3 col-sm-6 col-12">
                                        <div class="small-box bg-success">
                                            <div class="inner">
                                                <h3>{{$noOfInqueries}}</h3>
                                                <p>Product Inqueries</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-question"></i>
                                            </div>
                                            <a href="{{route('ProductInquery.link')}}" class="small-box-footer">
                                                Manage Inqueries <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-12">
                                        <div class="small-box  bg-danger">
                                            <div class="inner">
                                                <h3>{{$noOfSupport}}</h3>
                                                <p>Support Inqueries</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-headset"></i>
                                            </div>
                                            <a href="{{route('support.link')}}" class="small-box-footer">
                                                Support Inqueries <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="row">
                    
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">LATEST INQUERIES</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-bordered table-hover " id="dashboardInquery">
                                <thead>
                                    <tr>
                                        <th> No </th>
                                        <th> Date </th>
                                        <th> Name </th>
                                        <th>Phone </th>
                                        <th>Email</th>
                                        <th>Product Name</th>
                                        <th>Message</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($productInquerys as $key => $productInquerys)
                                        <tr class="dataRow{{ $productInquerys->id }}">
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $productInquerys->created_at->format('d M Y ') }}</td>
                                            <td>{{ $productInquerys->name }}</td>
                                            <td>{{ $productInquerys->email }}</td>
                                            <td>{{ $productInquerys->phone }}</td>
                                            <td>{{ $productInquerys->title }}</td>
                                            <td>{{ $productInquerys->message }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">SUPPORT INQUERIES</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-bordered table-hover " id="dashboardInquery">
                                <thead>
                                    <tr>
                                        <th> No </th>
                                        <th> Date </th>
                                        <th> Name </th>
                                        <th>Phone </th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Message</th>


                                    </tr>
                                </thead>
                                 <tbody>

                                    @foreach ($supportInquerys as $key => $supportInquerys)
                                        <tr class="dataRow{{ $supportInquerys->id }}">
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $supportInquerys->created_at->format('d M Y ') }}</td>
                                            <td>{{ $supportInquerys->name }}</td>
                                            <td>{{ $supportInquerys->phone }}</td>
                                            <td>{{ $supportInquerys->email }}</td>
                                            <td>{{ $supportInquerys->address }}</td>
                                            <td>{{ $supportInquerys->intrest }}</td>
                                        </tr>
                                    @endforeach
                                </tbody> 
                            </table>
                            </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                {{-- @endif --}}
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
@section('scripts')
    @include('jpanel.catalog.ajax')
@endsection

