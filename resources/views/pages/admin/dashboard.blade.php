@extends('layouts.admin')
@section('title')
    Admin Dashboard
@endsection
@section('content')
    <div id="page-content-wrapper">
        @auth
            <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
                <div class="container-fluid">
                    <button class="btn btn-secondary d-md-none me-auto me-2" id="menu-toggle">
                        &laquo; Menu
                    </button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                        <span class="navbar-toggler-icon"></span>
                    </button>
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
                </div>
            </nav>
            <!--Section Content-->
            <div class="section-content section-dashboard-home" data-aos="fade-up">
                <div class="container-fluid">
                    <div class="dashboard-heading">
                        <h2 class="dashboard-title">Dashboard</h2>
                        <p class="dashboard-subtitle">This is BWAStore Admin Panel</p>
                    </div>
                    <div class="dashboard-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="dashboard-cart-title">Customer</div>
                                        <div class="dashboard-cart-subtitle">{{ $customer }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="dashboard-cart-title">Revenue</div>
                                        <div class="dashboard-cart-subtitle">${{ $revenue }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="dashboard-cart-title">Transaction</div>
                                        <div class="dashboard-cart-subtitle">{{ $transaction }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endauth
    </div>
@endsection
