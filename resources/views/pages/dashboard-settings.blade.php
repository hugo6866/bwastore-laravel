@extends('layouts.dashboard')
@section('title')
    Store Dashboard Settings
@endsection
@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Store Settings</h2>
                <p class="dashboard-subtitle">Make store that profitable</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Store Name</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Category</label>
                                                <select name="category" class="form-control">
                                                    <option value="" disabled>
                                                        Select Category
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="">Store Status</label>
                                            <p class="text-muted mb-0">
                                                Do you want to close the store?
                                            </p>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="is_store_open"
                                                    id="openStoreTrue" value="true" />
                                                <label class="form-check-label" for="openStoreTrue">Open</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="is_store_open"
                                                    id="openStoreFalse" value="false" />
                                                <label class="form-check-label" for="openStoreFalse">Temporary
                                                    Closed</label>
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
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
