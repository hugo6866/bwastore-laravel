@extends('layouts.dashboard')
@section('title')
    Store Dashboard
@endsection
@section('content')
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
            <div class="container-fluid">
                <button class="btn btn-secondary d-md-none me-auto me-2" id="menu-toggle">
                    &laquo; Menu
                </button>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @auth
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <!--Desktop Menu-->
                        <ul class="navbar-nav d-none d-lg-flex ms-auto">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                    <img src="/images/user.png" alt="" class="rounded-circle me-2 profile-picture" />
                                    Hi, {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu">
                                    <a href="/dashboard.html" class="dropdown-item">Dashboard</a>
                                    <a href="/dashboard-account.html" class="dropdown-item">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="/" class="dropdown-item">Logout</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link d-inline-block mt-2">
                                    <img src="images/icon-cart-filled.svg" alt="" />
                                    <div class="card-badge">3</div>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav d-block d-lg-none">
                            <li class="nav-item">
                                <a href="#" class="nav-link"> Hi, {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link d-inline-block"> Cart</a>
                            </li>
                        </ul>
                    </div>
                @endauth
            </div>
        </nav>
        <!--Section Content-->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
            <div class="container-fluid">
                <div class="dashboard-heading">
                    <h2 class="dashboard-title">Dashboard</h2>
                    <p class="dashboard-subtitle">Look what you have made today!</p>
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
@endsection
