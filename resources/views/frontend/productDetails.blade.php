@extends('frontend.layouts.app')
@section('title')
    Product Details
@endsection

@section('content')

<div class="container">
    <ul class="ps-breadcrumb">
        <li class="ps-breadcrumb__item">Home</li>
        <li class="ps-breadcrumb__item">Product </li>
        <li class="ps-breadcrumb__item active" aria-current="page">{{ $product->title }}</li>
    </ul>
    <div class="ps-page__content">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="ps-product--detail">
                    <div class="row">
                        <div class="col-12 col-xl-7">
                            <div class="ps-product--gallery">
                                <div class="ps-product__thumbnail">
                                    @foreach ($productImages as $productImage)
                                    <div class="slide"><img src="{{ asset('/storage/images/Product/' . $productImage->image_name) }}" alt="alt" /></div>
                                    @endforeach
                                </div>
                                <div class="ps-gallery--image">
                                    @foreach ($productImages as $productImage)
                                    <div class="slide">
                                        <div class="ps-gallery__item"><img src="{{ asset('/storage/images/Product/th/' . $productImage->image_name) }}" alt="alt" /></div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-5">
                            <div class="ps-product__info">
                                <div class="ps-product__title"><a href="">{{ $product->title }}</a></div>
                                <div class="ps-product__desc">
                                    <ul class="ps-product__list">
                                        <li> <span class="mb-1"><span><b>Brand : </b></span> {{ $product->brand->name }}</span></li>
                                        <li> <span class="mb-1"><span><b>Category : </b></span>  {{ $product->categories->parent->name }}</span></li>
                                        <li> <span> <span><b>Sub-Category :</b></span>{{ $product->categories->name }}</span></li>
                                     
                                    </ul>
                                </div>
                                <div class="ps-product__meta">
                                    <span class="ps-product__price"> ₹ {{ $product->price }}</span>
                                </div>
                                <div class="ps-product__type">
                                    <ul class="ps-product__list">
                                        @foreach ($productAttributes as $productAttribute)
                                        <li> 
                                            <span class="ps-list__title">{{ $productAttribute->get_attr->name }} : </span>
                                            <a class="ps-list__text" href="#">{{ $productAttribute->get_attr_value->value }}</a>

                                        @endforeach
                                        </li>
                                    </ul>
                                </div>
                                <div class="ps-product__social">
                                    <ul class="ps-social ps-social--color">
                                        <li>
                                                <a class="ps-btn ps-section__toggle ps-btn--warning" id="inquery" href="#">Product Inquery</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="formToggle" >
                        <div class="ps-form--review">
                            <div class="ps-form__title" >Product Inquery</div>
                            <div class="ps-form__desc">All Fields aree Required *</div>
                            <form  method="post"  id="inqueryForm"  action="{{ route('store.productinquiry') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-md-4 mb-3">
                                        <div class="ps-form__group">
                                            <input class="form-control ps-form__input" type="text" required="required" name="name" placeholder="Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="ps-form__group">
                                            <input class="form-control ps-form__input" type="text" required="required" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="ps-form__group">
                                            <input class="form-control ps-form__input"  maxlength="10" type="phone" name="phone" placeholder="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3 product_name">
                                        <div class="ps-form__group">
                                            <input type="text" class="form-control ps-form__input" readonly
                                            value="{{ $product->title }}" name="productName" placeholder="productName"
                                            required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="ps-form__group">
                                            <textarea class="form-control ps-form__textarea" rows="3" name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-form__submit">
                                    <button class="ps-btn ps-btn--warning" id="inqueryForm" type="submit">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                
                    <div class="ps-product__content">
                        <ul class="nav nav-tabs ps-tab-list" id="productContentTabs" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link active" id="description-tab" data-toggle="tab" href="#description-content" role="tab" aria-controls="description-content" aria-selected="true">Description</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" id="specification-tab" data-toggle="tab" href="#specification-content" role="tab" aria-controls="specification-content" aria-selected="false">Specification</a></li>
                        </ul>
                        <div class="tab-content" id="productContent">
                            <div class="tab-pane fade show active" id="description-content" role="tabpanel" aria-labelledby="description-tab">
                                <div class="ps-document">
                                    <div class="row ">
                                        <div class="col-12 col-md-12">
                                            <p class="ps-desc">{!! $product->longDescription !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="specification-content" role="tabpanel" aria-labelledby="specification-tab">
                                <div class="ps-table__name">Product Heighlights</div>
                                <table class="table ps-table ps-table--oriented">
                                    <tbody>
                                        <tr>
                                            <th class="ps-table__th">Brand </th>
                                            <td>{{ $product->brand->name }}</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-table__th">Category </th>
                                            <td>{{ $product->categories->parent->name }}</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-table__th">Sub-Category </th>
                                            <td>{{ $product->categories->name }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="ps-table__name">Features</div>
                                <table class="table ps-table ps-table--oriented">
                                    <tbody>

                                        @foreach ($productAttributes as $productAttribute)
                                        <tr>
                                            <th class="ps-table__th">{{ $productAttribute->get_attr->name }} </th>
                                            <td>{{ $productAttribute->get_attr_value->value }}</td>
                                        </tr>
                                        @endforeach
                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="ps-product--extension">
                    <div class="ps-product__delivery">
                        <div class="ps-delivery__item"><i class="icon-wallet"></i>100% <br>Money back</div>
                        <div class="ps-delivery__item"><i class="icon-bag2"></i>Non-contact <br>shipping</div>
                        <div class="ps-delivery__item"><i class="icon-truck"></i>Free delivery for <br>order over ₹ 5000</div>
                    </div>
                    <div class="ps-product__payment"> <img src="{{asset('frontend/img/payment-product.png')}}" alt></div>
                    <div class="ps-product__gif">
                        <div class="ps-gif__text"><i class="icon-shield-check"></i><strong>100% Secure delivery </strong>without contacting the courier</div><img class="ps-gif__thumbnail" src="{{asset('frontend/img/blue-white-ribbon-on-pink-box.jpg')}}" alt>
                    </div>
                </div>
                <div class="ps-widget--related-product">
                    <div class="ps-widget__title">Related Products</div>
                    <div class="ps-widget__product">
                        @foreach ( $relatedProducts as $relatedProduct )
                        <div class="ps-product ps-product--standard">
                            <div class="ps-product__thumbnail"><a class="ps-product__image" href="{{route('product.details', $relatedProduct->id)}}">
                                    <figure><img src="{{ asset('/storage/images/Product/' . $relatedProduct->image->image_name) }}" alt="alt" />
                                    </figure>
                                </a>
                            </div>
                            <div class="ps-product__content">
                                <h5 class="ps-product__title"><a href="{{route('product.details', $relatedProduct->id)}}">{{$relatedProduct->title}}</a></h5>
                                <div class="ps-product__meta"><span class="ps-product__price sale">₹ {{$relatedProduct->price}}</span>
                                </div>
                                <div class="ps-product__desc">
                                    <ul class="ps-product__list">
                                        <li>Study history up to 30 days</li>
                                        <li>Up to 5 users simultaneously</li>
                                        <li>Has HEALTH certificate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                     
                    </div>
                </div>
                <div class="ps-widget--promo"><img src="img/banner-sidebar1.jpg" alt></div>
            </div>
        </div>
    </div>
</div>
    <!-- /.content -->
@endsection

@section('scripts')
    <script>
        jQuery(document).ready(function() {
            jQuery('#inquery').on('click', function(e) {
                $('#formToggle').show();
                $('html, body').animate({ scrollTop: $("#formToggle").offset().top-300 }, 1000);
            });
        });

        $(document).on('submit', '#inqueryForm', function() {
            window.location.reload();
        });
    </script>
    @include('frontend.ajax')
@endsection
