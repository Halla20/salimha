@extends('user.components.app')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{url('design/user/img/carousel-bg-1.jpg')}});">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Orders</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{route('site.home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('site.home')}}">Account</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Orders</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Your Orders</h1>
            </div>
            
            <div class="row g-4">
                
                <div class="col-md-12 wow fadeIn" data-wow-delay="0.1s">
                    @if(Session::has('success'))
                    <div class="alert alert-success text-center text-success">
                       <i class="fa fa-check text-success"></i> {{Session::get('success')}}
                    </div>
                @endif  
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover text-center">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Shop Name</th>
                                <th class="text-center">Order Date</th>
                                <th class="text-center">Order Amount</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Shop Name</th>
                                <th class="text-center">Order Date</th>
                                <th class="text-center">Order Amount</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td class="text-center">{{ $order->orderID }}</td>
                                <td class="text-center">{{ $order->workshop->shopName }}</td>
                                <td class="text-center">{{ $order->orderDate }}</td>
                                <td class="text-center">{{ $order->orderAmount }}</td>
                               
                                <td class="text-center">
                                    
                                 
                                    <a href="{{ route('customer.orders.show', $order->orderID) }}" class="btn btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
<link rel="stylesheet" href="{{url('design/user/lib/datatables/dataTables.dataTables.min.css')}}">
@endsection

@section('js')
<script src="{{url('design/user/lib/datatables/dataTables.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $("#basic-datatables").DataTable({});
    });
</script>
@endsection