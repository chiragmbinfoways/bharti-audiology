@extends('frontend.layouts.app')
@section('title')
    Contact Us
@endsection

@section('content')

<div class="ps-contact">
    <div class="container">
        <ul class="ps-breadcrumb">
            <li class="ps-breadcrumb__item"><a href="/">Home</a></li>
            <li class="ps-breadcrumb__item active" aria-current="page">Contact us</li>
        </ul>
        <div class="ps-contact__content">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="ps-contact__info">
                        <h2 class="ps-contact__title">How can we help you?</h2>
                        <p class="ps-contact__text">We are at your disposal 7 days a week!</p>
                        <h3 class="ps-contact__fax">{{$phone->value}}</h3>
                        <div class="ps-contact__work">{{$email->value}}</div>
                        <div class="ps-contact__work">{{$time->value}}</div>
                        <ul class="ps-social">
                            <li><a class="ps-social__link facebook" href="#"><i class="fa fa-facebook"> </i><span class="ps-tooltip">Facebook</span></a></li>
                            <li><a class="ps-social__link instagram" href="#"><i class="fa fa-instagram"></i><span class="ps-tooltip">Instagram</span></a></li>
                            <li><a class="ps-social__link youtube" href="#"><i class="fa fa-youtube-play"></i><span class="ps-tooltip">Youtube</span></a></li>
                            <li><a class="ps-social__link pinterest" href="#"><i class="fa fa-pinterest-p"></i><span class="ps-tooltip">Pinterest</span></a></li>
                            <li><a class="ps-social__link linkedin" href="#"><i class="fa fa-linkedin"></i><span class="ps-tooltip">Linkedin</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="ps-contact__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.45434239065!2d73.17651041481834!3d22.336467185304823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc92986d475a1%3A0x40460d9885d34971!2sBharti%20Audiology%20Clinic!5e0!3m2!1sen!2sin!4v1668064208009!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                </div>
            </div>
        </div>

        <form action="{{ route('store.inquiry') }}" id="contact-form" method="post">
            @csrf
            <div class="ps-form--contact">
                <h2 class="ps-form__title">Fill up the form if you have any question</h2>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="ps-form__group">
                            <input class="form-control ps-form__input" type="text" required="required"  name="fname" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="ps-form__group">
                            <input class="form-control ps-form__input" type="text" required="required"  name="lname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="ps-form__group">
                            <input class="form-control ps-form__input" type="email" name="email" placeholder="Your E-mail">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="ps-form__group">
                            <input class="form-control ps-form__input" maxlength="10" required="required" type="text" name="phone" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="ps-form__group">
                            <input class="form-control ps-form__input" maxlength="6" required="required" type="text" name="postcode" placeholder="postcode">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="ps-form__group">
                        <select name="inquery" id="subject" class="  form-control ps-form__input">
                            <option value="general inquery"> General Inquery</option>
                            <option value="product inquery">Product Inquery</option>
                        </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="ps-form__group">
                            <textarea class="form-control ps-form__textarea" rows="5" name="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="ps-form__submit">
                    <button class="ps-btn ps-btn--warning" id="submit" type="submit">Send message</button>
                </div>
            </div>
        </form>
    </div>
</div>
    <!-- /.content -->
@endsection

@section('scripts')
    @include('frontend.ajax');
@endsection
