@extends('layouts.layout')
@section('content')
    @include('layouts.navbar')
    <section class="bg-boosting">

        <form class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title">
                        <h2>LOL NET WINS ELO BOOST</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                    <h3 class="title">Current Rank</h3>
                    <div class="boosting-flag">
                        <div class="elo">
                            <img src="{{asset('assets/images/default.png')}}" class="img-fluid"
                                 alt="From Division">
                        </div>
                        <div class="form-group">
                            <label for="from-select">Rank</label>
                            <select class="form-select" id="from-select">
                                <option id="0" value="65">Unranked</option>
                                <option id="1" value="66">Iron</option>
                                <option id="2" value="67">Bronze</option>
                                <option id="3" value="68">Silver</option>
                                <option id="4" value="69">Gold</option>
                                <option id="5" value="70">Platinum</option>
                                <option id="6" value="71">Diamond</option>
                                <option id="7" value="72">Master</option>
                                <option id="8" value="73">Grandmaster</option>
                                <option id="9" value="74">Challenger</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="server">Server</label>
                            <select class="form-select" id="server">
                                <option value="1">EUW</option>
                                <option value="2">EUNE</option>
                                <option value="3">LAN</option>
                                <option value="4">LAS</option>
                                <option value="5">NA</option>
                                <option value="6">OCE</option>
                                <option value="7">TR</option>
                                <option value="8">RU</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="queue">Queue</label>
                            <select class="form-select" id="queue">
                                <option value="1">Solo/Duo Queue</option>
                                <option value="2">Flex Queue</option>
                                <option value="3">3v3 Flex Queue</option>
                            </select>
                        </div>


                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                    <h3 class="title">Desired Rank</h3>
                    <div class="boosting-flag">

                        <div class="form-group">
                            <label for="currentLP"><span class="lp-label">0</span> Game(s)</label>
                            <input type="range" class="form-control-range" id="currentLP" min="0" step="1" max="10"
                                   value="0">
                        </div>
                        <label>Roles</label>
                        <div id="role-selection" class="form-group">
                            <div class="form-check">
                                <img src="{{asset('assets/images/top.png')}}" class="role roleTop" alt="Top">
                                <input class="form-check-input" type="checkbox" id="roleTop" value="top">
                                <label class="form-check-label" for="roleTop">Top</label>
                            </div>
                            <div class="form-check">
                                <img src="{{asset('assets/images/jungle.png')}}" class="role roleJungle" alt="Jungle">
                                <input class="form-check-input" type="checkbox" id="roleJungle" value="jungle">
                                <label class="form-check-label" for="roleJungle">Jungle</label>
                            </div>
                            <div class="form-check">
                                <img src="{{asset('assets//images/mid.png')}}" class="role roleMid" alt="Mid">
                                <input class="form-check-input" type="checkbox" id="roleMid" value="mid">
                                <label class="form-check-label" for="roleMid">Mid</label>
                            </div>
                            <div class="form-check">
                                <img src="{{asset('assets/images/bot.png')}}" class="role roleBot" alt="Bot">
                                <input class="form-check-input" type="checkbox" id="roleBot" value="bot">
                                <label class="form-check-label" for="roleBot">Bot</label>
                            </div>
                            <div class="form-check">
                                <img src="{{asset('assets/images/support.png')}}" class="role roleSupport"
                                     alt="Support">
                                <input class="form-check-input" type="checkbox" id="roleSupport" value="support">
                                <label class="form-check-label" for="roleSupport">Support</label>
                            </div>
                        </div>
                        <label for="addons">Options</label>
                        <div id="addons" class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="addonDuoQ" value="duoQ">
                                <label class="form-check-label" for="addonDuoQ">
                                    duoQ
                                    <button type="button"
                                            aria-label="This option means that you will play with our booster in your team instead of him playing on your account. This option is not bannable according to Riot ToS."
                                            data-container="body" data-toggle="popover" data-placement="right"
                                            data-content="This option means that you will play with our booster in your team instead of him playing on your account. This option is not bannable according to Riot ToS."
                                            data-original-title="" title="">
                                        <svg class="svg-inline--fa fa-question-circle fa-w-16" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="question-circle" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                                        </svg><!-- <i class="fa fa-question-circle"></i> -->
                                    </button>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="addonChampions" value="Champions">
                                <label class="form-check-label" for="addonChampions">
                                    Champions
                                    <button type="button"
                                            aria-label="If you check this option, you will be able to choose champions that our booster is going to use."
                                            data-container="body" data-toggle="popover" data-placement="right"
                                            data-content="If you check this option, you will be able to choose champions that our booster is going to use."
                                            data-original-title="" title="">
                                        <svg class="svg-inline--fa fa-question-circle fa-w-16" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="question-circle" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                                        </svg><!-- <i class="fa fa-question-circle"></i> -->
                                    </button>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="addonLivestream" value="Livestream">
                                <label class="form-check-label" for="addonLivestream">
                                    Livestream
                                    <button type="button" aria-label="We will stream the game live on twitch.tv."
                                            data-container="body" data-toggle="popover" data-placement="right"
                                            data-content="We will stream the game live on twitch.tv."
                                            data-original-title="" title="">
                                        <svg class="svg-inline--fa fa-question-circle fa-w-16" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="question-circle" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                                        </svg><!-- <i class="fa fa-question-circle"></i> -->
                                    </button>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="addonPremium" value="Premium">
                                <label class="form-check-label" for="addonPremium">
                                    Premium
                                    <button type="button"
                                            aria-label="Only the best boosters can pick up your order and we will replace your booster after 3 hours of inactivity to guarantee the quickest possible completion."
                                            data-container="body" data-toggle="popover" data-placement="right"
                                            data-content="Only the best boosters can pick up your order and we will replace your booster after 3 hours of inactivity to guarantee the quickest possible completion."
                                            data-original-title="" title="">
                                        <svg class="svg-inline--fa fa-question-circle fa-w-16" aria-hidden="true"
                                             focusable="false" data-prefix="fa" data-icon="question-circle" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                                        </svg><!-- <i class="fa fa-question-circle"></i> -->
                                    </button>
                                </label>
                            </div>
                        </div>
                        <div class="price">
                            $<span id="price">9.00</span>
                        </div>
                        <button type="button" class="btn btn-checkout mt-3">
                            Checkout
                        </button>

                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection
