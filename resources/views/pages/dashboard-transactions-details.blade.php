@extends('layouts.dashboard')
@section('title')
    Store Dashboard Transaction Details
@endsection
@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up" id="app">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">#STORE0832</h2>
                <p class="dashboard-subtitle">Transactions Details</p>
            </div>
            <div class="dashboard-content" id="transactionDetails">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="/images/product-details-dashboard.png" alt=""
                                            class="w-100 mb-3" />
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Customer Name</div>
                                                <div class="product-subtitle">First Last</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Product Name</div>
                                                <div class="product-subtitle">Shirup</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                    Date Transaction
                                                </div>
                                                <div class="product-subtitle">
                                                    3 February, 2023
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Payment Status</div>
                                                <div class="product-subtitle text-danger">
                                                    Pending
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Total Amount</div>
                                                <div class="product-subtitle text-danger">
                                                    $280,420
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <h5>Shipping Information</h5>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Address 1</div>
                                                <div class="product-subtitle">
                                                    Lorem, ipsum.
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Address 2</div>
                                                <div class="product-subtitle">
                                                    Lorem, ipsum.
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Province</div>
                                                <div class="product-subtitle">West Java</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">City</div>
                                                <div class="product-subtitle">Semarang</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Postal Code</div>
                                                <div class="product-subtitle">12322</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Country</div>
                                                <div class="product-subtitle">Indonesia</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="d-flex flex-md-row flex-column align-items-start">
                                                    <div class="product-title col-md-3 mb-3 mb-md-0">
                                                        Shipping status
                                                        <select name="status" id="" class="form-control"
                                                            v-model="status">
                                                            <option value="UNPAID">Unpaid</option>
                                                            <option value="PENDING">Pending</option>
                                                            <option value="SHIPPING">Shipping</option>
                                                            <option value="SUCCESS">Success</option>
                                                        </select>
                                                    </div>
                                                    <template v-if="status == 'SHIPPING'">
                                                        <div class="col-md-6 ms-md-3">
                                                            <div class="product-title">
                                                                Input Resi
                                                            </div>
                                                            <div class="form-group d-flex">
                                                                <input type="text" class="form-control me-2"
                                                                    name="resi" v-model="resi" />
                                                                <button class="btn btn-success">
                                                                    Update Resi
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-success mt-4 btn-lg">
                                            Save Now
                                        </button>
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
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script>
        const app = Vue.createApp({
            data() {
                return {
                    status: "Shipping",
                    resi: "JWR2395I2AZCSD",
                };
            },
            methods: {},
            mounted() {
                AOS.init();
            },
        });
        app.mount("#app");
    </script>
@endpush
