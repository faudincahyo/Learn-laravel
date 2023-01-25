<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
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
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
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

      <div class="container-fluid page-body-wrapper">
 
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar') 
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            
            
            <div class="container" align="center">
                @if (session()->has('message'))
        
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
        
                        {{ session()->get('message') }}
                    </div>
                    
                @endif

                <table>

                    <tr style="background-color: black; text-align:center;">
                        <td style="padding: 40px;">Title</td>
                        <td style="padding: 40px;">Description</td>
                        <td style="padding: 40px;">Quantity</td>
                        <td style="padding: 40px;">Price</td>
                        <td style="padding: 40px;">Image</td>
                        <td style="padding: 40px;">Update</td>
                        <td style="padding: 40px;">Delete</td>
                    </tr>

                    @foreach ($data as $product)
                        
                    
                    <tr align="center" style="background-color: grey;">
                        <td style="padding: 20px 0 5px;">{{ $product->title }}</td>
                        <td style="padding: 20px 0 5px 40px;">{{ $product->description }}</td>
                        <td style="padding: 20px 0 5px 40px;">{{ $product->quantity }}</td>
                        <td style="padding: 20px 0 5px 40px;">{{ $product->price }}</td>
                        <td>
                            <img style="padding: 20px;" height="200" width="200" src="/productimage/{{ $product->image }}">
                        </td>

                        <td>
                            <a class="btn btn-primary" href="{{  url('updateview', $product->id) }}">Update</a>
                        </td>

                        <td>
                            <a class="btn btn-danger" href="{{ url('deleteproduct', $product->id) }}">Delete</a>
                        </td>

                    </tr>
\
                    @endforeach


                </table>

            </div>

        </div>


        <!-- partial -->
        
          @include('admin.script')
  </body>
</html>