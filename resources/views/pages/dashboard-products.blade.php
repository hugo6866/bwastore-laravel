@extends('layouts.dashboard')
@section('title')
    Store Dashboard Transaction
@endsection
@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Transactions</h2>
                <p class="dashboard-subtitle">
                    Big result start from the small one
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-cart-title">Customer</div>
                                <div class="dashboard-cart-subtitle">$15.209</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-cart-title">Revenue</div>
                                <div class="dashboard-cart-subtitle">$335.202</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-cart-title">Transaction</div>
                                <div class="dashboard-cart-subtitle">5.324.333</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <h5 class="mb-3">Recent Transactions</h5>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">
                                Buy Product
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">
                                Sell Product
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="/images/dashboard-icon-1.png" alt="" />
                                        </div>
                                        <div class="col-md-4">Shirup</div>
                                        <div class="col-md-3">User</div>
                                        <div class="col-md-3">12 January 2020</div>
                                        <div class="col-md-1 d-none d-md-block">
                                            <img src="images/expand-more.svg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="/images/dashboard-icon-2.png" alt="" />
                                        </div>
                                        <div class="col-md-4">LeBrone</div>
                                        <div class="col-md-3">User</div>
                                        <div class="col-md-3">13 January 2020</div>
                                        <div class="col-md-1 d-none d-md-block">
                                            <img src="images/expand-more.svg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="/images/dashboard-icon-3.png" alt="" />
                                        </div>
                                        <div class="col-md-4">Soffa</div>
                                        <div class="col-md-3">User</div>
                                        <div class="col-md-3">14 January 2020</div>
                                        <div class="col-md-1 d-none d-md-block">
                                            <img src="images/expand-more.svg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
