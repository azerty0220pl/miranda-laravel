@extends('layout.layout')

@section('title', 'Home')

@section('content')
<section class="home home--margin-bottom">
    <p class="title-up text--color-white">THE ULTIMATE LUXURY EXPERIENCE</p>
    <p class="title-1">The Perfect Base For You</p>
    <div class="buttons">
        <button class="button button--variant-gold">TAKE A TOUR</button>
        <button class="button button--variant-outlined">LEARN MORE</button>
    </div>
</section>

<section class="availability">
    <form id="contact-form" class="form form--color-dark" action="rooms" method="GET">
        @csrf
        <label id="from-label" for="from">
            <p class="text--color-white paragraph-2">Arrival Date</p>
            <input type="date" id="from" name="from" required />
        </label>
        <label id="to-label" for="to">
            <p class="text--color-white paragraph-2">LeDeparture Date</p>
            <input type="date" id="to" name="to" required />
        </label>
        <button type="submit" id="submit" class="button button--variant-gold">CHECK AVAILABILITY</button>
    </form>
</section>

<section class="about">
    <div class="first-div">
        <p class="title-up text--color-grey-3">ABOUT US</p>
        <p class="title-2">Discover Our Underground.</p>
        <p class="paragraph-1 text--color-grey-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button class="button button--variant-gold">BOOK NOW</button>
    </div>

    <div class="second-div">
        <div class="first-card">
            <div class="card-img">
                <img src="/assets/img/team.jpg" />
            </div>
            <div class="card-content">
                <img class="icon icon--variant-big" src="/assets/icons/team.svg" />
                <img class="icon icon--variant-background" src="/assets/icons/team-back.svg" />
                <p class="title-3 text--align-center text--color-grey5">Strong Team</p>
                <p class="paragraph-1 text--align-center text--color-grey-5">Lorem ipsum dolor sit amet, consectetur
                    adipisicing
                    elit, sed do eiusmod tempor.</p>
            </div>
        </div>
        <div class="second-card">
            <div class="card-img">
                <img src="/assets/img/luxury.jpg" />
            </div>
            <div class="card-content">
                <img class="icon icon--variant-big" src="/assets/icons/calendar-arrow.svg" />
                <p class="title-3 text--align-center text--color-white">Luxury Room</p>
                <p class="paragraph-1 text--align-center text--color-white">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed do eiusmod tempor.</p>
            </div>
        </div>
    </div>
</section>

