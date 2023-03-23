@extends('layouts.admin')
@section('title')
    Product
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
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <!--Desktop Menu-->
                    <ul class="navbar-nav d-none d-lg-flex ms-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                <img src="/images/product.png" alt="" class="rounded-circle me-2 profile-picture" />
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
                            <a href="#" class="nav-link"> Hi, Names </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link d-inlinfe-block"> Cart</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Section Content-->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
            <div class="container-fluid">
                <div class="dashboard-heading">
                    <h2 class="dashboard-title">Product</h2>
                    <p class="dashboard-subtitle">Edit Product</p>
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
                                    <form action="{{ route('product.update', $item->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Name Product</label>
                                                    <input type="text" name="name" class="form-control" required
                                                        value="{{ $item->name }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Owner Product</label>
                                                    <option value="{{ $item->users_id }}" selected>
                                                        {{ $item->user->name }}</option>
                                                    <select name="users_id" class="form-control">
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}"> {{ $user->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Category Product</label>
                                                    <option value="{{ $item->categories_id }}" selected>
                                                        {{ $item->category->name }}</option>
                                                    <select name="categories_id" class="form-control">

                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}"> {{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Product Price</label>
                                                    <input type="number" name="price" class="form-control" required
                                                        value="{{ $item->price }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Product Description</label>
                                                    <textarea name="description" id="editor">{!! $item->description !!}</textarea>
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

@push('addon-script')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

    <script>
        AOS.init();
        ClassicEditor.create(document.querySelector("#editor"))
            .then((editor) => {
                console.log(editor);
            })
            .catch((error) => {
                console.error(error);
            });
    </script>
@endpush
