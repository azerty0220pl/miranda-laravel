@extends('layout.layout')

@section('title', 'About')

@section('content')
    <section class="home">
        <p class="title-up text--color-white">THE ULTIMATE LUXURY EXPERIENCE</p>
        <p class="title-1">About Us</p>
        <div class="path">
            <a class="paragraph-2 link text--color-grey-5" href="/index">Home</a>
            <p class="paragraph-2 link"> | </p>
            <p class="paragraph-2 text--color-grey-5">About</p>
        </div>
    </section>
    <section class="no-bottom">
        <div class="video">
            <video muted loop>
                <source src='./assets/video.mp4' type="video/mp4" />
            </video>
            <img class="play" src="/assets/icons/play.svg" />
            <script src="/js/video.js"></script>
        </div>
        <p class="title-2 text--align-center text--color-grey-5">Hello. Our hotel has been present for over 20 years. We
            make
            the best for all our customers.</p>
    </section>

    <section class="services no-bottom">
        <div class="services-item">
            <img class="icon icon--variant-big" src="/assets/icons/breakfast.svg" />
            <p class="paragraph-2 text--align-center">BREAKFAST</p>
        </div>
        <div class="services-item services-item-gold">
            <img class="icon icon--variant-big" src="/assets/icons/plane.svg" />
            <p class="paragraph-2 text--align-center">AIRPORT PICKUP</p>
        </div>
        <div class="services-item">
            <img class="icon icon--variant-big" src="/assets/icons/map-alt.svg" />
            <p class="paragraph-2 text--align-center">CITY GUIDE</p>
        </div>
        <div class="services-item hidden--mobile">
            <img class="icon icon--variant-big" src="/assets/icons/bbq.svg" />
            <p class="paragraph-2 text--align-center">BBQ PARTY</p>
        </div>
        <div class="services-item">
            <img class="icon icon--variant-big" src="/assets/icons/room.svg" />
            <p class="paragraph-2 text--align-center">LUXURY ROOM</p>
        </div>
    </section>

    <section class="restaurant">
        <div class="res-card">
            <div class="res-image">
                <img src="/assets/empty.png" />
            </div>
            <div class="res-content">
                <p class="title-up text--color-grey-3">RESTAURANT</p>
                <p class="title-2 text--color-grey-5">Get Restaurant Facilities & Many Other More</p>
                <p class="paragraph-1 text--color-grey-3">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <button class="button button--variant-gold">TAKE A TOUR</button>
            </div>
        </div>
    </section>

    <section class="facilities-dark">
        <p class="title-up text--color-white text--align-center">FACILITIES</p>
        <p class="title-2 text--align-center text--color-white">Core Features</p>

        <div class="swiper features-swiper no-margin hidden--desktop">
            <div class="swiper-wrapper">
                <div class="swiper-slide facilities-card">
                    <img class="icon icon--variant-big" src="/assets/icons/rate.svg" />
                    <p class="background-text text--color-grey-5">01</p>
                    <p class="title-3 text--color-white">Have High Rating</p>
                    <p class="paragraph-1 text--color-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed
                        do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
                <div class="swiper-slide facilities-card">
                    <img class="icon icon--variant-big" src="/assets/icons/clock.svg" />
                    <p class="background-text text--color-grey-5">02</p>
                    <p class="title-3 text--color-white">Quit Hours</p>
                    <p class="paragraph-1 text--color-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed
                        do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
                <div class="swiper-slide facilities-card">
                    <img class="icon icon--variant-big" src="/assets/icons/location.svg" />
                    <p class="background-text text--color-grey-5">03</p>
                    <p class="title-3 text--color-white">Best Locations</p>
                    <p class="paragraph-1 text--color-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed
                        do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
                <div class="swiper-slide facilities-card">
                    <img class="icon icon--variant-big" src="/assets/icons/clock-alt.svg" />
                    <p class="background-text text--color-grey-5">04</p>
                    <p class="title-3 text--color-white">Free Cancelation</p>
                    <p class="paragraph-1 text--color-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed
                        do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
                <div class="swiper-slide facilities-card">
                    <img class="icon icon--variant-big" src="/assets/icons/credit-card.svg" />
                    <p class="background-text text--color-grey-5">05</p>
                    <p class="title-3 text--color-white">Payment Options</p>
                    <p class="paragraph-1 text--color-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed
                        do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
                <div class="swiper-slide facilities-card">
                    <img class="icon icon--variant-big" src="/assets/icons/discount.svg" />
                    <p class="background-text text--color-grey-5">06</p>
                    <p class="title-3 text--color-white">Special Offers</p>
                    <p class="paragraph-1 text--color-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed
                        do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>

        <script type="module">
            import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js';

            const swiperFeatures = new Swiper('.features-swiper', {
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                }
            });
        </script>

        <div class="hidden--mobile">
            <div class="row row--gap-1">
                <div class="column column--gap-1">
                    <div class="facilities-card">
                        <img class="icon icon--variant-big" src="/assets/icons/rate.svg" />
                        <p class="background-text text--color-grey-5">01</p>
                        <p class="title-3 text--color-white">Have High Rating</p>
                        <p class="paragraph-1 text--color-white">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                    <div class="facilities-card">
                        <img class="icon icon--variant-big" src="/assets/icons/clock-alt.svg" />
                        <p class="background-text text--color-grey-5">04</p>
                        <p class="title-3 text--color-white">Free Cancelation</p>
                        <p class="paragraph-1 text--color-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                </div>
                <div class="column column--gap-1">
                    <div class="facilities-card">
                        <img class="icon icon--variant-big" src="/assets/icons/clock.svg" />
                        <p class="background-text text--color-grey-5">02</p>
                        <p class="title-3 text--color-white">Quit Hours</p>
                        <p class="paragraph-1 text--color-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                    <div class="facilities-card">
                        <img class="icon icon--variant-big" src="/assets/icons/credit-card.svg" />
                        <p class="background-text text--color-grey-5">05</p>
                        <p class="title-3 text--color-white">Payment Options</p>
                        <p class="paragraph-1 text--color-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                </div>
                <div class="column column--gap-1">
                    <div class="facilities-card">
                        <img class="icon icon--variant-big" src="/assets/icons/location.svg" />
                        <p class="background-text text--color-grey-5">03</p>
                        <p class="title-3 text--color-white">Best Locations</p>
                        <p class="paragraph-1 text--color-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                    <div class="facilities-card">
                        <img class="icon icon--variant-big" src="/assets/icons/discount.svg" />
                        <p class="background-text text--color-grey-5">06</p>
                        <p class="title-3 text--color-white">Special Offers</p>
                        <p class="paragraph-1 text--color-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter">
        <p class="title-up text--color-grey-3">COUNTER</p>
        <p class="title-2 text--color-grey-5">Some Fun Facts</p>
        <div class="counter-card">
            <div class="entry">
                <div class="img">
                    <img src="/assets/icons/comment.svg" alt="">
                </div>
                <div class="data">
                    <p class="title-2 text--color-grey-5">8000</p>
                    <p class="paragraph-1 text--color-grey-5">Happy Users</p>
                </div>
                <div class="icon">
                    <img src="/assets/icons/arrow-long.svg" alt="">
                </div>
            </div>
            <div class="entry">
                <div class="img">
                    <img src="/assets/icons/rate-alt.svg" alt="">
                </div>
                <div class="data">
                    <p class="title-2 text--color-grey-5">10M</p>
                    <p class="paragraph-1 text--color-grey-5">Reviews & Appriciate</p>
                </div>
                <div class="icon">
                    <img src="/assets/icons/arrow-long.svg" alt="">
                </div>
            </div>
            <div class="entry">
                <div class="img">
                    <img src="/assets/icons/globe.svg" alt="">
                </div>
                <div class="data">
                    <p class="title-2 text--color-grey-5">100</p>
                    <p class="paragraph-1 text--color-grey-5">Country Coverage</p>
                </div>
                <div class="icon">
                    <img src="/assets/icons/arrow-long.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="lonely">
        <div class="swiper lonely-swiper hidden--desktop">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="lonely-img">
                        <img src="/assets/img/lonely1.jpg" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="lonely-img">
                        <img src="/assets/img/lonely2.jpg" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="lonely-img">
                        <img src="/assets/img/lonely3.jpeg" />
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

        <script type="module">
            import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js';

            const swiperLonely = new Swiper('.lonely-swiper', {
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },

                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                }
            });
        </script>

        <div class="hidden--mobile even-row">
            <div class="lonely-img">
                <img src="/assets/img/lonely1.jpg" />
            </div>
            <div class="lonely-img">
                <img src="/assets/img/lonely2.jpg" />
            </div>
            <div class="lonely-img">
                <img src="/assets/img/lonely3.jpeg" />
            </div>
        </div>
    </section>
@endsection