<section class="rooms">
    <p class="title-up text--align-center text--color-grey-3">ROOMS</p>
    <p class="title-2 text--align-center text--color-grey-5">Hand Picked Rooms</p>
    <div class="swiper rooms-swiper">
        <div class="swiper-wrapper">
            @foreach ($rooms as $row)
                <div class="swiper-slide room">
                    <div class="room-img">
                        <img src="/assets/img/rooms.jpg" />
                    </div>
                    <div class="icons icons--margin-negative">
                        <img class="icon" src="/assets/icons/bed.svg" />
                        <img class="icon" src="/assets/icons/wifi.svg" />
                        <img class="icon" src="/assets/icons/car.svg" />
                        <img class="icon" src="/assets/icons/snow.svg" />
                        <img class="icon" src="/assets/icons/strong.svg" />
                        <img class="icon" src="/assets/icons/no-smoking.svg" />
                        <img class="icon" src="/assets/icons/drink.svg" />
                    </div>
                    <div class="room-content">
                        <p class="title-3 text--align-center text--color-grey-5">Room {{ $row["room_name"] }}</p>
                        <p class="paragraph-1 text--align-center text--color-grey-3">
                            {{ $row["des"] }}
                        </p>
                        <div class="even-row">
                            <p class="price-2 text--color-gold text--align-center">${{ price($row["price"], $row["offer"]) }}/Night</p>
                            <a href="/details/{{ $row['id'] }}" class="price-2 text--color-grey-2 text--align-center link">Book Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <svg viewBox="0 0 5 8" width="100" height="100" class="swiper-button-prev">
            <path
                d="M3.81877 7.63778C3.78183 7.6378 3.74525 7.63054 3.71112 7.61641C3.67698 7.60229 3.64596 7.58158 3.61983 7.55547L0.153147 4.08859C0.100421 4.03585 0.0708008 3.96433 0.0708008 3.88975C0.0708008 3.81517 0.100421 3.74365 0.153147 3.69091L3.61983 0.224032C3.64595 0.197907 3.67695 0.177181 3.71107 0.163038C3.74519 0.148894 3.78177 0.14161 3.81871 0.141602C3.85564 0.141593 3.89222 0.14886 3.92635 0.162987C3.96048 0.177114 3.99149 0.197825 4.01762 0.223938C4.04374 0.25005 4.06447 0.281053 4.07861 0.315175C4.09275 0.349298 4.10004 0.385872 4.10005 0.422809C4.10005 0.459746 4.09279 0.496324 4.07866 0.530453C4.06453 0.564582 4.04382 0.595594 4.01771 0.621719L0.749772 3.88966L4.01771 7.15759C4.05707 7.19693 4.08388 7.24705 4.09474 7.30162C4.1056 7.3562 4.10003 7.41277 4.07873 7.46418C4.05744 7.51558 4.02137 7.55952 3.97509 7.59042C3.92882 7.62132 3.87442 7.6378 3.81877 7.63778Z"
                fill="#111111" />
        </svg>
        <svg viewBox="0 0 5 8" width="100" height="100" class="swiper-button-next">
            <path
                d="M 1.18123,7.63778 C 1.21817,7.63779 1.25475,7.63053 1.28888,7.61641 1.32302,7.60229 1.35404,7.58158 1.38017,7.55547 L 4.84685,4.08859 C 4.89958,4.03585 4.9292,3.96433 4.9292,3.88975 4.9292,3.81517 4.89958,3.74365 4.84685,3.69091 L 1.38017,0.224032 C 1.35405,0.197907 1.32305,0.177181 1.28893,0.163038 1.25481,0.148894 1.21823,0.14161 1.18129,0.141602 1.14436,0.141593 1.10778,0.14886 1.07365,0.162987 1.03952,0.177114 1.00851,0.197825 0.982384,0.223938 0.956259,0.25005 0.935534,0.281053 0.92139,0.315175 0.907247,0.349298 0.899962,0.385872 0.899954,0.422809 0.899945,0.459746 0.907212,0.496324 0.92134,0.530453 0.935467,0.564582 0.956178,0.595594 0.982291,0.621719 L 4.25023,3.88966 0.982291,7.15759 C 0.942931,7.19693 0.916124,7.24705 0.905262,7.30162 0.894399,7.3562 0.899969,7.41277 0.921266,7.46418 0.942564,7.51558 0.978632,7.55952 1.02491,7.59042 1.07118,7.62132 1.12558,7.6378 1.18123,7.63778 Z"
                fill="black" />
        </svg>

    </div>

    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js';

        const swiperRooms = new Swiper('.rooms-swiper', {
            loop: true,

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });
    </script>
</section>

<section class="intro">
    <div class="first-div">
        <p class="title-up text--color-gold">INTRO VIDEO</p>
        <p class="title-2 text--color-white">Meet With Our Luxury Place.</p>
        <p class="paragraph-1 text--color-grey-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.
        </p>
        <button class="button button--variant-gold hidden--mobile">BOOK NOW</button>
    </div>
    <div class="video second-div">
        <video muted loop>
            <source src='./assets/video.mp4' type="video/mp4" />
        </video>
        <img class="play" src="/assets/icons/play.svg" />
        <script src="/js/video.js"></script>
    </div>
    <button class="button button--variant-gold hidden--desktop">BOOK NOW</button>
</section>

