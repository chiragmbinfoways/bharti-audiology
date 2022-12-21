@extends('jpanel.layouts.app')
@section('title')
    Edit Attribute
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 flash-message">
            <div class="col-sm-3 col-md-6">
                <h1>Edit Attribute - {{$attribute->name}}</h1>
            </div>
            <div class="col-5 messageArea">
                @include('jpanel/flash-message')
            </div>
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('list.attributes') }}">View Attribute</a></li>
                    <li class="breadcrumb-item active">Edit Attribute</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        @if(hasPermission('attribute',3))
        <div class="row pb-2">
            <div class="col-12">
                <a href="{{route('list.attributes')}}" class="btn btn-sm btn-secondary">
                    <i class="fas fa-eye"></i> View All Atribute
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <!-- Default box -->
                 <!-- Attribute Update box -->
                 <form action="{{ route('update.attribute',$attribute->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Atribute Edit Form</h3>
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
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control form-control-sm @error('attribute_name') is-invalid @enderror" id="attribute_name"
                                    name="attribute_name" placeholder="Enter Attribute Name" value="{{$attribute->name}}">
                                @if ($errors->has('attribute_name'))
                                    <div class="text-danger">{{ $errors->first('attribute_name') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="name">Slug</label>
                                <input type="text" class="form-control form-control-sm @error('slug') is-invalid @enderror" id="slug"
                                    name="slug" placeholder="Enter Slug" value="{{$attribute->slug}}">
                                @if ($errors->has('slug'))
                                    <div class="text-danger">{{ $errors->first('slug') }}</div>
                                @endif
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
        @endif
    </div>
</section>
<!-- /.content -->
@endsection

@section('scripts')
    @include('jpanel.catalog.ajax')
@endsection
