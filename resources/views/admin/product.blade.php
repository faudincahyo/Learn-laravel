<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css');

    <style>
        .title {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        .product-title {
            padding: 25px;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        .btn {
            color: white;
            background-color: rgb(43, 230, 43);

        }
    </style>

</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            {{-- <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a> --}}
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->


        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <h1 class="title">Add Product</h1>

                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('message') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                    </div>
                @endif

                <form action="{{ url('uploadproduct') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="product-title">
                        <label>Product Title</label>

                        <input style="color: black;" type="text" name="title" placeholder="Give a product title"
                            required>
                    </div>

                    <div class="product-title">
                        <label>Price</label>

                        <input style="color: black;" type="number" name="price" placeholder="Give a price" required>
                    </div>

                    <div class="product-title">
                        <label>Description</label>

                        <input style="color: black;" type="text" name="des" placeholder="Give a description"
                            required>
                    </div>

                    <div class="product-title">
                        <label>Quantity</label>

                        <input style="color: black;" type="text" name="quantity" placeholder="Product quantity"
                            required>
                    </div>

                    <div class="product-title">
                        <input type="file" name="file">
                    </div>

                    <div class="btn">
                        <input type="submit">
                    </div>
                </form>

            </div>

        </div>
        <!-- partial -->

        @include('admin.script')
</body>

</html>
