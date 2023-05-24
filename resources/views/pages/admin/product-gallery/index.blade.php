@extends('layouts.admin')
@section('title')
    Product Gallery
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
                    <h2 class="dashboard-title">Product Gallery</h2>
                    <p class="dashboard-subtitle">List of Product Gallery</p>
                </div>
                <div class="dashboard-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <a href="{{ route('product-gallery.create') }}" class="btn btn-primary mb-3">
                                        + Tambah Product Gallery Baru
                                    </a>
                                    <div class="table-responsive">
                                        <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Product</th>
                                                    <th>Photo</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script>
        var dataTable = $("#crudTable").dataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Error:', textStatus, errorThrown);
                    if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                        console.log('Custom message:', jqXHR.responseJSON.message);
                    }
                }
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'product.name',
                    name: 'product.name'
                },
                {
                    data: 'photos',
                    name: 'photos'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                }
            ]
        })
    </script>
@endpush
