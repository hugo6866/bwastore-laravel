@extends('layouts.auth')

@section('content')
    <div class="page-content page-auth" id="register">
        <div class="section-store-auth" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center justify-content-center row-login">
                    <div class="col-lg-4">
                        <h2>
                            Memulai untuk jual beli <br />
                            dengan cara terbaru
                        </h2>
                        <form class="mt-3">
                            <div class="form-group">
                                <label for="">Full Name</label>
                                <input type="text" id="" class="form-control is-valid" v-model="name"
                                    autofocus />
                            </div>
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="email" id="" class="form-control is-invalid" v-model="email" />
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" id="" class="form-control" v-model="password" />
                            </div>
                            <div class="form-group">
                                <label for="">Store</label>
                                <p class="text-muted mb-0">
                                    Apakah anda juga ingin membuka toko?
                                </p>
                                <div class="form-check-inline">
                                    <input type="radio" class="custom-control-input" name="is_store_open"
                                        id="openStoreTrue" v-model="is_store_open" :value="true" />
                                    <label for="openStoreTrue" class="custom-control-label ms-1">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="custom-control-input" name="is_store_open"
                                        id="openStoreFalse" v-model="is_store_open" :value="false" />
                                    <label for="openStoreFalse" class="custom-control-label ms-1">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" v-if="is_store_open">
                                <label for="">Nama Toko</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group" v-if="is_store_open">
                                <label for="">Kategori</label>
                                <select name="category" id="" class="form-control">
                                    <option value="" disabled>Select Category</option>
                                </select>
                            </div>
                            <a href="/register.html" class="btn btn-success w-100 btn-block mt-4">
                                Sign Up Now
                            </a>
                            <a href="/login.html" class="btn btn-signup w-100 btn-block mt-2">
                                Back to Sign In
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="display: none">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('addon-script')
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-toast-notification@3"></script>
    <link href="https://cdn.jsdelivr.net/npm/vue-toast-notification@3/dist/theme-sugar.css" rel="stylesheet" />

    <script>
        const toast = VueToast.useToast();
        const app = Vue.createApp({
            data() {
                return {
                    name: "Joko Widodo",
                    email: "jokowi@gmail.com",
                    password: "",
                    is_store_open: true,
                    store_name: "",
                };
            },
            methods: {},
            mounted() {
                AOS.init();
                toast.open({
                    message: "Maaf, tampaknya email sudah terdaftar pada sistem kami.",
                    type: "error",
                    duration: 2000,
                    position: "top",
                });
            },
        });
        app.mount("#register");
    </script>
@endpush
