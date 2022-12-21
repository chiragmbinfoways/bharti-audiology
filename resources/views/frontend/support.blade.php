@extends('frontend.layouts.app')
@section('title')
    Support & care
@endsection

@section('content')
    <div class="container">
        <ul class="ps-breadcrumb">
            <li class="ps-breadcrumb__item"><a href="index.html">Home</a></li>
            <li class="ps-breadcrumb__item active" aria-current="page">Support & care</li>
        </ul>

        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('store.support') }}" method="post">
                    @csrf
                    <div class="ps-form--contact">
                        <h2 class="ps-form__title">Support & Care Form</h2>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="ps-form__group">
                                    <input class="form-control ps-form__input" name="fname" required type="text"
                                        placeholder="First Name ">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="ps-form__group">
                                    <input class="form-control ps-form__input" name="lname" required type="text"
                                        placeholder="Last Name ">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="ps-form__group">
                                    <input class="form-control ps-form__input" name="email" type="email" required
                                        placeholder="Your E-mail">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="ps-form__group">
                                    <input class="form-control ps-form__input" name="phone" required type="text"
                                        placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="ps-form__group">
                                    <textarea class="form-control ps-form__input" name="address" placeholder="Address"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-check mb-3 ">
                                <input type="checkbox" class="form-check-input" value=" App Support" name="intrest[]" id="1">
                               <label class=" form-group form-check-label" for="1">App Support </label>
                               
                            </div>

                            <div class="col-md-4 form-check">
                                <input type="checkbox" class="form-check-input" value="Hearing Aids Support"
                                name="intrest[]" id="2">
                                <label class="form-group form-check-label" for="2">Hearing Aids
                                Support</label>
                            </div>
                            <div class="col-md-4 form-check ">
                                <input type="checkbox" class="form-check-input" value="Accessories Support"
                                name="intrest[]" id="3">
                            <label class=" form-group form-check-label" for="3">Accessories
                                Support</label>
                            </div>
                            <div class="col-md-4 form-check mb-5">
                                <input type="checkbox" class="form-check-input" value="Purchase Support" name="intrest[]"
                                id="4">
                            <label class=" form-group form-check-label" for="4">Purchase
                                Support</label>
                            </div>
                            <div class="col-md-4 form-check">
                                <input type="checkbox" class="form-check-input" value="Other" name="intrest[]"
                                id="5">
                            <label class=" form-group form-check-label" for="5">Other</label>
                            </div>
                        </div>
                        <div class="ps-form__submit">
                            <button class="ps-btn ps-btn--warning">Send message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
             <img src="{{asset('frontend/img/hearingloss/support.jpg')}}" alt="image not available">
            </div>
        </div>

       
    </div>
@endsection

@section('scripts')
    @include('frontend.ajax')
    <script>
        $(document).on('submit', '#contact-form', function() {
            window.location.reload();
        });
    </script>
@endsection
