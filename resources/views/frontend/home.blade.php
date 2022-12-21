@extends('frontend.layouts.app')
@section('title')
Bharti Audiology Services
@endsection
@section('content')
<div class="ps-about">
    <div class="container">
        <section class="ps-banner--round">
            <div class="ps-banner">
                <div class="ps-banner__block">
                    <div class="ps-banner__content">
                        <div class="ps-logo"><a href="index.html"> <img src="{{ asset('frontend/img/logo.png') }}" alt></a>
                        </div>
                        <h2 class="ps-banner__title">THE PERFECTION OF <br> NATURAL SOUND!</h2>
                        <div class="ps-banner__btn-group">
                            <div class="ps-banner__btn"><img src="{{ asset('frontend/img/icon/ribbon.svg') }}" alt>Superior sound in nearly invisible hearing devices</div>
                        </div>
                        <a class="ps-banner__shop bg-yellow" href="/hearingLoss">About</a>
                    </div>
                    <div class="ps-banner__thumnail"><img class="ps-banner__round" src="{{ asset('frontend/img/round5.png') }}" alt><img class="ps-banner__image" src="{{ asset('frontend/img/ear-machine.png') }}" alt></div>
                </div>
            </div>
        </section>
    </div>

    <section class="ps-about--info">
        <h2 class="ps-about__title">UNLOCK A HEARING AID’S <br> TRUE POTENATIAL</h2>
        <p class="ps-about__subtitle">IS WHEN GREAT HEARING FEELS TAILOR MADE.</p>
        <div class="ps-about__extent">
            <div class="row m-0">
                <div class="col-12 col-md-4 p-0">
                    <div class="ps-block--about">
                        <div class="ps-block__icon"><img src="{{ asset('frontend/img/about/1.png') }}" alt="">
                        </div>
                        <h4 class="ps-block__title">Quality Products- <br>professional care</h4>
                        <div class="ps-block__subtitle">The highest quality and protection for your Ear</div>
                    </div>
                </div>
                <div class="col-12 col-md-4 p-0">
                    <div class="ps-block--about">
                        <div class="ps-block__icon"><img src="{{ asset('frontend/img/about/3.png') }}" alt="">
                        </div>
                        <h4 class="ps-block__title">Customers Review & <br> Satisfaction <br></h4>
                        <div class="ps-block__subtitle">More Than 2000+ Customers Trust</div>
                    </div>
                </div>
                <div class="col-12 col-md-4 p-0">
                    <div class="ps-block--about">
                        <div class="ps-block__icon"><img src="{{ asset('frontend/img/about/2.png') }}" alt="">
                        </div>
                        <h4 class="ps-block__title">Sales After <br> Service </h4>
                        <div class="ps-block__subtitle">We provide Excellent sales after service</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ps-about__banner" data-background="{{ asset('frontend/img/Mask-Group.jpg') }}" style="background-image: url(&quot;{{ asset('frontend/img/Mask-Group.jpg') }}&quot;);">
        <div class="container">
            <div class="ps-banner">
                <h2 class="ps-banner__title">Hundreds of thousands of products at bargain prices</h2>
                <a class="ps-banner__shop" href="/hearingAids">Shop now</a>
            </div>
        </div>
    </section>


    <div class="ps-about__content mt-5">
        <section class="ps-about__project">
            <div class="container">
                <h2 class="ps-about__title">
                    HARD OF HEARING? YOU'RE NOT ALONE</h2>
                    <section class="ps-section--block-grid row-reverse">
                        <div class="ps-section__thumbnail"> <a class="ps-section__image" href="#"><img src="{{ asset('frontend/img/about/about-us-2.jpg') }}" alt=""></a></div>
                        <div class="ps-section__content">
                            <h3 class="ps-section__title">About Hearing Loss</h3>
                            <div class="ps-section__subtitle">Life Beyond Hearing Loss Starts Here</div>
                            <ul class="ps-section__list">
                                <li> Aging and exposure to loud noise may cause wear and tear on the hairs or nerve cells in
                                    the cochlea that send sound signals to the brain.</li>
                                <li>Major causes of hearing loss include congenital or early onset childhood hearing loss,
                                    chronic middle ear infections, noise-induced hearing loss, age-related hearing loss, and
                                    ototoxic drugs that damage the inner ear.</li>
                                <li>The impacts of hearing loss are broad and can be profound. They include a loss of the
                                    ability to communicate with others delayed language development in children, which can
                                    lead to social isolation, loneliness and frustration, particularly among older people
                                    with hearing loss.</li>
                                    <u><a class="" href="{{route('moreDeatils')}}">Learn More</a></u>
                            </ul>
                        </div>
                    </section>
                    <section class="ps-section--block-grid">
                        <div class="ps-section__thumbnail"> <a class="ps-section__image" href="#"><img src="{{ asset('frontend/img/about/cause (1).png') }}" alt=""></a></div>
                        <div class="ps-section__content">
                            <h3 class="ps-section__title">Causes Of Hearing Loss!</h3>
                            <div class="ps-section__subtitle">Aging Degeneration of inner ear structures occurs over time.
                            </div>
                            <ul class="ps-section__list">
                                <li>Loud noise. Exposure to loud sounds can damage the cells of your inner ear. ...</li>
                                <li>Some medications. Drugs such as the antibiotic gentamicin, sildenafil (Viagra) and
                                    certain chemotherapy drugs, can damage the inner ear.</li>
                                <li>Some illnesses. Diseases or illnesses that result in high fever, such as meningitis, may
                                    damage the cochlea.</li>
                                <li>Aging and chronic exposure to loud noises both contribute to hearing loss. Other factors, such as excessive earwax, can temporarily reduce how well your ears conduct sounds.</li>
                                <li>You can't reverse most types of hearing loss. However, you and your doctor or a hearing specialist can take steps to improve what you hear.</li>
                            </ul>
                        </div>
                    </section>
                    <section class="ps-section--block-grid row-reverse">
                        <div class="ps-section__thumbnail"> <a class="ps-section__image" href="#"><img src="{{ asset('frontend/img/about/about-us-2.jpg') }}" alt=""></a></div>
                        <div class="ps-section__content">
                            <h3 class="ps-section__title">Do you have a hearing problem ?</h3>
                            <div class="ps-section__subtitle">Common early hearing loss symptoms include: </div>
                            <div class="ps-section__desc">Early signs of hearing loss can be subtle. Maybe you find yourself
                                asking your husband to repeat himself a lot – or you didn’t catch the whole conversation at
                                table last night. As time goes on, your hearing is likely to get worse, robbing you of the
                                sound you are used to. </div>
                            <ul class="ps-section__list">
                                <li>Have trouble hearing over the telephone .</li>
                                <li>Need to turn up the TV volume so loud that others complain .</li>
                                <li>Find it hard to follow conversations when two or more people are talking.</li>
                                <li>Can’t understand when women and children speak to you</li>
                            </ul>
                        </div>
                    </section>
                <hr>
                <h2 class="ps-about__title pb-5">
                    Types Of Hearing Aids</h2>
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
        </section>

        <div class="container">
            <div class="ps-promo">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="ps-promo__item">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/AxzVyMcmRcs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                           
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="ps-promo__item">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/y6mAo_6x6oc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="ps-promo__item">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/mitAY0wsN0M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="ps-section--reviews" data-background="{{ asset('frontend/img/roundbg.png') }}">
            <h3 class="ps-section__title"> <img src="{{ asset('frontend/img/quote-icon.png') }}" alt>Latest reviews
            </h3>
            <div class="ps-section__content">
                <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="13000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="3" data-owl-item-lg="5" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                    <div class="ps-review">
                        <div class="ps-review__text">There was a small mistake in the order. In return, I got the
                            correct order and I could keep the wrong one for myself.</div>
                        <div class="ps-review__name">Esther Howard</div>
                        <div class="ps-review__review">
                            <select class="ps-rating" data-read-only="true">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" selected="selected">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="ps-review">
                        <div class="ps-review__text">I ordered on Friday evening and on Monday at 12:30 the package
                            was with me. I have never encountered such a fast order processing.</div>
                        <div class="ps-review__name">Albert Flores</div>
                        <div class="ps-review__review">
                            <select class="ps-rating" data-read-only="true">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" selected="selected">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="ps-review">
                        <div class="ps-review__text">I ordered on Friday evening and on Monday at 12:30 the package
                            was with me. I have never encountered such a fast order processing.</div>
                        <div class="ps-review__name">Dianne Russell</div>
                        <div class="ps-review__review">
                            <select class="ps-rating" data-read-only="true">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" selected="selected">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="ps-review">
                        <div class="ps-review__text">Everything is perfect. I would recommend!</div>
                        <div class="ps-review__name">Darlene Robertson</div>
                        <div class="ps-review__review">
                            <select class="ps-rating" data-read-only="true">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" selected="selected">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="ps-review">
                        <div class="ps-review__text">There was a small mistake in the order. In return, I got the
                            correct order and I could keep the wrong one for myself.</div>
                        <div class="ps-review__name">Brooklyn Simmons</div>
                        <div class="ps-review__review">
                            <select class="ps-rating" data-read-only="true">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" selected="selected">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="ps-review">
                        <div class="ps-review__text">Everything is perfect. I would recommend!</div>
                        <div class="ps-review__name">Kristin Watson</div>
                        <div class="ps-review__review">
                            <select class="ps-rating" data-read-only="true">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" selected="selected">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="ps-review">
                        <div class="ps-review__text">I ordered on Friday evening and on Monday at 12:30 the package
                            was with me. I have never encountered such a fast order processing.</div>
                        <div class="ps-review__name">Mark J.</div>
                        <div class="ps-review__review">
                            <select class="ps-rating" data-read-only="true">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" selected="selected">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('scripts')
@include('frontend.ajax')
@endsection