@extends('user.components.app')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{url('design/user/img/carousel-bg-1.jpg')}});">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Workshop Register</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{route('site.home')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Customer Register</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// New Customer //</h6>
                <h1 class="mb-5">Join to our family</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Booking //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>book@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// General //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Technical //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>tech@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <img src="{{url('design/user/log.jpg')}}" style="min-height: 350px;width:100%; border:0;" alt="" srcset="">
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <p class="mb-4">
                            All Data is required and it has to be valid data. just write you data and press register.</p>
                            @if ($errors->any())
                      <div class="alert alert-danger text-center">
                          @foreach ($errors->all() as $error)
                              <p>{{ $error }}</p>
                          @endforeach
                      </div>

                  @endif
                  @if(Session::has('flash_message'))
                      <div class="alert alert-warning text-center">
                            {{ Session::get('flash_message') }}
                      </div>
                      @endif
                        <form action="{{route('workshop.register.post')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="shopName" id="shopName" value="{{old('shopName')}}" placeholder="Shop Name">
                                        <label for="shopName">Shop Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="phoneNumber1" id="phoneNumber1" value="{{old('phoneNumber1')}}" placeholder="Phone Number 1">
                                        <label for="phoneNumber1">Phone Number 1</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="phoneNumber2" id="phoneNumber2" value="{{old('phoneNumber2')}}" placeholder="Phone Number 2">
                                        <label for="phoneNumber2">Phone Number 2</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" placeholder="Your Password">
                                        <label for="password">Your Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="address" id="address" value="{{old('address')}}" placeholder="Address">
                                        <label for="address">Address</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="location_on_map" id="location_on_map" value="{{old('location_on_map')}}" placeholder="Location on map">
                                        <label for="location_on_map">Location on map</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="city" name="city" value="{{old('city')}}" placeholder="Your City">
                                        <label for="city">City</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="commercialRegistration" id="commercialRegistration" value="{{old('commercialRegistration')}}" placeholder="Your District">
                                        <label for="commercialRegistration">Commercial Registration</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="taxNumber" id="taxNumber" value="{{old('taxNumber')}}" placeholder="Tax Number">
                                        <label for="taxNumber">Tax Number</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="shop_type" id="shop_type" value="{{old('shop_type')}}" placeholder="Shop Type">
                                        <label for="shop_type">Shop Type</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="file" name="logo" id="logo" class="form-control">
                                        <label for="logo">Logo</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Register</button>
                                </div>
                                <div class="col-12">
                                    <p>Have an account ? <a href="{{route('workshop.login')}}">login now.</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
