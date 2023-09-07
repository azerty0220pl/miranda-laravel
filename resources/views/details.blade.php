@extends('layout.layout')

@section('title', 'Details')

@section('content')
    <section class="home">
        <p class="title-up text--color-white">THE ULTIMATE LUXURY EXPERIENCE</p>
        <p class="title-1">Ultimate Room</p>
        <div class="path">
            <a class="paragraph-2 link text--color-grey-5" href="/index">Home</a>
            <p class="paragraph-2 link"> | </p>
            <p class="paragraph-2 text--color-grey-5">Room {{ $room["room_name"] }}</p>
        </div>
    </section>
    <section class="main no-bottom">
        <div class="details-header">
            <div class="details-titles">
                @if($room['room_type'] == 0)
                    <p class="title-up text--color-grey-3">SINGLE BED</p>
                @elseif($room['room_type'] == 1)
                    <p class="title-up text--color-grey-3">DOUBLE BED</p>
                @elseif($room['room_type'] == 2)
                    <p class="title-up text--color-grey-3">DOUBLE SUPERIOR</p>
                @elseif($room['room_type'] == 3)
                    <p class="title-up text--color-grey-3">SUITE</p>
                @endif
                <p class="title-2 text--color-grey-5">Room {{ $room["room_name"] }}</p>
            </div>
            <p class="price-1 text--color-gold">${{ price($room["price"], $room["offer"]) }}<span>/Night</span></p>
        </div>
        <div class="image">
            <img src="/assets/img/rooms.jpg" />
        </div>
        @if($post)
        <div class="form">
            <p class="price-2 text--align-center text--color-grey-5">¡Thank you for your request!</p>
            <p class="paragraph-1 text--margin-top text--color-grey-5">
                We have received it correctly. Someone from our Team will get back to you very soon.
            </p>
            <p class="paragraph-1 text--color-grey-5">
                The Miranda Hotel
            </p>
        </div>
        @else
        <div class="form">
            @csrf
            <p class="price-2 text--align-center">Check Availability</p>
            <form action="/details/{{ $room['id'] }}" method="POST" class="form form--margin-top">
                <label id="from-label" for="from">
                    <p class="paragraph-2 text--color-grey-5">Check In</p>
                    <input type="date" id="from" name="from" required />
                </label>
                <label id="to-label" for="to">
                    <p class="paragraph-2 text--color-grey-5">Check Out</p>
                    <input type="date" id="to" name="to" required />
                </label>
                <label id="name-label" for="name">
                    <p class="paragraph-2 text--color-grey-5">Full Name</p>
                    <input type="text" id="name" name="name" required />
                </label>
                <label id="email-label" for="email">
                    <p class="paragraph-2 text--color-grey-5">Email</p>
                    <input type="email" id="email" name="email" required />
                </label>
                <label id="phone-label" for="phone">
                    <p class="paragraph-2 text--color-grey-5">Phone</p>
                    <input type="text" id="phone" name="phone" required />
                </label>
                <label id="msg-label" for="request">
                    <p class="paragraph-2 text--color-grey-5">Message (Special Request)</p>
                    <textarea id="request" rows="5" name="request" required></textarea>
                </label>
                <button type="submit" class="button button--variant-gold">CHECK AVAILABILITY</button>
            </form>
        </div>
        @endif
    </section>

    <section class="no-bottom">
        <p class="text--color-grey-3 paragraph-1">
            {{ $room["des"] }}
        </p>
    </section>

    <section class="no-bottom">
        <p class="title-2 text--color-grey-5">Amenities</p>
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="column">
                        <div class="entry entry--padding-small">
                            <img src="/assets/icons/air-conditioner.svg" alt="" />
                            <div class="data">
                                <p class="paragraph-1 text--color-grey-3">Air Conditioner</p>
                            </div>
                        </div>
                        <div class="entry entry--padding-small">
                            <img src="/assets/icons/plate.svg" alt="" />
                            <div class="data">
                                <p class="paragraph-1 text--color-grey-3">Breakfast</p>
                            </div>
                        </div>
                        <div class="entry entry--padding-small">
                            <img src="/assets/icons/clean.svg" alt="" />
                            <div class="data">
                                <p class="paragraph-1 text--color-grey-3">Cleaning</p>
                            </div>
                        </div>
                        <div class="entry entry--padding-small">
                            <img src="/assets/icons/buy.svg" alt="" />
                            <div class="data">
                                <p class="paragraph-1 text--color-grey-3">Grocery</p>
                            </div>
                        </div>
                        <div class="entry entry--padding-small">
                            <img src="/assets/icons/shop.svg" alt="" />
                            <div class="data">
                                <p class="paragraph-1 text--color-grey-3">Shop Near</p>
                            </div>
                        </div>
                        <div class="entry entry--padding-small">
                            <img src="/assets/icons/teamspeak.svg" alt="" />
                            <div class="data">
                                <p class="paragraph-1 text--color-grey-3">24/7 Online Support</p>
                            </div>
                        </div>
                        <div class="entry entry--padding-small">
                            <img src="/assets/icons/security.svg" alt="" />
                            <div class="data">
                                <p class="paragraph-1 text--color-grey-3">Smart Security</p>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="entry entry--padding-small">
                            <img src="/assets/icons/wifi-alt.svg" alt="" />
                            <div class="data">
                                <p class="paragraph-1 text--color-grey-3">High Speed WiFi</p>
                            </div>
                        </div>
                        <div class="entry entry--padding-small">
                            <img src="/assets/icons/kitchen.svg" alt="" />
                            <div class="data">
                                <p class="paragraph-1 text--color-grey-3">Kitchen</p>
                            </div>
                        </div>
                        <div class="entry entry--padding-small">
                            <img src="/assets/icons/bath.svg" alt="" />
                            <div class="data">
                                <p class="paragraph-1 text--color-grey-3">Shower</p>
                            </div>
                        </div>
                        <div class="entry entry--padding-small">
                            <img src="/assets/icons/bed-alt.svg" alt="" />
                            <div class="data">
                                <p class="paragraph-1 text--color-grey-3">Single Bed</p>
                            </div>
                        </div>
                        <div class="entry entry--padding-small">
                            <img src="/assets/icons/towel.svg" alt="" />
                            <div class="data">
                                <p class="paragraph-1 text--color-grey-3">Towels</p>
                            </div>
                        </div>
                        <div class="entry entry--padding-small">
                            <img src="/assets/icons/key.svg" alt="" />
                            <div class="data">
                                <p class="paragraph-1 text--color-grey-3">Strong Locker</p>
                            </div>
                        </div>
                        <div class="entry entry--padding-small">
                            <img src="/assets/icons/expert.svg" alt="" />
                            <div class="data">
                                <p class="paragraph-1 text--color-grey-3">Expert Team</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-bottom">
        <div class="rosalina card card--direction-column card--gap-2">
            <div class="image">
                <img src="/assets/empty.png" />
                <img class="tick" src="/assets/icons/tick.svg" />
            </div>
            <div class="card card--direction-column card--gap-2">
                <p class="title-3 text--align-center text--color-grey-5">Rosalina D. Williams</p>
                <p class="title-up text--align-center text--color-gold">FOUNDER, QUX CO.</p>
                <p class="paragraph-1 text--color-grey-3 text--align-center">Lorem ipsum dolor sit amet,
                    consectetur adipisicing
                    elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
        </div>
    </section>

    <section class="no-bottom">
        <p class="title-3">Cancellation</p>
        <p class="paragraph-1 text--color-grey-3 text--margin-top">{{ $room['cancel']}}</p>
    </section>

    <section>
        <p class="title-3 text--color-grey-5">Related Rooms</p>
        <div class="swiper rooms-swiper">
        <div class="swiper-wrapper">
                @foreach($rooms as $row)
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
@endsection