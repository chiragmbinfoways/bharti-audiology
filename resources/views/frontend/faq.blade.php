@extends('frontend.layouts.app')
@section('title')
    FAQ
@endsection

@section('content')
    <!-- Main content -->
    <div class="container">
        <ul class="ps-breadcrumb">
            <li class="ps-breadcrumb__item"><a href="/">Home</a></li>
            <li class="ps-breadcrumb__item active" aria-current="page">FAQ</li>
        </ul>
        <h1 class="ps-categogy__name">Frequently Asked Questions</h1>

        <div class="col-12 col-md-12">
            <div class="ps-widget ps-widget--product">
                <div class="ps-widget__block">
                    <div class="ps-widget__content ps-widget__category">
                        <ul class="menu--mobile">
                            <li class=""><a href="#"> How many people around the world have hearing loss?</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                                <ul class="sub-menu" style="display: none;">
                                    <li><a href="#">If you have hearing loss, you’re not alone. Around 466 million people worldwide have disabling hearing loss, of which approximately 34 million are children. (World Health Organization, 2019).</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="#">What are the causes of hearing loss?</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="#"> Many factors can cause hearing loss, such as the aging process,
                                        heredity, disease, exposure to noise, and buildup of earwax, among
                                        other.</a>
                                    </li>
                                </ul>
                                   
                            </li>
                            <li><a href="#">  What can cause loss in children?</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="#">  Many factors can cause childhood hearing loss, such as premature birth,
                                        complications at birth, exposure to loud sounds, infections, or ototoxic
                                        (ear-damaging) medications.</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="#"> What is conductive hearing loss?</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="#"> Conductive hearing loss results from problems in the outer or middle ear
                                        caused by infections, buildup of wax or fluid, punctured eardrums or
                                        otosclerosis (abnormal bone development). This type of hearing loss is
                                        often temporary and can sometimes be corrected or treated with wax
                                        removal, medication, or surgery.</a></li>
                                   
                                </ul>
                            </li>
                            <li><a href="#">What are the different types of hearing loss?</a><span class="sub-toggle"><i          class="fa fa-chevron-down"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="#"> There are three main types of hearing loss: conductive, sensorineural
                                        and mixed hearing loss. Treatment of hearing loss is dependent on an
                                        individual’s type and level of hearing loss.
                                    </div></a></li>
                                </ul>
                            </li>
                           
                        </ul>
                    </div>
                </div>
        </div>
    </div>
 
@endsection

@section('scripts')
    @include('frontend.ajax')
@endsection
