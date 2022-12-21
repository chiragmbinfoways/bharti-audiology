@extends('jpanel.layouts.app')
@section('title')
    Edit Menu
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Menu</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('list.cms') }}">View Menus</a></li>
                    <li class="breadcrumb-item active">Add Menu</li> 
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
                 <form action="{{route('update.cms',$cms->id) }}" method="post">
                    @csrf

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Menu</h3>
                            <div class="card-tools">
                                <a href="{{route('list.cms')}}" class="btn btn-sm btn-secondary">
                                    <i class="fas fa-eye"></i> View All Menus
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
                                <label for="mname">Menu Name</label>
                                <input type="text" class="form-control form-control-sm @error('mname') is-invalid @enderror" id="mname"
                                    name="mname" value="{{$cms->name}}" placeholder="Enter menu name">
                                @if ($errors->has('mname'))
                                    <div class="text-danger">{{ $errors->first('mname') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="mname">Link Address</label>
                                <input type="text" class="form-control form-control-sm @error('laddress') is-invalid @enderror" id="laddress"
                                    name="laddress" value="{{$cms->link}}" placeholder="Enter link address">
                                @if ($errors->has('laddress'))
                                    <div class="text-danger">{{ $errors->first('laddress') }}</div>
                                @endif
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Parent Menu</label>
                                <select  class="form-control form-control-sm @error('parent_id') is-invalid @enderror" id="parent_id" name="parent_id">
                                    <option value="{{$parent_menu_id}}" selected hidden>{{$parent_menu}}</option>
                                    @foreach ($parent_menu_list as $parent_menu_list)
                                    <option value="{{$parent_menu_list->id}}">{{$parent_menu_list->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('parent_id'))
                                    <div class="text-danger">{{ $errors->first('parent_id') }}</div>
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
    @include('jpanel.cms.ajax')
@endsection
