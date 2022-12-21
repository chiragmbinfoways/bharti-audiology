@extends('jpanel.layouts.app')
@section('title')
    Products
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 flash-message">
            <div class="col-sm-3">
                <h1>Products</h1>
            </div>
            <div class="col-6 messageArea">
                @include('jpanel/flash-message')
            </div>
            <div class="col-sm-3">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">View Product</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="row">
            @if(hasPermission('attribute',2))
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Products List</h3>
                        <div class="card-tools">
                            @if(hasPermission('category',1))
                            <a href="{{route('create.product')}}" class="btn btn-sm btn-secondary">
                                <i class="fas fa-plus-square"></i> Add New Product
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
                        <table class="table table-bordered table-hover" id="productDataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Brand</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($products as $key =>$product)

                                <tr class="dataRow{{$product->id}}">
                                    <td>{{++$key}}</td>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->brand->name}}</td>
                                     <td>
                                        @if(hasPermission('category',2))
                                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            <input data-id="{{$product->id}}" type="checkbox" class="custom-control-input productStatus" id="status{{$product->id}}" name="status{{$product->id}}" {{ $product->status ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="status{{$product->id}}"></label>
                                        </div>
                                        @endif
                                    </td>

                                   <td>
                                        @if(hasPermission('category',2))
                                            <a href="{{route('edit.product',$product->id)}}" class="text-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a> |
                                        @endif
                                        @if(hasPermission('category',3))
                                        <a href="{{route('upload.product',$product->id)}}" class="text-primary" data-toggle="tooltip" data-placement="top" title="Upload"><i class="fas fa-upload"></i></a> |
                                        @endif
                                        @if(hasPermission('category',3))
                                        <a href="{{route('attribute.product',$product->id)}}" class="text-primary" data-toggle="tooltip" data-placement="top" title="Attributes"><i class="fas fa-cubes"></i></a> |
                                        @endif
                                        @if(hasPermission('category',4))
                                        <a href="javascript:void(0)" data-id="{{$product->id}}" class="text-danger deleteProduct" id="delete{{$product->id}}" name="delete{{$product->id}}" data-toggle="tooltip" data-placement="top" title="Trash"><i class="fas fa-trash"></i></a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Brand</th>
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
    @include('jpanel.catalog.ajax')
@endsection
