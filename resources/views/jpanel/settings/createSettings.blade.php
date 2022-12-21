@extends('jpanel.layouts.app')
@section('title')
    Add New Settings
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add New Setting</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('list.settings') }}">View Settings</a></li>
                    <li class="breadcrumb-item active">Add Settings</li> 
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
                 <form action="{{ route('store.settings') }}" method="post">
                    @csrf

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">New Setting Add Form</h3>
                            <div class="card-tools">
                                <a href="{{route('list.settings')}}" class="btn btn-sm btn-secondary">
                                    <i class="fas fa-eye"></i> View All Settings
                                </a>
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
                                <label for="name"> Name</label>
                                <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" id="name"
                                    name="name" placeholder="Enter name">
                                @if ($errors->has('name'))
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="value"> Value</label>
                                <input type="text" class="form-control form-control-sm @error('value') is-invalid @enderror" id="value"
                                    name="value" placeholder="Enter value">
                                @if ($errors->has('value'))
                                    <div class="text-danger">{{ $errors->first('value') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="mname">Link Address</label>
                                <input type="text" class="form-control form-control-sm @error('laddress') is-invalid @enderror" id="laddress"
                                    name="laddress" placeholder="Enter link address">
                                @if ($errors->has('laddress'))
                                    <div class="text-danger">{{ $errors->first('laddress') }}</div>
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
        </div>
    </div>
</section>
<!-- /.content -->
@endsection

@section('scripts')
    @include('jpanel.settings.ajax')
@endsection