<section class="facilities">
    <p class="title-up text--color-grey-3 text--align-center">FACILITIES</p>
    <p class="title-2 text--align-center text--color-grey5">Core Features</p>

    <div class="swiper features-swiper no-margin hidden--desktop">
        <div class="swiper-wrapper">
            <div class="swiper-slide facilities-card">
                <img class="icon icon--variant-big" src="/assets/icons/rate.svg" />
                <p class="background-text text--color-grey-1">01</p>
                <p class="title-3">Have High Rating</p>
                <p class="paragraph-1 text--color-grey-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed
                    do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
            <div class="swiper-slide facilities-card">
                <img class="icon icon--variant-big" src="/assets/icons/clock.svg" />
                <p class="background-text text--color-grey-1">02</p>
                <p class="title-3">Quit Hours</p>
                <p class="paragraph-1 text--color-grey-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed
                    do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
            <div class="swiper-slide facilities-card">
                <img class="icon icon--variant-big" src="/assets/icons/location.svg" />
                <p class="background-text text--color-grey-1">03</p>
                <p class="title-3">Best Locations</p>
                <p class="paragraph-1 text--color-grey-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed
                    do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
            <div class="swiper-slide facilities-card">
                <img class="icon icon--variant-big" src="/assets/icons/clock-alt.svg" />
                <p class="background-text text--color-grey-1">04</p>
                <p class="title-3">Free Cancelation</p>
                <p class="paragraph-1 text--color-grey-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed
                    do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
            <div class="swiper-slide facilities-card">
                <img class="icon icon--variant-big" src="/assets/icons/credit-card.svg" />
                <p class="background-text text--color-grey-1">05</p>
                <p class="title-3">Payment Options</p>
                <p class="paragraph-1 text--color-grey-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed
                    do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
            <div class="swiper-slide facilities-card">
                <img class="icon icon--variant-big" src="/assets/icons/discount.svg" />
                <p class="background-text text--color-grey-1">06</p>
                <p class="title-3">Special Offers</p>
                <p class="paragraph-1 text--color-grey-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
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
                    <p class="background-text text--color-grey-1" src="/assets/icons/team-back.svg">01</p>
                    <p class="title-3 text--color-grey-5">Have High Rating</p>
                    <p class="paragraph-1 text--color-grey-5">Lorem ipsum dolor sit amet, consectetur
                        adipisicing
                        elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
                <div class="facilities-card">
                    <img class="icon icon--variant-big" src="/assets/icons/clock-alt.svg" />
                    <p class="background-text text--color-grey-1" src="/assets/icons/team-back.svg">04</p>
                    <p class="title-3 text--color-grey-5">Free Cancelation</p>
                    <p class="paragraph-1 text--color-grey-5">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
            <div class="column column--gap-1">
                <div class="facilities-card">
                    <img class="icon icon--variant-big" src="/assets/icons/clock.svg" />
                    <p class="background-text text--color-grey-1" src="/assets/icons/team-back.svg">02</p>
                    <p class="title-3 text--color-grey-5">Quit Hours</p>
                    <p class="paragraph-1 text--color-grey-5">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
                <div class="facilities-card">
                    <img class="icon icon--variant-big" src="/assets/icons/credit-card.svg" />
                    <p class="background-text text--color-grey-1" src="/assets/icons/team-back.svg">05</p>
                    <p class="title-3 text--color-grey-5">Payment Options</p>
                    <p class="paragraph-1 text--color-grey-5">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
            <div class="column column--gap-1">
                <div class="facilities-card">
                    <img class="icon icon--variant-big" src="/assets/icons/location.svg" />
                    <p class="background-text text--color-grey-1" src="/assets/icons/team-back.svg">03</p>
                    <p class="title-3 text--color-grey-5">Best Locations</p>
                    <p class="paragraph-1 text--color-grey-5">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
                <div class="facilities-card">
                    <img class="icon icon--variant-big" src="/assets/icons/discount.svg" />
                    <p class="background-text text--color-grey-1" src="/assets/icons/team-back.svg">06</p>
                    <p class="title-3 text--color-grey-5">Special Offers</p>
                    <p class="paragraph-1 text--color-grey-5">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="food">
    <p class="title-up text--color-grey-3">MENU</p>
    <p class="title-2">Our Foods Menu</p>
    <div class="swiper food-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide row">
                <div class="column">
                    <div class="entry">
                        <div class="img">
                            <img src="/assets/img/eggs.jpg" />
                        </div>
                        <div class="data">
                            <p class="title-4">Eggs & Bacon</p>
                            <p class="text text--paragraph-1">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor. </p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="img">
                            <img src="/assets/img/tea.jpg" />
                        </div>
                        <div class="data">
                            <p class="title-4">Tea or Coffee</p>
                            <p class="text text--paragraph-1">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor. </p>
                        </div>
                    </div>
                    <div class="entry entry--margin-bottom">
                        <div class="img">
                            <img src="/assets/img/chia.jpg" />
                        </div>
                        <div class="data">
                            <p class="title-4">Chia Oatmeal</p>
                            <p class="text text--paragraph-1">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor. </p>
                        </div>
                    </div>
                </div>
                <div class="column hidden--mobile">
                    <div class="entry">
                        <div class="img">
                            <img src="/assets/img/eggs.jpg" />
                        </div>
                        <div class="data">
                            <p class="title-4">Bacon & Eggs</p>
                            <p class="text text--paragraph-1">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor. </p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="img">
                            <img src="/assets/img/tea.jpg" />
                        </div>
                        <div class="data">
                            <p class="title-4">Coffee or Tea</p>
                            <p class="text text--paragraph-1">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor. </p>
                        </div>
                    </div>
                    <div class="entry entry--margin-bottom">
                        <div class="img">
                            <img src="/assets/img/chia.jpg" />
                        </div>
                        <div class="data">
                            <p class="title-4">Oatmeal Chia</p>
                            <p class="text text--paragraph-1">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide row">
                <div class="column">
                    <div class="entry">
                        <div class="img">
                            <img src="/assets/img/eggs.jpg" />
                        </div>
                        <div class="data">
                            <p class="title-4">Eggs & Bacon</p>
                            <p class="text text--paragraph-1">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor. </p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="img">
                            <img src="/assets/img/tea.jpg" />
                        </div>
                        <div class="data">
                            <p class="title-4">Tea or Coffee</p>
                            <p class="text text--paragraph-1">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor. </p>
                        </div>
                    </div>
                    <div class="entry entry--margin-bottom">
                        <div class="img">
                            <img src="/assets/img/chia.jpg" />
                        </div>
                        <div class="data">
                            <p class="title-4">Chia Oatmeal</p>
                            <p class="text text--paragraph-1">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor. </p>
                        </div>
                    </div>
                </div>
                <div class="column hidden--mobile">
                    <div class="entry">
                        <div class="img">
                            <img src="/assets/img/eggs.jpg" />
                        </div>
                        <div class="data">
                            <p class="title-4">Bacon & Eggs</p>
                            <p class="text text--paragraph-1">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor. </p>
                        </div>
                    </div>
                    <div class="entry">
                        <div class="img">
                            <img src="/assets/img/tea.jpg" />
                        </div>
                        <div class="data">
                            <p class="title-4">Coffee or Tea</p>
                            <p class="text text--paragraph-1">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor. </p>
                        </div>
                    </div>
                    <div class="entry entry--margin-bottom">
                        <div class="img">
                            <img src="/assets/img/chia.jpg" />
                        </div>
                        <div class="data">
                            <p class="title-4">Oatmeal Chia</p>
                            <p class="text text--paragraph-1">Lorem ipsum dolor sit amet, consectetur adip
                                isicing elit, sed do eiusmod tempor. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <svg viewBox="0 0 5 8" width="100" height="100" class="swiper-button-prev-alt">
            <path
                d="M3.81877 7.63778C3.78183 7.6378 3.74525 7.63054 3.71112 7.61641C3.67698 7.60229 3.64596 7.58158 3.61983 7.55547L0.153147 4.08859C0.100421 4.03585 0.0708008 3.96433 0.0708008 3.88975C0.0708008 3.81517 0.100421 3.74365 0.153147 3.69091L3.61983 0.224032C3.64595 0.197907 3.67695 0.177181 3.71107 0.163038C3.74519 0.148894 3.78177 0.14161 3.81871 0.141602C3.85564 0.141593 3.89222 0.14886 3.92635 0.162987C3.96048 0.177114 3.99149 0.197825 4.01762 0.223938C4.04374 0.25005 4.06447 0.281053 4.07861 0.315175C4.09275 0.349298 4.10004 0.385872 4.10005 0.422809C4.10005 0.459746 4.09279 0.496324 4.07866 0.530453C4.06453 0.564582 4.04382 0.595594 4.01771 0.621719L0.749772 3.88966L4.01771 7.15759C4.05707 7.19693 4.08388 7.24705 4.09474 7.30162C4.1056 7.3562 4.10003 7.41277 4.07873 7.46418C4.05744 7.51558 4.02137 7.55952 3.97509 7.59042C3.92882 7.62132 3.87442 7.6378 3.81877 7.63778Z"
                fill="#111111" />
        </svg>
        <svg viewBox="0 0 5 8" width="100" height="100" class="swiper-button-next-alt">
            <path
                d="M 1.18123,7.63778 C 1.21817,7.63779 1.25475,7.63053 1.28888,7.61641 1.32302,7.60229 1.35404,7.58158 1.38017,7.55547 L 4.84685,4.08859 C 4.89958,4.03585 4.9292,3.96433 4.9292,3.88975 4.9292,3.81517 4.89958,3.74365 4.84685,3.69091 L 1.38017,0.224032 C 1.35405,0.197907 1.32305,0.177181 1.28893,0.163038 1.25481,0.148894 1.21823,0.14161 1.18129,0.141602 1.14436,0.141593 1.10778,0.14886 1.07365,0.162987 1.03952,0.177114 1.00851,0.197825 0.982384,0.223938 0.956259,0.25005 0.935534,0.281053 0.92139,0.315175 0.907247,0.349298 0.899962,0.385872 0.899954,0.422809 0.899945,0.459746 0.907212,0.496324 0.92134,0.530453 0.935467,0.564582 0.956178,0.595594 0.982291,0.621719 L 4.25023,3.88966 0.982291,7.15759 C 0.942931,7.19693 0.916124,7.24705 0.905262,7.30162 0.894399,7.3562 0.899969,7.41277 0.921266,7.46418 0.942564,7.51558 0.978632,7.55952 1.02491,7.59042 1.07118,7.62132 1.12558,7.6378 1.18123,7.63778 Z"
                fill="black" />
        </svg>

    </div>

    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js';

        const swiperFood = new Swiper('.food-swiper', {
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },

            navigation: {
                nextEl: '.swiper-button-next-alt',
                prevEl: '.swiper-button-prev-alt'
            }
        });
    </script>
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

<section class="achievements">
    <div class="center-col">
        <img src="/assets/icons/rocket.svg" />
        <p class="title-5 text--align-center text--color-white">84k<span>+</span></p>
        <p class="paragraph-2 text--align-center text--color-grey-3">Projects are Completed</p>
    </div>
    <div class="center-col">
        <img src="/assets/icons/team-alt.svg" />
        <p class="title-5 text--align-center text--color-white">10M<span>+</span></p>
        <p class="paragraph-2 text--align-center text--color-grey-3">Projects are Completed</p>
    </div>
    <div class="center-col">
        <img src="/assets/icons/earn.svg" />
        <p class="title-5 text--align-center text--color-white">02k<span>+</span></p>
        <p class="paragraph-2 text--align-center text--color-grey-3">Projects are Completed</p>
    </div>
    <div class="center-col">
        <img src="/assets/icons/book.svg" />
        <p class="title-5 text--align-center text--color-white">100M<span>+</span></p>
        <p class="paragraph-2 text--align-center text--color-grey-3">Projects are Completed</p>
    </div>
</section>
@endsection