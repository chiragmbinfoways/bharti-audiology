@extends('frontend.layouts.app')
@section('title')
    Hearing Loss
@endsection

@section('content')
    <!-- Main content -->
    <div class="container">
        <ul class="ps-breadcrumb">
            <li class="ps-breadcrumb__item"><a href="index.html">Home</a></li>
            <li class="ps-breadcrumb__item active" aria-current="page"> Hearing Loss</li>
        </ul>
        <h2 class="">About Hearing Loss</h2>
        <div class="ps-blog__content">
            <div class="row">
                <section class="ps-section--block-grid">
                    <div class="ps-section__thumbnail"> <a class="ps-section__image" style="height:300px" href="#"><img src="{{ asset('frontend/img/feature-thumb/ears8.jpg') }}" alt=""></a></div>
                    <div class="ps-section__content">
                        <h3 class="ps-section__title">Your hearing is important</h3>
                        <div class="ps-section__desc">Every day has a multitude of sounds, yet you’re struggling to hear them. People are mumbling or whispering. Music has lost its tones. Your TV or radio is at top volume. Conversations in restaurants, noisy places or on the phone are difficult, so you avoid social situations or taking calls. You stay silent because you feel embarrassed asking people to repeat themselves – or guessing what they are saying. You feel lonely. And tired trying to hear. Sound familiar?</div>
                    </div>
                </section>

                <section class="ps-section--block-grid row-reverse">
                    <div class="ps-section__thumbnail"> <a class="ps-section__image" style="height:300px" href="#"><img src="{{ asset('frontend/img/feature-thumb/ears10.png') }}" alt=""></a></div>
                    <div class="ps-section__content">
                        <h3 class="ps-section__title">How common is hearing loss?</h3>
                        <div class="ps-section__desc">32 million children around the world are affected with hearing loss. Approximately 1.4 to 5 out of every 1000 children are born with hearing loss, while 60% are due to preventable causes.</div>
                        <div class="ps-section__desc">Childhood hearing loss is often identified during newborn hearing screenings that are performed 24-48 hours after birth. However, some children who pass these screenings show signs of loss, as they grow older. 1.1 billion People between the ages of 12-35 are at risk of hearing loss due to exposure to noise in recreational settings with 12.5% having permanent damage.</div>
                       
                        </div>
                    </div>
                </section>
                <section class="ps-section--block-grid">
                    <div class="ps-section__thumbnail"> <a class="ps-section__image" style="height:300px" href="#"><img src="{{ asset('frontend/img/feature-thumb/ears4.jpg') }}" alt=""></a></div>
                    <div class="ps-section__content">
                        <h3 class="ps-section__title">Can you prevent hearing loss?</h3>
                        <div class="ps-section__desc">It’s impossible to block out all the noise of our busy world. Whether it’s construction, car traffic or loud music at a concert, modern life has a way of making a racket.</div>
                        <div class="ps-section__desc">But you can control some of your noise exposure. For example, it’s a good idea to take earplugs along to concerts and movies that feature a loud soundtrack. It’s a great idea to wear earplugs while using noisy household machines such as leaf blowers. People who work in noisy environments should ask their employers to provide hearing protection.
                    </div>
                </section>

                <section class="ps-section--block-grid row-reverse">
                    <div class="ps-section__thumbnail"> <a class="ps-section__image" style="height:300px" href="#"><img src="{{ asset('frontend/img/feature-thumb/ears9.jpeg') }}" alt=""></a></div>
                    <div class="ps-section__content">
                        <h3 class="ps-section__title">You are not alone</h3>
                        <div class="ps-section__desc">When it comes to dealing with hearing impairment, you are not alone. One out of three people over age 65 has some form of hearing loss.</div>
                        <div class="ps-section__desc">It is not only older people who experience hearing difficulties. Young people can also be hearing impaired due to any number of factors, including childhood illnesses or too much exposure to loud noise or music. The truth is, people of all ages may be experiencing untreated hearing loss. With many different treatments options available, there is little reason to avoid taking action .</div>
                        </div>
                    </div>
                </section>
                <section class="ps-section--block-grid">
                    <div class="ps-section__thumbnail"> <a class="ps-section__image" style="height:300px" href="#"><img src="{{ asset('frontend/img/feature-thumb/ears6.jpeg') }}" alt=""></a></div>
                    <div class="ps-section__content">
                        <h3 class="ps-section__title">Hearing loss and development</h3>
                        <div class="ps-section__desc">Research supports that hearing is essential to speech and language development, communication and learning. Children with hearing loss are at risk for developmental delays in areas of receptive and expressive communication skills and often experience learning difficulties, reduced academic achievement and difficulties with communicating and socializing with their family and peers.</div>
                    </div>
                </section>

                <section class="ps-section--block-grid row-reverse">
                    <div class="ps-section__thumbnail"> <a class="ps-section__image" style="height:300px" href="#"><img src="{{ asset('frontend/img/feature-thumb/ears2.jpg') }}" alt=""></a></div>
                    <div class="ps-section__content">
                        <h3 class="ps-section__title"> We can help you</h3>
                        <div class="ps-section__desc">While it can feel overwhelming to deal with your hearing loss, we can guide you through the options and on each step towards better hearing. Does that sound good? Read on to get answers to some important questions on your mind.</div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
  
    <!-- /.content -->
@endsection

@section('scripts')
    @include('frontend.ajax')
@endsection
