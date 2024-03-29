@extends('layouts.app')

@section('title')
    Store Detail Page
@endsection
@section('content')
    <div class="page-content page-details" id="app">
        <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Product Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="store-gallery mb-3" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8" data-aos="zoom-in">
                        <transition name="slide-fade" mode="out-in">
                            <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" class="w-100 main-image"
                                alt="" />
                        </transition>
                    </div>
                    <div class="col-lg-2">
                        <div class="row">
                            <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(x,index) in photos" :key="x.id"
                                data-aos="zoom-in" data-aos-delay="100">
                                <a href="#" @click="changeActive(index)">
                                    <img :src="x.url" class="w-100 thumbnail-image"
                                        :class="{ active: index == activePhoto }" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="store-details-container" data-aos="fade-up">
            <section class="store-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h1>{{ $product->name }}</h1>
                            <div class="owner">By {{ $product->user->store_name }}</div>
                            <div class="price">${{ number_format($product->price) }}</div>
                        </div>
                        @auth
                            <div class="col-lg-2" data-aos="zoom-in">
                                <form action="{{ route('detail-add', $product->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit" class="btn btn-success px-4 text-white btn-block mb-3">Add to
                                        cart</button>
                                </form>
                            </div>
                        @else
                            <div class="col-lg-2" data-aos="zoom-in">
                                <a href="{{ route('login') }}" class="btn btn-success px-4 text-white btn-block mb-3">
                                    Add to Cart
                                </a>
                            </div>
                        @endauth

                    </div>
                </div>
            </section>
            <section class="store-description">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            {!! $product->description !!}
                        </div>
                    </div>
                </div>
            </section>
            <section class="store-review">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8 mt-3 mb-3">
                            <h5>Customer Review (3)</h5>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <ul class="list-unstyled">
                            <li class="media d-flex">
                                <div class="media-image">
                                    <img src="/images/icon-testi-1.png" alt=""
                                        class="me-3 rounded-circle img-fluid" />
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">Hazza Risky</h5>
                                    <p class="mb-0">
                                        I thought it was not good for living room. I really
                                        happy to decided buy this product last week now feels
                                        like homey.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script>
        const app = Vue.createApp({
            data() {
                return {
                    activePhoto: 0,
                    photos: [
                        @foreach ($product->galleries as $gallery)
                            {
                                id: {{ $gallery->id }},
                                url: "{{ Storage::url($gallery->photos) }}",
                            }
                        @endforeach

                    ],
                };
            },
            methods: {
                changeActive(id) {
                    this.activePhoto = id;
                },
            },
            mounted() {
                console.log(this.photos);
                AOS.init();
            },
        });
        app.mount("#app");
    </script>
@endpush
