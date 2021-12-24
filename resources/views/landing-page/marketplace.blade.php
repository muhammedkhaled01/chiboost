@extends('layouts.layout')
@section('content')
    @include('layouts.navbar')

    <div class="container ">
        <div class="row">
            <div class="col-12">
                <h2 class="head-marketplace">Unranked Accounts</h2>
            </div>
        </div>
    </div>
    <div class="container list-account">
        <div class="row">
            @foreach($accounts as $account)
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="account">
                        <div class="part-top">
                            <div class="main-image">

                            </div>
                        </div>

                        <div class="part-bottom">
                            <div class="info-cols container-fluid">

                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="col-rank">
                                            <div class="label">Rank of Account:</div>
                                            <div class="rank-name">Unranked I</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="col-server">
                                            <div class="label">Server:</div>
                                            <div class="server-name">{{$account ->server}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-price">
                                <div class="price">
                                    <span class="value">{{$account ->price}}</span>
                                    <span class="currency">USD</span>
                                </div>
                            </div>
                            <div class="wrap-link">
                                <a class="btn link-details" href="#">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </div>

@endsection
