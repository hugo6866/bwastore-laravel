@extends('layouts.dashboard')
@section('title')
    Store Dashboard Product Create
@endsection
@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">
                    Create New Products
                </h2>
                <p class="dashboard-subtitle">
                    Create your own product
                </p>
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
                                                <label for="">Product
                                                    Name</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Price</label>
                                                <input type="number" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Category</label>
                                                <select name="category" class="form-control">
                                                    <option value="" disabled>
                                                        Select
                                                        Category
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Description</label>
                                                <textarea id="editor">
                                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo a quis voluptas itaque provident sunt iste optio distinctio aspernatur, unde incidunt maxime eligendi mollitia earum reiciendis quam accusantium nobis expedita?
                                      Tempora minima expedita neque dicta, impedit voluptatum non illum nesciunt aut! Inventore, perspiciatis. Quae, minus nam quod itaque explicabo quisquam eius fugit natus libero dolorum vel et voluptates animi id!
                                      Accusantium ipsum rem deserunt amet iusto rerum nisi quidem? Animi aspernatur, ratione nulla ea magni, voluptatem soluta suscipit porro at saepe mollitia totam, ipsa libero architecto temporibus. Nobis, ullam modi.
                                    </textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Thumbnails</label>
                                                <input type="file" class="form-control" />
                                                <p class="text-muted">
                                                    Kamu memilih
                                                    lebih dari
                                                    satu file
                                                </p>
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

        function thisFileUpload() {
            document.getElementById("file").click();
        }
    </script>
@endpush
