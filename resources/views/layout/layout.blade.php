<!DOCTYPE html>

<html>
    <head lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <link rel="stylesheet" href="/css/styles.css" />
        <link rel="icon" href="/assets/icons/logo.svg" />
        <title>Miranda @yield('title')</title>
    </head>
    <body>
        <header>
            <div class="header">
                <div class="left-div">
                    <button class="button toggler hidden--desktop">
                        <img class="icon" src="/assets/icons/bars.svg" />
                    </button>
                    <a class="logo logo--size-small" href="/index">
                        <img src="/assets/icons/logo.svg" />
                        <div>
                            <p>HOTEL</p>
                            <p>MIRANDA</p>
                        </div>
                    </a>
                </div>
                <div class="hidden--mobile menu-alt">
                    <a class="link paragraph-2 text--color-grey-5" href="/about">About Us</a>
                    <a class="link paragraph-2 text--color-grey-5" href="/rooms">Rooms</a>
                    <a class="link paragraph-2 text--color-grey-5" href="/offers">Offers</a>
                    <a class="link paragraph-2 text--color-grey-5" href="/contact">Contact</a>
                </div>
                <div>
                    <button class="button">
                        <img class="icon" src="/assets/icons/user.svg" />
                    </button>
                    <button class="button">
                        <img class="icon" src="/assets/icons/search.svg" />
                    </button>
                </div>
            </div>
            <div class="menu hidden">
                <a class="link paragraph-2 text--color-grey-5" href="/about">About Us</a>
                <a class="link paragraph-2 text--color-grey-5" href="/rooms">Rooms</a>
                <a class="link paragraph-2 text--color-grey-5" href="/offers">Offers</a>
                <a class="link paragraph-2 text--color-grey-5" href="/contact">Contact</a>
            </div>
            <script src="/js/menu-toggler.js"></script>
        </header>

        @yield('content')

        <footer class="no-bottom">
            <div class="main-footer">
                <div class="footer-section">
                    <div class="logo logo--size-big">
                        <img src="/assets/icons/logo-alt.svg" />
                        <div>
                            <p>HOTEL</p>
                            <p>MIRANDA</p>
                        </div>
                    </div>
                    <p class="paragraph-1 text--color-grey-3">Lorem ipsum dolor sit amet, consect etur adipisicing
                        elit,
                        sed
                        doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud
                        exercitat ion ullamco laboris nisi.</p>
                    <div>
                        <a href="https://www.facebook.com/CubeClimb/" target="_blank"><img
                                class="icon icon--background-grey" src="/assets/icons/facebook.svg" /></a>
                        <a href="https://twitter.com/home" target="_blank"><img class="icon icon--background-gold"
                                src="/assets/icons/twitter.svg" /></a>
                        <a href="https://www.behance.net/ 12416256" target="_blank"><img class="icon icon--background-grey"
                                src="/assets/icons/behance.svg" /></a>
                        <a href="https://www.linkedin.com/in/szymon-kokot-b3143b26a/" target="_blank"><img
                                class="icon icon--background-grey" src="/assets/icons/linkedin.svg" /></a>
                        <a href="https://www.youtube.com/watch?v=6pN-lkzEmEk&ab_channel=MikeOldfield-Topic"
                            target="_blank"><img class="icon icon--background-grey" src="/assets/icons/youtube.svg" /></a>
                    </div>
                </div>
                <div class="footer-section">
                    <p class="title-4 text--color-grey-5">Services.</p>
                    <div class="row">
                        <div class="column">
                            <p class="paragraph-1 text--color-grey-3">+ Resturent & Bar</p>
                            <p class="paragraph-1 text--color-grey-3">+ Swimming Pool</p>
                            <p class="paragraph-1 text--color-grey-3">+ Wellness & Spa</p>
                            <p class="paragraph-1 text--color-grey-3">+ Restaurant</p>
                            <p class="paragraph-1 text--color-grey-3">+ Conference Room</p>
                            <p class="paragraph-1 text--color-grey-3">+ Coctail Party House</p>
                        </div>
                        <div class="column">
                            <p class="paragraph-1 text--color-grey-3">+ Gaming Zone</p>
                            <p class="paragraph-1 text--color-grey-3">+ Marriage Party</p>
                            <p class="paragraph-1 text--color-grey-3">+ Party Planning</p>
                            <p class="paragraph-1 text--color-grey-3">+ Tour Consultancy</p>
                        </div>
                    </div>
                </div>
                <div class="footer-section">
                    <p class="title-4">Contact Us</p>
                    <div>
                        <div class="swiper-slide card card--wide">
                            <div class="content content--height-full">
                                <div class="entry">
                                    <div class="">
                                        <img class="icon icon--variant-medium" src="/assets/icons/phone.svg" />
                                    </div>
                                    <div class="data">
                                        <p class="title-4 text--color-grey-5">Phone Number</p>
                                        <p class="paragraph-1 text--color-grey-3">+34 644 255 923</p>
                                    </div>
                                </div>
                                <div class="entry">
                                    <div class="">
                                        <img class="icon icon--variant-medium" icon--variant-medium
                                            src="/assets/icons/mail.svg" />
                                    </div>
                                    <div class="data">
                                        <p class="title-4 text--color-grey-5">Email</p>
                                        <p class="paragraph-1 text--color-grey-3">szymonekokot@gmail.com</p>
                                    </div>
                                </div>
                                <div class="entry">
                                    <div class="">
                                        <img class="icon icon--variant-medium" src="/assets/icons/location-alt.svg" />
                                    </div>
                                    <div class="data">
                                        <p class="title-4 text--color-grey-5">Hotel Address</p>
                                        <p class="paragraph-1 text--color-grey-3">OXYGEN Workspace | Calle Princesa
                                            31,
                                            planta 2 28008 Madrid</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="foots-footer">
            <p class="paragraph-2 text--color-grey-5">Copyright By@Example - 2020</p>
            <p class="paragraph-2 text--color-grey-5">Terms of use | Privacy Environmental Policy</p>
        </div>
    </body>
</html>