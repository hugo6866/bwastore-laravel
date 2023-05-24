@extends('layouts.admin')
@section('title')
    Create New User
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
                    <h2 class="dashboard-title">User</h2>
                    <p class="dashboard-subtitle">Create New User</p>
                </div>
                <div class="dashboard-content">
                    <div class="row">
                        <div class="col-md-12">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Name User</label>
                                                    <input type="text" name="name" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email User</label>
                                                    <input type="email" name="email" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password User</label>
                                                    <input type="password" name="password" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Roles</label>
                                                    <select name="roles" required class="form-control">
                                                        <option value="ADMIN">Admin</option>
                                                        <option value="USER">User</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-end">
                                                <button type="submit" class="btn btn-success px-5">
                                                    Save Now
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
