<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Murodbek Mebel</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="icon" href="{{ asset('assets/img/Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/line-awesome.min.css') }}">
</head>
<body id="body">

    <!-- Modal -->
    <div class="all-modal" id="modal" style="display: none;">
        <div class="modal">
            <div class="container">
                <div class="main-modal">
                    <button id="close">×</button>
                    <h2>{{ __('Free design') }}</h2>
                    <p>{{ __('You can order a free design, fill out this form and our specialist will call you back as soon as possible') }}</p>
                    <form action="{{ route('free_design', app()->getLocale()) }}" method="POST">
                    @csrf
                        <input type="hidden" name="type" value="1">
                        <div class="input-phone">
                            <i class="las la-user-circle"></i>
                            <input type="text" id="name" name="name" placeholder="{{ __('Enter your name') }}">
                        </div>
                        @error('name')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        <div class="input-phone">
                            <i class="las la-phone-volume"></i>
                            <input type="text" id="phone_number" name="phone_number" placeholder="{{ __('Your phone number') }}">
                        </div>
                        @error('phone_number')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        <button>{{ __('Send') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- Modal-Send -->
    <div class="all-modal-send" id="modal-send" style="display: none;">
        <div class="modal-send">
            <div class="container">
                <div class="main-modal-send">
                    <h2>{{ __('Your application has been sent') }}!</h2>
                    <button id="close-send">Ok</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal-Send -->

    @include('includes.success_messages')

    <!-- Header -->
    <header>
        <div class="container">
            <div class="navbar d-flex">
                <div class="logo">
                    <img src="assets/img/logo.svg" alt="">
                    <p>{{ __('Manufacture of furniture to order in a wide range') }}</p>
                </div>
                <div class="address">
                    <i class="las la-map-marker-alt"></i>
                    <p>{{ __('City of Gurlen, settlement') }} <br> {{ __('Pahlavan Mahmud 14a') }}</p>
                </div>
                <div class="shop">
                    <i class="las la-shopping-cart"></i>
                    <p>{{ __('Buy finished furniture') }} <br><a href="tel: +998 99 717-84-88">+998 99 <b>717-84-88</b></a></p>
                </div>
                <div class="phone">
                    <i class="las la-phone-volume"></i>
                    <p>{{ __('Call us') }} <br><a href="tel: +998 62 226-97-00">+998 62 <b>226-97-00</b></a></p>
                </div>
                <div class="lang">
                    <a href="{{ route(Route::currentRouteName(), 'uz') }}">UZ</a><b>|</b>
                    <a href="{{ route(Route::currentRouteName(), 'ru') }}">RU</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Header -->

    <!-- Section-block -->
    <section class="block">
        <div class="container">
            <div class="all">
                <div class="text-block">
                    <h1>{{ __('WE MANUFACTURE FURNITURE') }} <br> {{ __('TO ORDER') }}</h1>
                    <p>{{ __('by individual design') }}</p>
                    <div class="text-garant">
                        <div class="garant">
                            <div class="g-img">
                                <img src="assets/img/shield.svg" alt="">
                            </div>
                            <p>{{ __('Guarantee') }} <br> {{ __('for 1 year') }}</p>
                        </div>
                        <div class="garant">
                            <div class="g-img">
                                <img src="assets/img/3d.svg" alt="">
                            </div>
                            <p>{{ __('Free 3D') }} <br> {{ __('design project') }}</p>
                        </div>
                        <div class="garant">
                            <div class="g-img">
                                <img src="assets/img/box.svg" alt="">
                            </div>
                            <p>{{ __('Free shipping') }} <br> {{ __('and installation') }}</p>
                        </div>
                        <div class="garant">
                            <div class="g-img">
                                <img src="assets/img/quality.svg" alt="">
                            </div>
                            <p>{{ __('High') }} <br> {{ __('quality') }}</p>
                        </div>
                    </div>
                    <div class="btn-1">
                        <button id="open">{{ __('Request a free design') }}</button>
                    </div>
                </div>
                <div class="img-block">
                    <img src="assets/img/head-img.webp" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Section-block -->

    <!-- Section-statistic -->
    <section class="statistic">
        <div class="container">
            <div class="statistic-all d-flex">
                <div class="box">
                    <h1>1 000 +</h1>
                    <p>{{ __('Models in assortment') }}</p>
                </div>
                <div class="box">
                    <h1>5-10 {{ __('year') }}</h1>
                    <p>{{ __('Experience of our craftsmen') }}</p>
                </div>
                <div class="box">
                    <h1>15 {{ __('year') }}</h1>
                    <p>{{ __('Experience in the market') }}</p>
                </div>
                <div class="box">
                    <h1>10 000 +</h1>
                    <p>{{ __('Satisfied customers') }}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section-statistic -->

    <!-- Section-content -->
    <section class="content">
        <div class="container">
            <div class="full-content d-flex">
                <div class="left-navigation">
                    <div class="faq">
                        @foreach($categories as $parent)
                        <div class="faq-item">
                            <input type="checkbox" class="faq-input" name="faq_{{$parent->id}}" id="faq_{{$parent->id}}">
                            <label for="faq_{{$parent->id}}" class="faq-title">{{ $language ? $parent->name : $parent->name_uz}}</label>
                            <form class="faq-text">
                                @foreach($parent->child as $item)
                                    <p><a href="{{ route('index', app()->getLocale()).'?category_id='.$item->id }}">{{ $language ? $item->name : $item->name_uz }}</a></p>
                                @endforeach
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="right-image">
                    @foreach($category_images as $image)
                        <div class="r-images">
                            <img src="{{ asset($image->image) }}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="btn">
                <button>{{ __('Download catalog') }}</button>
            </div>
        </div>
    </section>
    <!-- Section-content -->

    <!-- Section-partner -->
    <section class="partner">
        <div class="container">
            <div class="full-partner">
                <div class="theme-puls d-flex">
                    <div class="theme">
                        <h1>{{ __('We produce furniture') }} <br> {{ __('on European equipment') }} <br> {{ __('according to international standards') }}</h1>
                        <p>{{ __('Equipment from') }}</p>
                    </div>
                    <div class="all-puls">
                        <div class="pulse">
                            <img src="assets/img/play-btn.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="country-partner d-flex">
                    <div class="country d-flex">
                        <div class="name-count">
                            <div class="count-img">
                                <img src="assets/img/ru.webp" alt="">
                            </div>
                            <p>{{ __('Russia') }}</p>
                        </div>
                        <div class="name-count">
                            <div class="count-img">
                                <img src="assets/img/de.webp" alt="">
                            </div>
                            <p>{{ __('Germany') }}</p>
                        </div>
                        <div class="name-count">
                            <div class="count-img">
                                <img src="assets/img/tu.webp" alt="">
                            </div>
                            <p>{{ __('Turkey') }}</p>
                        </div>
                        <div class="name-count">
                            <div class="count-img">
                                <img src="assets/img/au.webp" alt="">
                            </div>
                            <p>{{ __('Austria') }}</p>
                        </div>
                    </div>
                    <div class="ploshad">
                        <h1>3 800 {{ __('m') }}²</h1>
                        <p>{{ __('production area') }}-<br>{{ __('storage facilities') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section-partner -->


    <!-- Section-room -->
    <section class="room">
        <div class="container">
            <div class="all-room d-flex">
                <div class="left-text">
                    <h1>{{ __('Free 3D design project') }}, <br> {{ __('which fits') }} <br> {{ __('for your premises') }}</h1>
                    <p>{{ __('Our specialist') }}:</p>
                    <ul>
                        <li><img src="assets/img/iconka 1.png" alt=""><p>{{ __('Make the right measurement of furniture') }}</p></li>
                        <li><img src="assets/img/iconka 1.png" alt=""><p>{{ __('Show projects for your space') }}</p></li>
                        <li><img src="assets/img/iconka 1.png" alt=""><p>{{ __('Learn how to properly use space') }}</p></li>
                        <li><img src="assets/img/iconka 1.png" alt=""><p>{{ __('Show examples of facades') }}</p></li>
                    </ul>
                </div>
                <div class="right-img">
                    <div class="text1">{{ __('Quickly draw a furniture design project') }}</div>
                    <div class="img">
                        <img src="assets/img/man.webp" alt="">
                    </div>
                    <div class="text2">{{ __('Find out how you can save') }}</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section-room -->


    <!-- Section-contact -->

    <section class="contact">
        <div class="container">
            <form class="full-contact" action="{{ route('free_design', app()->getLocale()) }}" method="POST">
            @csrf
                <input type="hidden" name="type" value="2">
                <div class="input-name">
                    <i class="lar la-user-circle"></i>
                    <input type="text" name="name" placeholder="{{ __('Enter your name') }}">
                </div>
                @error('name')
                    <p class="error">{{ $message }}</p>
                @enderror
                <div class="input-phone">
                    <i class="las la-phone-volume"></i>
                    <input type="text" class="phone_number" name="phone_number" placeholder="{{ __('Your phone number') }}">
                </div>
                @error('phone_number')
                    <p class="error two">{{ $message }}</p>
                @enderror
                <button>{{ __('Call a specialist') }}</button>
            </form>
        </div>
    </section>

    <!-- Section-contact -->


    <!-- Section-garantya -->

    <section class="garantya">
        <div class="container">
            <h1>{{ __('Why do our customers order furniture from us, even after studying all the offers on the market') }}</h1>
            <div class="all-box">
                <div class="box1">
                    <div class="box1-img">
                        <img src="assets/img/talon.webp" alt="">
                    </div>
                    <h2>{{ __('Warranty 1 year') }}</h2>
                    <p>{{ __('Furniture factory warranty') }}</p>
                </div>
                <div class="box1">
                    <div class="box1-img">
                        <img src="assets/img/calendar.webp" alt="">
                    </div>
                    <h2>{{ __('Deadlines') }}</h2>
                    <p>{{ __('Term from 1 - 25 days') }}</p>
                </div>
                <div class="box1">
                    <div class="box1-img">
                        <img src="assets/img/wallet.webp" alt="">
                    </div>
                    <h2>{{ __('Installment plan') }}</h2>
                    <p>{{ __('Interest-free installment up to 12 months.') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section-garantya -->



    <!-- Section-sort -->

    <section class="sort">
        <div class="container">
            <h2>{{ __('High quality materials') }}</h2>
            <p>{{ __('Materials do not emit chemicals and are harmless to health') }}</p>
            <div class="all-sort d-flex">
                <div class="box">
                    <div class="sort-img">
                        <img src="assets/img/derevo.webp" alt="">
                    </div>
                    <p style="font-size: 16px;">{{ __('Wood') }}</p>
                </div>
                <div class="box">
                    <div class="sort-img">
                        <img src="assets/img/mdf.webp" alt="">
                    </div>
                    <p><span>{{ __('MDF') }}</span> <br>({{ __('medium density fibreboard') }})</p>
                </div>
                <div class="box">
                    <div class="sort-img">
                        <img src="assets/img/ldsp.webp" alt="">
                    </div>
                    <p><span>{{ __('Chipboard') }}</span> <br>({{ __('laminated chipboard') }})</p>
                </div>
                <div class="box">
                    <div class="sort-img">
                        <img src="assets/img/pvx.webp" alt="">
                    </div>
                    <p><span>{{ __('PVC') }}</span> <br>({{ __('polyvinyl chloride') }})</p>
                </div>
                <div class="box">
                    <div class="sort-img">
                        <img src="assets/img/plastik.webp" alt="">
                    </div>
                    <p style="font-size: 17px;">{{ __('Plastic parts') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section-sort -->



    <!-- Section-work -->

    <section class="work">
        <div class="container">
            <h2>{{ __('How we are working') }}</h2>
            <div class="all-work">
                <div class="box-work">
                    <div class="b-img">
                        <img src="assets/img/metr.webp" alt="">
                    </div>
                    <p>{{ __('Free') }} <br> {{ __('froze') }}</p>
                </div>
                <div class="box-work">
                    <div class="b-img">
                        <img src="assets/img/document.webp" alt="">
                    </div>
                    <p>{{ __('Drafting') }} <br> {{ __('agreements') }}</p>
                </div>
                <div class="box-work">
                    <div class="b-img">
                        <img src="assets/img/3d.webp" alt="">
                    </div>
                    <p>{{ __('3D development') }} <br> {{ __('layout design') }}</p>
                </div>
                <div class="box-work">
                    <div class="b-img">
                        <img src="assets/img/tools.webp" alt="">
                    </div>
                    <p>{{ __('Manufacturing') }} <br> {{ __('furniture') }}</p>
                </div>
                <div class="box-work">
                    <div class="b-img">
                        <img src="assets/img/pickup.webp" alt="">
                    </div>
                    <p>{{ __('Delivery and') }} <br> {{ __('installation') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section-work -->



    <!-- Section-dostavka -->

    <section class="dostavka">
        <div class="container">
            <h2>{{ __('Delivery, assembly and installation of furniture') }}</h2>
            <img class="img" src="assets/img/delivery.webp" alt="">
            <div class="all-dostavka d-flex">
                <div class="box1">
                    <div class="d-img">
                        <img src="assets/img/city (1).webp" alt="">
                    </div>
                    <p>{{ __('Inside the city and in the surrounding areas for free') }}</p>
                </div>
                <div class="box1">
                    <div class="d-img">
                        <img src="assets/img/tool.webp" alt="">
                    </div>
                    <p>{{ __('Assembling furniture carefully') }}</p>
                </div>
                <div class="box1">
                    <div class="d-img">
                        <img src="assets/img/map-icon.webp" alt="">
                    </div>
                    <p>{{ __('We deliver to other regions and to Kazakhstan') }}</p>
                </div>
                <div class="box1">
                    <div class="d-img">
                        <img src="assets/img/trash.webp" alt="">
                    </div>
                    <p>{{ __('We remove the large') }} <br> {{ __('trash after you') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section-dostavka -->


    <!-- Section-call -->

    <section class="call">
        <div class="container">
            <form class="full-call" action="{{ route('call_specialist', app()->getLocale()) }}" method="POST">
            @csrf
                <h2>{{ __('Call the master') }}</h2>
                <div class="input-name">
                    <i class="las la-street-view"></i>
                    <input type="text" name="address" placeholder="{{ __('Enter your address') }}">
                </div>
                @error('address')
                    <p class="error one">{{ $message }}</p>
                @enderror
                <div class="input-phone">
                    <i class="las la-clock"></i>
                    <input type="text" name="time" placeholder="{{ __('Convenient time to visit') }}">
                </div>
                @error('time')
                    <p class="error two">{{ $message }}</p>
                @enderror
                <button>{{ __('Summon') }}</button>
            </form>
        </div>
    </section>

    <!-- Section-call -->



    <!-- Section-telegram -->

    <section class="telegram">
        <div class="container">
            <div class="all-telegram d-flex">
                <div class="left-content">
                    <h2>{{ __('Subscribe to our telegram bot') }}</h2>
                    <p class="you">{{ __('You can') }}:</p>
                    <div class="all-box2">
                        <div class="box-content">
                            <div class="img">
                                <img src="assets/img/bot-icon1.svg" alt="">
                            </div>
                            <p>{{ __('View more') }} <br>{{ __('10 000 items of furniture') }}</p>
                        </div>
                        <div class="box-content">
                            <div class="img">
                                <img src="assets/img/bot-icon2.svg" alt="">
                            </div>
                            <p>{{ __('Get detailed') }} <br> {{ __('information about each product') }}</p>
                        </div>
                        <div class="box-content">
                            <div class="img">
                                <img src="assets/img/bot-icon3.svg" alt="">
                            </div>
                            <p>{{ __('Call a measurer') }} <br> {{ __('on house') }}</p>
                        </div>
                    </div>
                    <!-- <button><a href="https://t.me/juslcard">@javoxirbekmebelbot</a></button> -->
                    <button><a href="#">@abzmebelbot</a></button>
                    <p>{{ __('Also subscribe to our social networks') }}</p>
                    <div class="social d-flex">
                        <div class="social-content">
                            <div class="s-img">
                                <i class="lab la-instagram"></i>
                            </div>
                            <p><a href="https://www.instagram.com/p/Cb3DG7FIkEZ/?igshid=YmMyMTA2M2Y=">Instagram</a></p>
                        </div>
                        <div class="social-content v2">
                            <div class="s-img">
                                <i class="lab la-telegram-plane"></i>
                            </div>
                            <p><a href="https://t.me/ABZ_MEBEL">Telegram</a></p>
                        </div>
                    </div>
                </div>
                <div class="right-tel-img">
                    <img src="assets/img/iPhone-12.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Section-telegram -->



    <!-- Section-images -->

    <section class="images">
        <div class="container">
            <div class="all-images">
                <h2>{{ __('We have completed over 10,000 orders') }}</h2>
                <div class="images-box">
                    <div class="img">
                        <img src="assets/img/photo8.png" alt="">
                    </div>
                    <div class="img">
                        <img src="assets/img/photo8.png" alt="">
                    </div>
                    <div class="img">
                        <img src="assets/img/photo8.png" alt="">
                    </div>
                    <div class="img">
                        <img src="assets/img/photo8.png" alt="">
                    </div>
                    <div class="img">
                        <img src="assets/img/photo8.png" alt="">
                    </div>
                    <div class="img">
                        <img src="assets/img/photo8.png" alt="">
                    </div>
                    <div class="img">
                        <img src="assets/img/photo8.png" alt="">
                    </div>
                    <div class="img">
                        <img src="assets/img/photo8.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section-images -->


    <!-- Section-video -->

    <section class="video">
        <div class="container">
            <h2>{{ __('Visit our showroom') }}</h2>
            <div class="comment">
                <i class="las la-map-marker-alt"></i>
                <p>{{ __('City of Gurlen, settlement Pahlavan Mahmud 14a') }}</p>
            </div>
            <div class="inner-video">
                <iframe width="100%" height="415" src="https://www.youtube.com/embed/S3sODPqKSXM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="all-text">
                <div class="content-video">
                    <div class="video-img">
                        <img src="assets/img/consultation.svg" alt="">
                    </div>
                    <p>{{ __('Get a free consultation') }}</p>
                </div>
                <div class="content-video">
                    <div class="video-img">
                        <img src="assets/img/furni.svg" alt="">
                    </div>
                    <p>{{ __('Feel comfortable') }} <br> {{ __('and comfort of our furniture') }}</p>
                </div>
                <div class="btn1">
                    <button><a href="https://goo.gl/maps/AJvUrqFeRzJittJfA">{{ __('See on the map') }}</a></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Section-video -->


    <!-- Section-question -->

    <section class="question">
        <div class="full-questions">
            <div class="left-question">
                <h2>{{ __('You have questions') }}?</h2>
                <form action="{{ route('question', app()->getLocale()) }}" method="POST">
                @csrf
                    <div class="input-phone">
                        <i class="las la-pen-nib"></i>
                        <input type="text" name="question" placeholder="{{ __('Question text') }}">
                    </div>
                    @error('question')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <div class="input-name">
                        <i class="las la-user-circle"></i>
                        <input type="text" name="name_q" placeholder="{{ __('Enter your name') }}">
                    </div>
                    @error('name_q')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <div class="input-phone">
                        <i class="las la-phone-volume"></i>
                        <input type="text" class="phone_number" name="phone_number_q" placeholder="{{ __('Your phone number') }}">
                    </div>
                    @error('phone_number_q')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <button>{{ __('Send') }}</button>
                </form>
            </div>
            <div class="right-question">
                <h2>{{ __('Contacts') }}</h2>
                <div class="all-question">
                    <div class="item">
                        <i class="las la-map-marker-alt"></i>
                    </div>
                    <div class="text-item">
                        <p>{{ __('Address') }}</p>
                        <span>{{ __('City of Gurlen, settlement Pahlavan Mahmud 14a') }}</span>
                    </div>
                </div>
                <div class="all-question">
                    <div class="item">
                        <i class="las la-phone-volume"></i>
                    </div>
                    <div class="text-item">
                        <p>{{ __('Call us') }}</p>
                        <span>
                            <p><a href="tel:+998 62 226-97-00">+998 62 <b>226-97-00</b></a></p>
                            <p><a href="tel:+998 99 717-84-88">+998 99 <b>717-84-88</b></a></p>
                        </span>
                    </div>
                </div>
                <div class="all-question">
                    <div class="item">
                        <i class="las la-clock"></i>
                    </div>
                    <div class="text-item">
                        <p>{{ __('Schedule') }}</p>
                        <span>
                            <p>{{ __('With') }} <b>9:00</b> {{ __('before') }} <b>19:00</b> {{ __('hours') }}</p>
                            <p>{{ __('Seven days a week') }}</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>       
    </section>

    <!-- Section-question -->



    <!-- Section-footer -->

    <section class="footer">
        <div class="container">
            <div class="all-footer">
                <h2>© ABZ MEBEL, 2022.</h2>
                <ul>
                    <li><a href="https://www.instagram.com/p/Cb3DG7FIkEZ/?igshid=YmMyMTA2M2Y="><i class="lab la-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/"><i class="lab la-facebook-f"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCber2Q4D8Pvxw0TeafvR4RQ"><i class="lab la-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section-footer -->



    <!-- <div class="test" style="height: 50px; background-color: yellow;">1</div> -->

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/main.js"></script>
    <script>

        /* $("#contact-form").on('submit', function(event) {
            event.preventDefault();

            let name = $('#name').val();
            let phone_number = $('#phone_number').val();

            $.ajax({
                url:"{{ route('free_design', app()->getLocale()) }}",
                type:"POST",
                data:{
                    "_token":"{{ csrf_token() }}",
                    name:name,
                    phone_number:phone_number,
                },
                success:function(response){
                    alert(response);
                }
            });

        }) */

        /* $("#send").click(function() {
            let address = $('#address').val();
            let time = $('#time').val();                
            let data = {
                "_token": "{{ csrf_token() }}",
                "_method": "POST",
                address:address,
                time:time
            }
            let url = "{{ route('call_specialist', app()->getLocale()) }}"
            //alert(name);

            $.ajax({
                url: url,
                type: "POST",
                data: data,
                cache:false,
                success:function($res){
                    console.log($res);
                }
            });
        }); */

    </script>

</body>
</html>