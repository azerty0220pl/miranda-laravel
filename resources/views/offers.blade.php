@extends('layout.layout')

@section('title', 'Offers')

@section('content')
    <section class="home">
        <p class="title-up text--color-white">THE ULTIMATE LUXURY EXPERIENCE</p>
        <p class="title-1">Our Offers</p>
        <div class="path">
            <a class="paragraph-2 link text--color-grey-5" href="/index">Home</a>
            <p class="paragraph-2 link"> | </p>
            <p class="paragraph-2 text--color-grey-5">Offers</p>
        </div>
    </section>
    <section class="offer">     
        @foreach ($rooms as $row )
            <div class="offer_room">
                <div class="img">
                    <img src="./assets/img/rooms.jpg" />
                </div>
                <div class="offer_content">
                    <div class="prices">
                        <p class="text--align-end">
                            <span
                                class="price-2 text--color-gold text--align-end price-wrong">{{ $row["price"] / 100 }}</span>
                            <span class="paragraph-2 text--color-gold price-wrong">/Night</span>
                        </p>
                        <p class="price-1 text--color-red text--align-end">
                            ${{ price($row["price"], $row["offer"]) }}
                            <span class="paragraph-2 text--color-red">/Night</span>
                        </p>
                    </div>
                    <div class="titles">
                        @if ($row["room_type"] == 0)
                            <p class="title-up text--color-grey-3">SINGLE BED</p>
                        @elseif ($row["room_type"] == 1)
                            <p class="title-up text--color-grey-3">DOUBLE BED</p>
                        @elseif ($row["room_type"] == 2)
                            <p class="title-up text--color-grey-3">SUPERIOR DOUBLE</p>
                        @elseif ($row["room_type"] == 3)
                            <p class="title-up text--color-grey-3">SUITE</p>
                        @endif
                        <p class="title-2 text--color-grey-5">Room {{ $row["room_name"] }}</p>
                    </div>
                    <div class="offer_content_body">
                        <p class="paragraph-1 text--color-grey-3">
                            {{ $row["des"] }}
                        </p>
                        <div class="row">
                            <div class="column">
                                <div class="entry entry--padding-small">
                                    <img src="./assets/icons/air-conditioner.svg" alt="" />
                                    <div class="data">
                                        <p class="paragraph-1 text--color-grey-3">Air Conditioner</p>
                                    </div>
                                </div>
                                <div class="entry entry--padding-small">
                                    <img src="./assets/icons/plate.svg" alt="" />
                                    <div class="data">
                                        <p class="paragraph-1 text--color-grey-3">Breakfast</p>
                                    </div>
                                </div>
                                <div class="entry entry--padding-small">
                                    <img src="./assets/icons/clean.svg" alt="" />
                                    <div class="data">
                                        <p class="tparagraph-1 text--color-grey-3">Cleaning</p>
                                    </div>
                                </div>
                                <div class="entry entry--padding-small">
                                    <img src="./assets/icons/buy.svg" alt="" />
                                    <div class="data">
                                        <p class="paragraph-1 text--color-grey-3">Grocery</p>
                                    </div>
                                </div>
                                <div class="entry entry--padding-small">
                                    <img src="./assets/icons/shop.svg" alt="" />
                                    <div class="data">
                                        <p class="paragraph-1 text--color-grey-3">Shop Near</p>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="entry entry--padding-small">
                                    <img src="./assets/icons/wifi-alt.svg" alt="" />
                                    <div class="data">
                                        <p class="paragraph-1 text--color-grey-3">High Speed WiFi</p>
                                    </div>
                                </div>
                                <div class="entry entry--padding-small">
                                    <img src="./assets/icons/kitchen.svg" alt="" />
                                    <div class="data">
                                        <p class="paragraph-1 text--color-grey-3">Kitchen</p>
                                    </div>
                                </div>
                                <div class="entry entry--padding-small">
                                    <img src="./assets/icons/bath.svg" alt="" />
                                    <div class="data">
                                        <p class="paragraph-1 text--color-grey-3">Shower</p>
                                    </div>
                                </div>
                                <div class="entry entry--padding-small">
                                    <img src="./assets/icons/bed-alt.svg" alt="" />
                                    <div class="data">
                                        <p class="paragraph-1 text--color-grey-3">Single Bed</p>
                                    </div>
                                </div>
                                <div class="entry entry--padding-small">
                                    <img src="./assets/icons/towel.svg" alt="" />
                                    <div class="data">
                                        <p class="paragraph-1 text--color-grey-3">Towels</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="/rooms/{{ $row['id'] }}" class="button button--variant-gold link">BOOK NOW</a>
                </div>
            </div>
        @endforeach
        <div class="even-row">
            @if ($page == 0)
                <a>
            @else 
                <a href="/offers?page={{ $page - 1 }}">
            @endif
                <svg viewBox="0 0 8 10" width="100" height="100" class="navigation_button">
                    <path
                        d="M1.22794 5.00034L4.32594 1.85784C4.52144 1.66084 4.52144 1.34084 4.32594 1.14384C4.13044 0.946844 3.81394 0.946844 3.61894 1.14384L0.169443 4.64334C-0.0180574 4.83284 -0.0190574 5.16734 0.169443 5.35784L3.61944 8.85734C3.81444 9.05434 4.13144 9.05434 4.32644 8.85734C4.52194 8.66034 4.52194 8.34034 4.32644 8.14334L1.22794 5.00034Z"
                        fill="#000" />
                    <path
                        d="M4.72794 5.00034L7.82594 1.85784C8.02144 1.66084 8.02144 1.34084 7.82594 1.14384C7.63044 0.946844 7.31394 0.946844 7.11894 1.14384L3.66944 4.64334C3.48194 4.83284 3.48094 5.16734 3.66944 5.35784L7.11894 8.85734C7.31444 9.05434 7.63094 9.05434 7.82594 8.85734C8.02144 8.66034 8.02144 8.34034 7.82594 8.14334L4.72794 5.00034Z"
                        fill="#000" />
                </svg>
            </a>
            @for ($i = 1; $i <= $pages; $i++) 
                @if ($i - 1 != $page)
                    <a href="/offers?page={{ $i - 1 }}" class="pagination-text">{{ $i }}</a>
                @else 
                    <a href="/offers?page={{ $i - 1 }}" class="pagination-selected">{{ $i }}</a>
                @endif
            @endfor
            @if ($page == $pages - 1)
                <a>
            @else 
                <a href="/offers?page={{ $page + 1 }}">
            @endif
                <svg viewBox="0 0 8 10" width="100" height="100" class="navigation_button">
                    <path
                        d="M6.77206 5.00034L3.67406 1.85784C3.47856 1.66084 3.47856 1.34084 3.67406 1.14384C3.86956 0.946844 4.18606 0.946844 4.38106 1.14384L7.83056 4.64334C8.01806 4.83284 8.01906 5.16734 7.83056 5.35784L4.38056 8.85734C4.18556 9.05434 3.86856 9.05434 3.67356 8.85734C3.47806 8.66034 3.47806 8.34034 3.67356 8.14334L6.77206 5.00034Z"
                        fill="#000" />
                    <path
                        d="M3.27206 5.00034L0.174057 1.85784C-0.0214424 1.66084 -0.0214424 1.34084 0.174057 1.14384C0.369557 0.946844 0.686057 0.946844 0.881057 1.14384L4.33056 4.64334C4.51806 4.83284 4.51906 5.16734 4.33056 5.35784L0.881057 8.85734C0.685557 9.05434 0.369058 9.05434 0.174057 8.85734C-0.0214424 8.66034 -0.0214424 8.34034 0.174057 8.14334L3.27206 5.00034Z"
                        fill="#000" />
                </svg>
            </a>
        </div>
    </section>
    
@endsection