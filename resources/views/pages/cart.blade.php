@extends('layouts.app')
@section('title')
    Store Cart Page
@endsection
@section('content')
    <div class="page-content page-cart">
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
        <section class="store-cart">
            <div class="container">
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-12 table-responsive">
                        <table class="table border-less table-cart">
                            <thead>
                                <tr>
                                    <td>Image</td>
                                    <td>Name &amp; Seller</td>
                                    <td>Price</td>
                                    <td>Menu</td>
                                </tr>
                            </thead>
                            <tbody>
                                @php $totalPrice = 0 @endphp
                                @foreach ($carts as $cart)
                                    @if ($cart->product)
                                        <tr>
                                            <td style="width: 25%">
                                                @if ($cart->product->galleries)
                                                    <img src="{{ Storage::url($cart->product->galleries->first()->photos) }}"
                                                        alt="" class="cart-image w-100" />
                                                @endif
                                            </td>
                                            <td style="width: 35%">
                                                <div class="product-title">{{ $cart->product->name }}</div>
                                                <div class="product-subtitle">by {{ $cart->product->user->store_name }}
                                                </div>
                                            </td>
                                            <td style="width: 35%">
                                                <div class="product-title">${{ number_format($cart->product->price) }}</div>
                                                <div class="product-subtitle">USD</div>
                                            </td>
                                            <td style="width: 25%">
                                                <form action="{{ route('cart-delete', $cart->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-remove-cart">Remove</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @php $totalPrice += $cart->product->price @endphp
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-12">
                        <hr />
                    </div>
                    <div class="col-12">
                        <h2 class="mb-4">Shipping Details</h2>
                    </div>
                </div>
                <form action="">
                    <div class="row mb-2" data-aos="fade-up" data-aos-delay="200" id="locations">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address_one">Address 1</label>
                                <input type="text" class="form-control mt-2 mb-2" id="address_one" name="address_one"
                                    value="Setra Duta Cemara" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address_two">Address 2</label>
                                <input type="text" class="form-control mt-2 mb-2" id="address_two" name="address_two"
                                    value="Blok B No. 34" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="provinces_id">Province</label>
                                <select name="provinces_id" id="provinces_id" class="form-control mt-2 mb-2"
                                    :v-if="provinces" v-model="provinces_id">
                                    <option v-for="province in provinces" :value="provinces.id">@{{ province.name }}
                                    </option>
                                    <select v-else class="form-control"></select>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="regencies_id">City</label>
                                <input type="text" class="form-control mt-2 mb-2" id="regencies_id" name="regencies_id"
                                    value="Bandung" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="zip_code">Postal Code</label>
                                <input type="text" class="form-control mt-2 mb-2" id="zip_code" name="zip_code"
                                    value="53243" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" class="form-control mt-2 mb-2" id="country" name="country"
                                    value="Indonesia" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone_number">Mobile</label>
                                <input type="text" class="form-control mt-2 mb-2" id="phone_number" name="phone_number"
                                    value="+62 8932 4212 6323" />
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="150">
                        <div class="col-12">
                            <hr />
                        </div>
                        <div class="col-12">
                            <h2 class="mb-2">Payment Informations</h2>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-4 col-md-2">
                            <div class="product-title">$10</div>
                            <div class="product-subtitle">Country Tax</div>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="product-title">$280</div>
                            <div class="product-subtitle">Product Insurancce</div>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="product-title">$500</div>
                            <div class="product-subtitle">Ship to Jakarta</div>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="product-title text-success">${{ number_format($totalPrice ?? 0) }}</div>
                            <div class="product-subtitle">Total</div>
                        </div>
                        <div class="col-8 col-md-3">
                            <a href="/success.html" class="btn btn-success mt-4 px-4 btn-block">Checkout Now</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection

@push('addon-script')
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>

    <script>
        const app = Vue.createApp({
            data() {
                return {
                    provinces: null,
                    regencies: null,
                    provinces_id: null,
                    regencies_id: null,
                };
            },
            methods: {
                async getProvincesData() {
                    try {
                        const response = await axios.get('{{ route('api-provinces') }}');
                        this.provinces = response.data;
                    } catch (error) {
                        console.error('Error fetching provinces:', error);
                    }
                },
                getRegenciesData() {
                    axios.get('{{ url('api/regencies') }}/' + 1)
                        .then(function(response) {
                            this.regencies = response.data;
                        })
                }
            },
            mounted() {
                AOS.init();
                this.getProvincesData();

            },
            watch: {
                provinces_id: function(val, oldVal) {
                    this.regencies_id = null;
                    this.getRegenciesData();
                }
            }
        });
        app.mount("#locations");
    </script>
@endpush
