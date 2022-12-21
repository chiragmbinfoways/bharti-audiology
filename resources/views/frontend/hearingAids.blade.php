@extends('frontend.layouts.app')
@section('title')
    Hearing Aids
@endsection

@section('content')
<div class="ps-categogy ps-categogy--separate">
            <div class="container">
                <ul class="ps-breadcrumb">
                    <li class="ps-breadcrumb__item"><a href="/">Home</a></li>
                    <li class="ps-breadcrumb__item active" aria-current="page">Hearing Aids</li>
                </ul>
                <h2 class="ps-form__title">Types Of Hearing Aids</h2>
            </div>
            <div class="ps-categogy__main back_color">
                <div class="container">
                    <div class="ps-categogy__product">
                        <div class="row m-0">
                            @foreach ($types as $k => $type)
                <section class="ps-section--block-grid ">
                    <div class="ps-section__thumbnail col-md-4"> 
                        <a class="ps-section__image" href="#">
                            <img src="{{ asset('/storage/images/category/' . $type->thumbnailImage) }}" alt="" style="width:200px;">
                        </a>
                    </div>
                    <div class="ps-section__content col-md-6">
                        <h3 class="ps-section__title">{{ $type->name }}</h3>
                        <div class="ps-section__subtitle">{{ $type->shortDescription }} </div>
                    </div>
                    <div class="col-md-2 vertical-center text-right">
                        <a href="{{route('products',$type->id)}}" class="explore">Explore More</a></div>
                </section>
                @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Main content -->
@endsection

@section('scripts')
    @include('frontend.ajax')
   
@endsection
