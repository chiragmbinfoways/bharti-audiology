@extends('frontend.layouts.app')
@section('title')
    Products
@endsection

@section('content')

<div class="ps-categogy ps-product ">
    <div class="container">
        <ul class="ps-breadcrumb">
            <li class="ps-breadcrumb__item"><a href="index.html">Home</a></li>
            <li class="ps-breadcrumb__item"><a href="index.html">Products </a></li>
        </ul>
        <div class="ps-categogy__content">
            <div class="row row-reverse">
                <div class="col-12 col-md-9">
                    <div class="ps-categogy__wrapper">

                        <div class="ps-categogy__type">
                            <a href="" class="active"  id="grid">
                                <img src="{{asset('frontend/img/icon/gird3.svg')}}" alt="">
                            </a>
                            <a class="active" id="table" href="">
                               <img src="{{asset('frontend/img/icon/bars.svg')}}" alt="">
                           </a>
                        </div>

                        <div class="ps-categogy__onsale">
                          
                        </div>
                        <div class="ps-categogy__sort">
                            <form action="{{route('sorting')}}" method="get">
                                <select name="sorting" class="form-select" onchange="this.form.submit()">
                                    <option selected>Select By</option>
                                  <option  value="title">Sort By Name</option>
                                  <option value="price">Sort By Price</option>
                                </select>
                            </form>

                        </div>
                    </div>

                    {{-- Grid View  --}} 

                    <div class="ps-categogy--grid mb-5 " id="list1">
                        <div class="row m-0">
                            @if($products->isNotEmpty())
                     @foreach ($products as $product)
                            <div class="col-6 col-lg-4 col-xl-3 p-0">
                                <div class="ps-product ps-product--standard">
                                    <div class="ps-product__thumbnail img_height">
                                        <a class="ps-product__image" href="{{route('product.details', $product->id)}}">
                                            <figure>
                                                @isset($product->image->image_name)
                                                <img src="{{ asset('/storage/images/Product/' . $product->image->image_name) }}" alt="There is no image avaliable for this product">
                                                @endisset
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="ps-product__content">
                                        <h5 class="ps-product__title product_price"><a href="{{route('product.details', $product->id)}}"><b>{{ $product->title }}</b></a></h5>
                                        <h5 class="ps-product__title"><a href="{{route('product.details', $product->id)}}">{{ $product->brand->name }}</a></h5>
                                        <div class="ps-product__meta"><span class="ps-product__price sale">₹{{ $product->price }}</span>
                                        </div>
                                        <a class="ps-btn ps-btn--warning" href="{{route('product.details', $product->id)}}">Inquiry</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div>
                                <h2>No Products found</h2>
                            </div>
                            @endif
                        </div>
                    </div>
                    {{-- list view  --}}
                    <div class="ps-categogy--list mb-5 " id="list2">
                        @foreach ($products as $product)
                        <div class="ps-product ps-product--list">
                            <div class="ps-product__content">
                                <div class="ps-product__thumbnail">
                                    <a class="ps-product__image" href="{{route('product.details', $product->id)}}">
                                        <figure>
                                            @isset($product->image->image_name)
                                            <img src="{{ asset('/storage/images/Product/' . $product->image->image_name) }}" alt="There is no image avaliable for this product">
                                            @endisset
                                        </figure>
                                    </a>
                                    <div class="ps-product__badge">
                                    </div>
                                </div>
                                <div class="ps-product__info">
                                    <h5 class="ps-product__title product_price"><a href="{{route('product.details', $product->id)}}"><b>{{ $product->title }}</b></a></h5>
                                    <h5 class="ps-product__title"><a href="{{route('product.details', $product->id)}}">Brand : {{ $product->brand->name }}</a></h5>
                                </div>
                            </div>
                            <div class="ps-product__footer">
                                <div class="ps-product__meta "><span class="ps-product__price sale">₹{{ $product->price }}</span>
                                </div>
                                <div class="ps-product__quantity">
                                    <div class="def-number-input number-input safari_only">
                                    </div>
                                    <a class="ps-btn ps-btn--warning" href="{{route('product.details', $product->id)}}">Inquiry</a>
                                </div>
                                <div class="ps-product__variations">
                                    <a class="ps-product__link" href="{{route('product.details', $product->id)}}">Product Description</a>
                                    <a class="ps-product__link" href="{{route('product.details', $product->id)}}">View features</a></div>
                            </div>
                        </div>
                         @endforeach
                    </div>
                    {{-- End List view  --}}

                </div>
                <div class="col-12 col-md-3">
                    <div class="ps-widget ps-widget--product">
                        <h1 class="ps-categogy__name">Products<sup>({{$noOfProducts}})</sup></h1>
                        <div class="ps-widget__block">
                            <h4 class="ps-widget__title">Categories</h4><a class="ps-block-control" href="#"><i class="fa fa-angle-down"></i></a>
                            <div class="ps-widget__content ps-widget__category">
                                <ul class="menu--mobile">
                                    @foreach ($categories as $category)
                                    <li class=""><a href="{{route('products',$category->id)}}">{{ $category->name }}</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                                        <ul class="sub-menu" style="display: none;">
                                            @foreach ($sub_categorys as $sub_category)
                                            @if($category->id == $sub_category->parent_id)
                                            <li><a href="{{route('products',$sub_category->id)}}">{{ $sub_category->name }}</a></li>
                                            @endif
                                           
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="ps-widget ps-widget--product">
                        <div class="ps-widget__block">
                            <h4 class="ps-widget__title">Brands</h4><a class="ps-block-control" href="#"><i class="fa fa-angle-down"></i></a>
                            <div class="ps-widget__content ps-widget__category">
                                <ul class="menu--mobile">
                                    @foreach ($brands as $brand)
                                    <li class=""><a href="{{route('products',[$categoryId,$brand->id])}}">{{ $brand->name }}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    @include('frontend.ajax')
    <script>
            document.getElementById('list2').style.display = 'none';
        document.getElementById('grid').addEventListener('click',function(e){
            e.preventDefault();
          document.getElementById('list2').style.display = 'none';
          document.getElementById('list1').style.display = 'block';

      });


        document.getElementById('table').addEventListener('click',function(e){
            e.preventDefault();
          document.getElementById('list1').style.display = 'none';
          document.getElementById('list2').style.display = 'block';
      });
    </script>
@endsection
