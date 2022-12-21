@extends('jpanel.layouts.app')
@section('title')
    Attribute Values
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 flash-message">
                <div class="col-sm-3">
                    <h6>Attribute Values for - <strong>{{$product_name[0]->title}}</strong></h6>
                </div>
                <div class="col-5 messageArea">
                    @include('jpanel/flash-message')
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('list.attributes') }}">View Attribute</a></li>
                        <li class="breadcrumb-item active">Attribute Values</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            @if (hasPermission('category', 3))
                <div class="row">
                    <div class="col-4">
                        <!-- Default box -->
                        <!-- Attribute Update box -->
                        <form action="{{ route('store.product.attribute') }}" method="post">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Add Attribute Value</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"
                                            title="Remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="d-none" value="{{ $id }}" name="product_id">

                                    <div class="form-group"><label for="categorie">Attribute</label><select
                                            class="attribute_id form-control form-control-sm @error('attribute_id') is-invalid @enderror "
                                            name="attribute_id" data-attribute_id="0" id="attribute_id">
                                            <option value="" selected hidden disabled>Select Attribute</option>

                                            @foreach ($attributes as $attribute)
                                                <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('attribute_id'))
                                            <div class="text-danger">{{ $errors->first('attribute_id') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="categorie">Attribute Value</label>
                                        <select
                                            class="attribute_id form-control form-control-sm  @error('attribute_value_id') is-invalid @enderror "
                                            name="attribute_value_id"  id="attribute_value_id">
                                        </select>
                                        @if ($errors->has('attribute_value_id'))
                                            <div class="text-danger">{{ $errors->first('attribute_value_id') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-secondary btn-block">Submit <i
                                            class="fas fa-angle-double-right"></i></button>
                                </div>
                                <!-- /.card-footer-->
                            </div>
                            <!-- /.card -->
                        </form>
                    </div>
                    <div class="col-8">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Product attributes</h3>
                                <div class="card-tools">
                                    @if (hasPermission('attribute', 1))
                                        <a href="{{ route('list.products') }}" class="btn btn-sm btn-secondary">
                                            <i class="fas fa-plus-square"></i> View All Products
                                        </a>
                                    @endif
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover" id="attributeValueDataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Attribute</th>
                                            <th>Attribute Value</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($product_attributes as $key => $product_attribute)
                                            <tr class="dataRow{{ $product_attribute->id }}">
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $product_attribute->get_attr->name }}</td>
                                                <td>{{ $product_attribute->get_attr_value->value }}</td>
                                                <td>
                                                    @if (hasPermission('category', 4))
                                                        <a href="javascript:void(0)" data-id="{{ $product_attribute->id }}"
                                                            class="text-danger deleteProductAttribute"
                                                            id="delete{{ $product_attribute->id }}"
                                                            name="delete{{ $product_attribute->id }}" data-toggle="tooltip"
                                                            data-placement="top" title="Trash"><i
                                                                class="fas fa-trash"></i></a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Attribute</th>
                                            <th>Attribute Value</th>
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
        </div>
        @endif
        </div>
    </section>
    <!-- /.content -->
@endsection

@section('scripts')
    @include('jpanel.catalog.ajax')
@endsection
