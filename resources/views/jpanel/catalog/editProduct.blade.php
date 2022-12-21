@extends('jpanel.layouts.app')
@section('title')
    Edit Product
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('list.products') }}">View Products</a></li>
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row flash-message">
                <div class="col-12">
                    @include('jpanel/flash-message')
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <!-- Profile Update box -->
                    <form action="{{ route('update.product', $product->id) }}" method="post">
                        @csrf

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Product Form</h3>
                                <div class="card-tools">
                                    <a href="{{ route('list.products') }}" class="btn btn-sm btn-secondary">
                                        <i class="fas fa-eye"></i> View All Products
                                    </a>
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
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text"
                                        class="form-control form-control-sm @error('title') is-invalid @enderror "
                                        id="title" name="title" placeholder="Enter Product Title"
                                        value="{{ $product->title }}">
                                    @if ($errors->has('title'))
                                        <div class="text-danger">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>

                                <div class="row ">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="categorie">Category</label>
                                            <select
                                                class="form-control form-control-sm category  @error('category') is-invalid @enderror "
                                                name="category" id="cat_id">

                                                <option selected hidden value="{{ $cat_id }}">{{ $cat }}
                                                </option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('category'))
                                                <div class="text-danger">{{ $errors->first('category') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="brand">Brand</label>
                                            <select
                                                class="form-control form-control-sm  @error('brand') is-invalid @enderror "
                                                name="brand" id="brand_id">
                                                <option hidden value="{{ $product->brand->id }}">
                                                    {{ $product->brand->name }}</option>
                                                @foreach ($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('brand'))
                                                <div class="text-danger">{{ $errors->first('brand') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row subCategory">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="categorie">Sub Category</label>
                                            <select class="form-control form-control-sm " name="sub_category"
                                                id="sub_cat_id">
                                                <option selected hidden  value="{{ $sub_cat_id }}">
                                                    {{ $sub_cat }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                {{-- product attributes --}}
                                <div class="form-group">
                                    <label for="">Summary</label>
                                    <textarea name="summary" class="summernote">{{ $product->shortDescription }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Long Description</label>
                                    <textarea name="long_desc" class="summernote" placeholder="Write Long Description...">{{ $product->longDescription }}</textarea>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="text"
                                            class="form-control form-control-sm @error('price') is-invalid @enderror "
                                            id="price" name="price" placeholder="Enter price"
                                            value="{{ $product->price }}">
                                        @if ($errors->has('price'))
                                            <div class="text-danger">{{ $errors->first('price') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="is_featured">Is Featured</label>
                                    <input type="checkbox" name="is_featured" id="is_featured" value="0"
                                        {{ $feature == '1' ? 'checked' : '' }}> Yes
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-secondary btn-block">Update <i
                                        class="fas fa-angle-double-right"></i></button>
                            </div>
                            <!-- /.card-footer-->

                        </div>
                        <!-- /.card -->
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

@section('scripts')
    @include('jpanel.catalog.ajax')
@endsection
