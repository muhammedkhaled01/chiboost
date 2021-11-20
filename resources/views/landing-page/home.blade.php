@extends('layouts.layout')
@section('content')
    {{--    Start header--}}
    <header class="header">
        @include('layouts.navbar')
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="multi-option-slider">
                        <div class="option">
                            <a href="#">
                                <picture>
                                    <source srcset="https://www.chiboost.net/images/slider/figure/option1.webp"
                                            type="image/webp">
                                    <source srcset="https://www.chiboost.net/images/slider/figure/option1.jpg"
                                            type="image/jpeg">
                                    <img src="https://www.chiboost.net/images/slider/figure/option1.jpg" alt="Irelia">
                                </picture>
                                <picture>
                                    <source srcset="https://www.chiboost.net/images/slider/figure/option1.webp"
                                            type="image/webp">
                                    <source srcset="https://www.chiboost.net/images/slider/figure/option1.jpg"
                                            type="image/jpeg">
                                    <img class="filtered"
                                         src="https://www.chiboost.net/images/slider/figure/option1.jpg" alt="Irelia">
                                </picture>
                                <span>Division ELO boost</span>
                            </a>
                        </div>
                        <div class="option">
                            <a href="#">
                                <picture>
                                    <source srcset="https://www.chiboost.net/images/slider/figure/option2.webp"
                                            type="image/webp">
                                    <source srcset="https://www.chiboost.net/images/slider/figure/option2.jpg"
                                            type="image/jpeg">
                                    <img src="https://www.chiboost.net/images/slider/figure/option2.jpg" alt="Ashe">
                                </picture>
                                <picture>
                                    <source srcset="https://www.chiboost.net/images/slider/figure/option2.webp"
                                            type="image/webp">
                                    <source srcset="https://www.chiboost.net/images/slider/figure/option2.jpg"
                                            type="image/jpeg">
                                    <img class="filtered"
                                         src="https://www.chiboost.net/images/slider/figure/option2.jpg" alt="Ashe">
                                </picture>
                                <span>Net Wins ELO boost</span>
                            </a>
                        </div>
                        <div class="option">
                            <a href="#">
                                <picture>
                                    <source srcset="https://www.chiboost.net/images/slider/figure/option3.webp"
                                            type="image/webp">
                                    <source srcset="https://www.chiboost.net/images/slider/figure/option3.jpg"
                                            type="image/jpeg">
                                    <img src="https://www.chiboost.net/images/slider/figure/option3.jpg" alt="Senna">
                                </picture>
                                <picture>
                                    <source srcset="https://www.chiboost.net/images/slider/figure/option3.webp"
                                            type="image/webp">
                                    <source srcset="https://www.chiboost.net/images/slider/figure/option3.jpg"
                                            type="image/jpeg">
                                    <img class="filtered"
                                         src="https://www.chiboost.net/images/slider/figure/option3.jpg" alt="Senna">
                                </picture>
                                <span>Placements ELO boost</span>
                            </a>
                        </div>
                    </div>
                    {{--                <img src="{{asset('assets/images/slider2.jpg')}}" class="d-block w-100" alt="...">--}}
                </div>
                <div class="carousel-item">

                    <div class="bg-slide2"></div>
                    <div class="reduce-opacity">
                        <div class="container">
                            <div class="w-75 mx-auto head-slide2">
                                <h1 class="sub-title text-white">Cheap LOL elo boost up to Challenger</h1>
                                <p>Try our unique service, and get the cheapest possible boost to your desired rank
                                    whether it's gold, diamond, or <br>higher we will get it done! We offer a free
                                    warranty
                                    for your account and the safest boosting with a 0% ban ratio.</p>
                                <a class="btn btn-link mx-auto"
                                   href="#">Click to learn
                                    more
                                    <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true"
                                         focusable="false" data-prefix="fa" data-icon="chevron-right" role="img"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                              d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                    </svg><!-- <i class="fa fa-chevron-right"></i> --></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    {{--End header--}}
    {{--    Start why us--}}
    <section class="why-us">
        <figure class="d-none d-lg-block figure">
            <picture>
                <source srcset="{{asset('assets/images/vayne.webp')}}" type="image/webp">
                <source srcset="{{asset('assets/images/vayne.png')}}" type="image/png">
                <img src="{{asset('assets/images/vayne.png')}}" alt="Vayne">
            </picture>
        </figure>
        <div class="container">
            <div class="row">
                <div class="d-none d-lg-block col-6">
                    <figure class="sizer">
                        <picture>
                            <source srcset="{{asset('assets/images/vayne.webp')}}" type="image/webp">
                            <source srcset="{{asset('assets/images/vayne.png')}}" type="image/png">
                            <img src="{{asset('assets/images/vayne.png')}}" alt="Vayne">
                        </picture>
                    </figure>
                </div>
                <div class="col-12 col-lg-6 mt-5">
                    <div class="align-self-center ma-45">
                        <h4>Why should you choose us?</h4>
                        <h2 class="header-whyUs">The Best Boosting Service</h2>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingVpn">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#vpnLocation" aria-expanded="false"
                                            aria-controls="vpnLocation">
                                        <svg class="svg-inline--fa fa-lock fa-w-14" aria-hidden="true" focusable="false"
                                             data-prefix="fa" data-icon="lock" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path>
                                        </svg>
                                        VPN Location
                                        <svg class="svg-inline--fa fa-chevron-down fa-w-14 see-more" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="chevron-down" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="vpnLocation" class="accordion-collapse collapse " aria-labelledby="headingVpn"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="why-us-description">
                                            After you order you will be able to choose the closest location to where you
                                            live to make sure your account is safe.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingBan">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#banRate" aria-expanded="false" aria-controls="banRate">
                                        <svg class="svg-inline--fa fa-user-shield fa-w-20" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="user-shield" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M622.3 271.1l-115.2-45c-4.1-1.6-12.6-3.7-22.2 0l-115.2 45c-10.7 4.2-17.7 14-17.7 24.9 0 111.6 68.7 188.8 132.9 213.9 9.6 3.7 18 1.6 22.2 0C558.4 489.9 640 420.5 640 296c0-10.9-7-20.7-17.7-24.9zM496 462.4V273.3l95.5 37.3c-5.6 87.1-60.9 135.4-95.5 151.8zM224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm96 40c0-2.5.8-4.8 1.1-7.2-2.5-.1-4.9-.8-7.5-.8h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c6.8 0 13.3-1.5 19.2-4-54-42.9-99.2-116.7-99.2-212z"></path>
                                        </svg>
                                        0% ban rate
                                        <svg class="svg-inline--fa fa-chevron-down fa-w-14 see-more" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="chevron-down" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="banRate" class="accordion-collapse collapse" aria-labelledby="headingBan"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="why-us-description">We have a 0% ban ratio for account sharing since
                                            2018 and we are constantly looking to improve our anti-detection
                                            practices.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingboosters">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#boosters" aria-expanded="false" aria-controls="boosters">
                                        <svg class="svg-inline--fa fa-gem fa-w-18" aria-hidden="true" focusable="false"
                                             data-prefix="fa" data-icon="gem" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M464 0H112c-4 0-7.8 2-10 5.4L2 152.6c-2.9 4.4-2.6 10.2.7 14.2l276 340.8c4.8 5.9 13.8 5.9 18.6 0l276-340.8c3.3-4.1 3.6-9.8.7-14.2L474.1 5.4C471.8 2 468.1 0 464 0zm-19.3 48l63.3 96h-68.4l-51.7-96h56.8zm-202.1 0h90.7l51.7 96H191l51.6-96zm-111.3 0h56.8l-51.7 96H68l63.3-96zm-43 144h51.4L208 352 88.3 192zm102.9 0h193.6L288 435.3 191.2 192zM368 352l68.2-160h51.4L368 352z"></path>
                                        </svg>
                                        Only high elo boosters
                                        <svg class="svg-inline--fa fa-chevron-down fa-w-14 see-more" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="chevron-down" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="boosters" class="accordion-collapse collapse" aria-labelledby="headingboosters"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="why-us-description">We hire only Diamond 1+ elo boosters on EUW/NA and
                                            only Challengers from other servers.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingWarranty">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#Warranty" aria-expanded="false" aria-controls="Warranty">
                                        <svg class="svg-inline--fa fa-shirtsinbulk fa-w-14" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="shirtsinbulk" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M100 410.3l30.6 13.4 4.4-9.9-30.6-13.4zm39.4 17.5l30.6 13.4 4.4-9.9-30.6-13.4zm172.1-14l4.4 9.9 30.6-13.4-4.4-9.9zM179.1 445l30.3 13.7 4.4-9.9-30.3-13.4zM60.4 392.8L91 406.2l4.4-9.6-30.6-13.7zm211.4 38.5l4.4 9.9 30.6-13.4-4.4-9.9zm-39.3 17.5l4.4 9.9 30.6-13.7-4.4-9.6zm118.4-52.2l4.4 9.6 30.6-13.4-4.4-9.9zM170 46.6h-33.5v10.5H170zm-47.2 0H89.2v10.5h33.5zm-47.3 0H42.3v10.5h33.3zm141.5 0h-33.2v10.5H217zm94.5 0H278v10.5h33.5zm47.3 0h-33.5v10.5h33.5zm-94.6 0H231v10.5h33.2zm141.5 0h-33.3v10.5h33.3zM52.8 351.1H42v33.5h10.8zm70-215.9H89.2v10.5h33.5zm-70 10.6h22.8v-10.5H42v33.5h10.8zm168.9 228.6c50.5 0 91.3-40.8 91.3-91.3 0-50.2-40.8-91.3-91.3-91.3-50.2 0-91.3 41.1-91.3 91.3 0 50.5 41.1 91.3 91.3 91.3zm-48.2-111.1c0-25.4 29.5-31.8 49.6-31.8 16.9 0 29.2 5.8 44.3 12l-8.8 16.9h-.9c-6.4-9.9-24.8-13.1-35.6-13.1-9 0-29.8 1.8-29.8 14.9 0 21.6 78.5-10.2 78.5 37.9 0 25.4-31.5 31.2-51 31.2-18.1 0-32.4-2.9-47.2-12.2l9-18.4h.9c6.1 12.2 23.6 14.9 35.9 14.9 8.7 0 32.7-1.2 32.7-14.3 0-26.1-77.6 6.3-77.6-38zM52.8 178.4H42V212h10.8zm342.4 206.2H406v-33.5h-10.8zM52.8 307.9H42v33.5h10.8zM0 3.7v406l221.7 98.6L448 409.7V3.7zm418.8 387.1L222 476.5 29.2 390.8V120.7h389.7v270.1zm0-299.3H29.2V32.9h389.7v58.6zm-366 130.1H42v33.5h10.8zm0 43.2H42v33.5h10.8zM170 135.2h-33.5v10.5H170zm225.2 163.1H406v-33.5h-10.8zm0-43.2H406v-33.5h-10.8zM217 135.2h-33.2v10.5H217zM395.2 212H406v-33.5h-10.8zm0 129.5H406V308h-10.8zm-131-206.3H231v10.5h33.2zm47.3 0H278v10.5h33.5zm83.7 33.6H406v-33.5h-33.5v10.5h22.8zm-36.4-33.6h-33.5v10.5h33.5z"></path>
                                        </svg>
                                        Warranty
                                        <svg class="svg-inline--fa fa-chevron-down fa-w-14 see-more" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="chevron-down" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="Warranty" class="accordion-collapse collapse" aria-labelledby="headingWarranty"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="why-us-description">If your accounts get banned due to our fault we
                                            will provide you with account of similar quality. This warranty includes
                                            flaming, afk bans and account sharing bans if we changed your summoner
                                            spells or used wrong VPN location.

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingDiscounts">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#Discounts" aria-expanded="false" aria-controls="Discounts">
                                        <svg class="svg-inline--fa fa-dollar-sign fa-w-9" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="dollar-sign" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z"></path>
                                        </svg>
                                        Discounts
                                        <svg class="svg-inline--fa fa-chevron-down fa-w-14 see-more" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="chevron-down" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="Discounts" class="accordion-collapse collapse"
                                     aria-labelledby="headingDiscounts" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="why-us-description">We send discounts for elo boosting to all our
                                            subscribers on regular basis. If you want to join scroll down or click a
                                            checkbox during registration to subscribe.

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingCustomization">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#Customization" aria-expanded="false"
                                            aria-controls="Customization">
                                        <svg class="svg-inline--fa fa-edit fa-w-18" aria-hidden="true" focusable="false"
                                             data-prefix="fa" data-icon="edit" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                        </svg>
                                        Customization
                                        <svg class="svg-inline--fa fa-chevron-down fa-w-14 see-more" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="chevron-down" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="Customization" class="accordion-collapse collapse"
                                     aria-labelledby="headingCustomization" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="why-us-description">Customize your order by choosing summoner spells,
                                            offline mode, lanes, champions, streaming, and coaching!

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSpeed">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#Speed" aria-expanded="false" aria-controls="Speed">
                                        <svg class="svg-inline--fa fa-bolt fa-w-10" aria-hidden="true" focusable="false"
                                             data-prefix="fa" data-icon="bolt" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M296 160H180.6l42.6-129.8C227.2 15 215.7 0 200 0H56C44 0 33.8 8.9 32.2 20.8l-32 240C-1.7 275.2 9.5 288 24 288h118.7L96.6 482.5c-3.6 15.2 8 29.5 23.3 29.5 8.4 0 16.4-4.4 20.8-12l176-304c9.3-15.9-2.2-36-20.7-36z"></path>
                                        </svg>
                                        Speed
                                        <svg class="svg-inline--fa fa-chevron-down fa-w-14 see-more" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="chevron-down" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="Speed" class="accordion-collapse collapse" aria-labelledby="headingSpeed"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="why-us-description">90% of orders are claimed by a booster within 5
                                            minutes or less.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSpectate">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#Spectate" aria-expanded="false" aria-controls="Spectate">
                                        <svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" focusable="false"
                                             data-prefix="fa" data-icon="eye" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
                                        </svg>
                                        Spectate your boost
                                        <svg class="svg-inline--fa fa-chevron-down fa-w-14 see-more" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="chevron-down" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="Spectate" class="accordion-collapse collapse" aria-labelledby="headingSpectate"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="why-us-description">You can spectate your boost directly from our
                                            dashboard with the click of a button. Run the file as admin and you are
                                            ready to watch our boosters carry you to the elo of your choice.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOffline">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#Offline" aria-expanded="false" aria-controls="Offline">
                                        <svg class="svg-inline--fa fa-question-circle fa-w-16" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="question-circle" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                                        </svg>
                                        Offline mode
                                        <svg class="svg-inline--fa fa-chevron-down fa-w-14 see-more" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="chevron-down" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="Offline" class="accordion-collapse collapse" aria-labelledby="headingOffline"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="why-us-description">Our service completes all solo orders in offline
                                            mode by default. We will be invisible to your friends to avoid any
                                            troublesome messages.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingsupport">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#support" aria-expanded="false" aria-controls="support">
                                        <svg class="svg-inline--fa fa-question-circle fa-w-16" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="question-circle" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                                        </svg>
                                        24/7 support
                                        <svg class="svg-inline--fa fa-chevron-down fa-w-14 see-more" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="chevron-down" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="support" class="accordion-collapse collapse" aria-labelledby="headingsupport"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="why-us-description">Our agents and managers are online whenever you
                                            need them and can resolve any issue you might have. The fastest way to
                                            contact us is through live chat on our site but you can also find us on our
                                            discord server.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    Start why us--}}
    {{--    Start how works section--}}
    <div class="container how-works">
        <div class="row">
            <div class="col-12">
                <h2 class="title-howWorks">How our service works</h2>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <ul class="how-service-works">
                    <li>
                        <div class="icon">
                            <svg class="svg-inline--fa fa-shopping-cart fa-w-18" aria-hidden="true" focusable="false"
                                 data-prefix="fa" data-icon="shopping-cart" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                      d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path>
                            </svg><!-- <i class="fa fa-shopping-cart"></i> -->
                        </div>
                        <div class="information">
                            <h3>Choose what you need</h3>
                            <p>
                                You can modify your order in numerous ways to mimic the way you play League of Legends.
                                We can reach your desired rank with any champion or lane. We can play on your account
                                (solo) or play in duo with you.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <svg class="svg-inline--fa fa-credit-card fa-w-18" aria-hidden="true" focusable="false"
                                 data-prefix="fa" data-icon="credit-card" role="img" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                      d="M527.9 32H48.1C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48.1 48h479.8c26.6 0 48.1-21.5 48.1-48V80c0-26.5-21.5-48-48.1-48zM54.1 80h467.8c3.3 0 6 2.7 6 6v42H48.1V86c0-3.3 2.7-6 6-6zm467.8 352H54.1c-3.3 0-6-2.7-6-6V256h479.8v170c0 3.3-2.7 6-6 6zM192 332v40c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12zm192 0v40c0 6.6-5.4 12-12 12H236c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12z"></path>
                            </svg><!-- <i class="fa fa-credit-card"></i> -->
                        </div>
                        <div class="information">
                            <h3>Proceed to payment</h3>
                            <p>
                                Pay using PayPal or one of the other available payment methods. After you are done with
                                the payment we will send an activation link to email associated with the payment.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <svg class="svg-inline--fa fa-truck-moving fa-w-20" aria-hidden="true" focusable="false"
                                 data-prefix="fa" data-icon="truck-moving" role="img" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 640 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                      d="M621.3 237.3l-58.5-58.5c-12-12-28.3-18.7-45.3-18.7H480V64c0-17.7-14.3-32-32-32H32C14.3 32 0 46.3 0 64v336c0 44.2 35.8 80 80 80 26.3 0 49.4-12.9 64-32.4 14.6 19.6 37.7 32.4 64 32.4 44.2 0 80-35.8 80-80 0-5.5-.6-10.8-1.6-16h163.2c-1.1 5.2-1.6 10.5-1.6 16 0 44.2 35.8 80 80 80s80-35.8 80-80c0-5.5-.6-10.8-1.6-16H624c8.8 0 16-7.2 16-16v-85.5c0-17-6.7-33.2-18.7-45.2zM80 432c-17.6 0-32-14.4-32-32s14.4-32 32-32 32 14.4 32 32-14.4 32-32 32zm128 0c-17.6 0-32-14.4-32-32s14.4-32 32-32 32 14.4 32 32-14.4 32-32 32zm272-224h37.5c4.3 0 8.3 1.7 11.3 4.7l43.3 43.3H480v-48zm48 224c-17.6 0-32-14.4-32-32s14.4-32 32-32 32 14.4 32 32-14.4 32-32 32z"></path>
                            </svg><!-- <i class="fa fa-truck-moving"></i> -->
                        </div>
                        <div class="information">
                            <h3>Track the order</h3>
                            <p>
                                After you activate your order you will be asked to provide us with necessary details to
                                complete it. In this step you will also be able to chat with your booster, tip him and
                                even replace him if necessary.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="video-example">
                    <div>
                        <img class="video-background" src="{{asset('assets/images/video_background.jpg')}}"
                             alt="Video of the buying proccess">
                        <a type="button" class="play-button" data-bs-toggle="modal" href="#exampleModalToggle"
                           role="button">Play</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
         tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                    <div class="embed-responsive embed-responsive-16by9" id="insert-explainer-video">
                        <iframe id="player" style="width: 100%; height: 400px;"
                                src="https://www.youtube-nocookie.com/embed/OcqZ8hIznbA?enablejsapi=1&amp;controls=0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    End how works section--}}

    {{--    Start giveaway section--}}
    <section id="giveaway">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 ms-auto text-center ma-45">
                    <h2>Subscribe to our newsletter</h2>
                    <h4>Get unique subscribers only discounts!</h4>
                    <p>
                        <b>How does it work?</b><br>
                        Fill the subscription form below to receive a discount at least once a month. We also include
                        recent news from League of Legends and the newest articles from our site. We also run regular
                        giveaways of RP and rare accounts. You can unsubscribe at anytime.
                    </p>
                    <form class="newsletter" method="POST" action="https://www.chiboost.net/newsletter/subscribe">
                        <input type="hidden" name="_token" value="QPGttlBLVR2mBWKzZclrVKHR4wvsVaeElM4Otam1"> <label
                            for="email">Email</label>
                        <input type="email" placeholder="Email Address" name="email" id="email" autocomplete="off"
                               spellcheck="false" required="">
                        <label for="name">Name</label>
                        <input type="text" placeholder="Name" name="name" id="name" autocomplete="off"
                               spellcheck="false" required="">
                        <button type="submit" class="btn btn-link mt-2 ms-auto">
                            <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true" focusable="false"
                                 data-prefix="fa" data-icon="chevron-right" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                      d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                            </svg><!-- <i class="fa fa-chevron-right"></i> --> Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{--    End giveaway section--}}
    {{--    Start Faq section--}}
    <div class="container ma-45 faq">
        <div class="row">
            <div class="col-12 text-center">
                <div class="faq-header">
                    <h2>Have some questions?</h2>
                    <h3>We probably have the answers</h3>
                </div>

            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="accordion" id="accordionExample2">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingChiboost">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseChiboost" aria-expanded="true"
                                    aria-controls="collapseChiboost">
                                Why Chiboost is a safe place to buy ELO boost!
                            </button>
                        </h2>
                        <div id="collapseChiboost" class="accordion-collapse collapse "
                             aria-labelledby="headingChiboost"
                             data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>Chivalrous Boosting was made to make a difference with superb security, customer
                                    satisfaction, and additional content. We are a legally operating company and all our
                                    payments are secured by PayPal meaning your payment information is 100% safe and our
                                    website is secured with an SSL certificate for further safety. If you are still not
                                    convinced check some of our MMR boosting reviews collected by independent review
                                    collectors: TrustPilot or our vouches on reddit and epvp.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingboosting">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBoosting" aria-expanded="false"
                                    aria-controls="collapseBoosting">
                                What's MMR boosting?
                            </button>
                        </h2>
                        <div id="collapseBoosting" class="accordion-collapse collapse" aria-labelledby="headingboosting"
                             data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>Boosting - service of increasing a customers rank to the desired level by solo or duo
                                    method. Read more here.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingStart">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseStart" aria-expanded="false" aria-controls="collapseStart">
                                How fast can you start?
                            </button>
                        </h2>
                        <div id="collapseStart" class="accordion-collapse collapse" aria-labelledby="headingStart"
                             data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>90% of orders start in less than 60 minutes from purchase. A strict role, champion
                                    restrictions, and some of the high ELO orders might have a slightly longer waiting
                                    time.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingBoosters">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBoosters" aria-expanded="false"
                                    aria-controls="collapseBoosters">
                                What rank are your elo boosters?
                            </button>
                        </h2>
                        <div id="collapseBoosters" class="accordion-collapse collapse" aria-labelledby="headingBoosters"
                             data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>All our boosters on major servers (NA, EUW, OCE) are at least Diamond 1, boosters
                                    from smaller servers (LAN, LAS, EUNE) are at least challenger.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingBanned">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBanned" aria-expanded="false"
                                    aria-controls="collapseBanned">
                                Can I get banned?
                            </button>
                        </h2>
                        <div id="collapseBanned" class="accordion-collapse collapse" aria-labelledby="headingBanned"
                             data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>Our ban ratio for the entire 2018-2019 season was 0.05% so it’s very safe. We haven’t
                                    received a single ban for account sharing since December 2018.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="accordion" id="accordionExample3">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingBoost">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBoost" aria-expanded="true"
                                    aria-controls="collapseBoost">
                                What's the difference between solo and duo boost?
                            </button>
                        </h2>
                        <div id="collapseBoost" class="accordion-collapse collapse "
                             aria-labelledby="headingBoost"
                             data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                <p>Our service offers solo queue and duo queue methods of completing your order. In
                                    soloq we play on your account and in duo you play on your own account in the team
                                    with our booster.


                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingAvailable">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseAvailable" aria-expanded="false"
                                    aria-controls="collapseAvailable">
                                Do you have any available boosters right now?
                            </button>
                        </h2>
                        <div id="collapseAvailable" class="accordion-collapse collapse"
                             aria-labelledby="headingAvailable"
                             data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                <p>At the time of writing this, we are working with over 400 boosters so there is always
                                    someone available. If you want to make sure you can get a booster within the
                                    required timeframe please message us on livechat</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingChampions">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseChampions" aria-expanded="false"
                                    aria-controls="collapseChampions">
                                Can I pick champions you will play?
                            </button>
                        </h2>
                        <div id="collapseChampions" class="accordion-collapse collapse"
                             aria-labelledby="headingChampions"
                             data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                <p>Yes, you can. You have to make an order with the champions modifier on our order
                                    page. You will be able to make a selection in our customer panel. You can view a
                                    demo of how it looks on our Demo Elo Boost customer panel page.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingPlay">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsePlay" aria-expanded="false"
                                    aria-controls="collapsePlay">
                                Do you play my champion?
                            </button>
                        </h2>
                        <div id="collapsePlay" class="accordion-collapse collapse" aria-labelledby="headingPlay"
                             data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                <p>We have wide variety of boosters that can play almost any champion at any role. If
                                    you are still in doubt please contact us through live chat or discord and we can
                                    confirm that we play your champ and role at your ELO. Keep in mind role/champ
                                    restriction might increase waiting time for the booster, because it limits the pool
                                    of available boosters.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingHighest">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseHighest" aria-expanded="false"
                                    aria-controls="collapseHighest">
                                What’s the highest rank you boost to?
                            </button>
                        </h2>
                        <div id="collapseHighest" class="accordion-collapse collapse" aria-labelledby="headingHighest"
                             data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                <p>We can reliably boost to any rank on any server. GrandMaster and Challenger orders
                                    are negotiated directly with the owner, please add me on discord Sir Bertrand du
                                    Guesclin#1992.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    {{--    End Faq section--}}

    {{--    Start abart section--}}
    <section id="apart">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Why ChiBoost <small>is an elo boosting company like no other</small></h2>
                </div>
                <div class="col-12">
                    <p>
                        Our mission is to provide superb service at a very competitive price. We do this by paying our
                        boosters very high server cuts, up to 80% of what you pay goes straight to the booster, industry
                        standard is about 50%. Thanks to this our boosters can play the game we all love for living and
                        provide you with extraordinary service. We understand that in boosting the trust between a
                        customer and the company is the most important factor that's why we offer unique features that
                        build a strong bond between us. Join over 3880 customers who've already found home here and
                        enjoy permanent loyalty discounts from 5 to 10% on all orders.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{--    End abart section--}}




@endsection
