@extends('layout.layout')

@section('title', 'Contact')

@section('content')
    <section class="home">
        <p class="title-up text--color-white">THE ULTIMATE LUXURY EXPERIENCE</p>
        <p class="title-1">New Details</p>
        <div class="path">
            <a class="paragraph-2 link text--color-grey-5" href="/index">Home</a>
            <p class="paragraph-2 link"> | </p>
            <p class="paragraph-2 text--color-grey-5">Contact</p>
        </div>
    </section>
    <section class="info no-bottom">
            <div class="entry entry--margin-bottom">
                <div class="">
                    <img class="icon icon--variant-medium" src="/assets/icons/phone.svg" />
                </div>
                <div class="data">
                    <p class="title-4">Phone Number</p>
                    <p class="paragraph-1 text--color-grey-3">+34 644 255 923</p>
                    <p class="background-text text--color-grey-1">01</p>
                </div>
            </div>
            <div class="entry entry--margin-bottom">
                <div class="">
                    <img class="icon icon--variant-medium" src="/assets/icons/mail.svg" />
                </div>
                <div class="data">
                    <p class="title-4">Email</p>
                    <p class="paragraph-1 text--color-grey-3">szymonekokot@gmail.com</p>
                    <p class="background-text text--color-grey-1">02</p>
                </div>
            </div>
            <div class="entry entry--margin-bottom">
                <div class="">
                    <img class="icon icon--variant-medium" src="/assets/icons/location-alt.svg" />
                </div>
                <div class="data">
                    <p class="title-4">Hotel Address</p>
                    <p class="paragraph-1 text--color-grey-3">OXYGEN Workspace | Calle Princesa
                        31,
                        planta 2 28008 Madrid</p>
                        <p class="background-text text--color-grey-1">03</p>
                </div>
            </div>
    </section>

    <section class="map">
        <img src="/assets/empty.png" />
    </section>

    <section class="contact-form">
        @if ($post)
        <div class="content">
            <p class="price-2 text--align-center text--color-grey-5">¡Thank you for your message!</p>
            <p class="paragraph-1 text--align-center text--margin-top text--color-grey-5">
                We have received it correctly. We will look into it very soon.
            </p>
            <p class="paragraph-1 text--align-center text--color-grey-5">
                The Miranda Hotel
            </p>
        </div>
        @else
        <form id="contact-form" class="form form--margin-top" action="contact" method="POST">
            <div class="form-pair">
                <label id="name-label" for="name">
                    <input type="text" id="name" name="name" placeholder="Your full name" required />
                </label>
                <label id="phone-label" for="phone">
                    <input type="text" id="phone" name="phone" placeholder="Add phone number" required />
                </label>
            </div>
            <div class="form-pair">
                <label id="email-label" for="email">
                    <input type="email" id="email" name="email" placeholder="Enter email address" required />
                </label>
                <label id="subject-label" for="phone">
                    <input type="text" id="subject" name="subject" placeholder="Enter subject" required />
                </label>
            </div>
            <label id="msg-label" for="msg">
                <textarea id="msg" name="msg" rows="5" placeholder="Enter message" required></textarea>
            </label>
            <button type="submit" class="button button--variant-gold">SEND</button>
        </form>
        @endif
    </section>
@endsection