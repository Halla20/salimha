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
    <div class="row invoice-title">
        <div class="col-sm-6">
            <h2>Invoice</h2>
        </div>
        <div class="col-sm-6 text-end">
            <img src="{{url('storage/' . $item->workshop->logo)}}" alt="Logo" class="invoice-logo">
        </div>
    </div>
    <hr>
    <div class="row mb-4">
        <div class="col-sm-6">
            <address>
                <strong>Billed To:</strong><br>
                {{$item->workshop->shopName}}<br>
                {{$item->workshop->address}}<br>
                {{$item->workshop->email}}
            </address>
        </div>
        <div class="col-sm-6 text-end">
            <address>
                <strong>Shipped To:</strong><br>
                {{$item->customer->firstName . ' ' . $item->customer->lastName}}<br>
                {{$item->customer->street}}<br>
                {{$item->customer->district}}, {{$item->customer->city}}<br>
                {{$item->customer->email}}
            </address>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-6">
            <address>
                <strong>Payment Method:</strong><br>
                {{$item->payment->paymentType}} ending **** 4242<br>
                {{$item->customer->email}}
            </address>
        </div>
        <div class="col-sm-6 text-end">
            <address>
                <strong>Order Date:</strong><br>
                {{ $item->orderDate }}<br>
                <strong>Order ID:</strong><br>
                {{$item->orderID}}
            </address>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-striped">
                 
                    <tbody>
                        @if($item->services)
                        <tr>
                            <th colspan="5" class="text-center">Order Services</th>
                        </tr>
                    <tr>
                        <th>#</th>
                        <th>Description</th>
                        <th class="text-end">Price</th>
                    </tr>
                    @php $total = 0; @endphp
                    @foreach($item->services as $k => $service)
                    @php $total += $service->service->price; @endphp
                    <tr>
                        <td>{{ $k + 1 }}</td>
                        <td>{{$service->service->description}}</td>
                        <td class="text-end">{{$service->service->price}}</td>
                    </tr>
                    @endforeach
                    @endif

                    @if($item->orderSpareParts)
                        <tr>
                            <th colspan="5" class="text-center">Order Spare Parts</th>
                        </tr>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th class="text-end">Price</th>
                    </tr>
                    @foreach($item->orderSpareParts as $k => $sp)
                    @php $total += $sp->sparePart->sparePartPrice; @endphp
                    <tr>
                        <td>{{ $k + 1 }}</td>
                        <td>{{$sp->sparePart->sparePartName}}</td>
                        <td class="text-end">{{$sp->sparePart->sparePartPrice}}</td>
                    </tr>
                    @endforeach
                    @endif
                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6 text-end">
            <table class="table">
                <tr>
                    <th>Subtotal:</th>
                    <td class="text-end">{{$total}}</td>
                </tr>
                <tr>
                    <th>Discount:</th>
                    <td class="text-end">0</td>
                </tr>
                <tr>
                    <th>Total:</th>
                    <td class="text-end"><strong>{{$item->orderAmount}}</strong></td>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12 text-center">
            <p class="mb-0">Thank you for your business!</p>
            <p>If you have any questions about this invoice, please contact us at support@example.com</p>
        </div>
    </div>
</div>
    </div>
@endsection

@section('css')
<link rel="stylesheet" href="{{url('design/user/lib/datatables/dataTables.dataTables.min.css')}}">
<style>
        .invoice-title {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .invoice-logo {
            height: 50px;
        }
        .table th {
            border-top: none;
        }
    </style>
@endsection

@section('js')
<script src="{{url('design/user/lib/datatables/dataTables.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $("#basic-datatables").DataTable({});
    });
</script>
@endsection