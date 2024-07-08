@extends('user.components.app')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{url('design/user/img/carousel-bg-1.jpg')}});">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Add Spare Part</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{route('site.home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('site.home')}}">Account</a></li>
                        <li class="breadcrumb-item"><a href="{{route('workshop.spare_parts.index')}}">Spare Parts</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Add Spare Part</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Add Spare Part</h1>
            </div>
            <div class="row g-4">
                {!!  Form::open(['route' => ['workshop.spare_parts.store'],  'method'=> 'post', 'files' => true, 'class' => '']) !!}
                  <div class="row g-3">
                      @include('user.workshop.spare_parts.fields')
                  </div>
                {!! Form::close() !!}
                

               
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
@endsection

@section('js')

@endsection