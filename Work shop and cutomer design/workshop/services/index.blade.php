@extends('user.components.app')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{url('design/user/img/carousel-bg-1.jpg')}});">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{route('site.home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('site.home')}}">Account</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Your Services</h1>
            </div>
            
            <div class="row g-4">
                
                <div class="col-md-12 wow fadeIn" data-wow-delay="0.1s">
                    <a href="{{route('workshop.services.create')}}" class="btn btn-success float-end mb-4">
                        <i class="fa fa-plus"></i> Add New One
                    </a>
                    <div class="clearfix"></div>
                    @if(Session::has('success'))
                    <div class="alert alert-success text-center text-success">
                       <i class="fa fa-check text-success"></i> {{Session::get('success')}}
                    </div>
                @endif  
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Service Type</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th class="text-center">Availability</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Service Type</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th class="text-center">Availability</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($services as $service)
                            <tr>
                                <td>{{ $service->serviceID }}</td>
                                <td>{{ $service->serviceType }}</td>
                                <td>{{ $service->description }}</td>
                                <td>{{ $service->price }}</td>
                                <td class="text-center">
                                  @if($service->isAvailable)
                                  <i class="fa fa-check text-success"></i>
                                  @else
                                  <i class="fa fa-times text-danger"></i>
                                  
                                  @endif
                                </td>
                                <td>
                                    <a href="{{route('workshop.services.edit', $service->serviceID)}}" class="btn btn-info" style="color: #FFF !important;">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <form action="{{ route('workshop.services.destroy', $service->serviceID) }}" class="sub{{$service->serviceID}}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger" onClick="confirmDelete({{$service->serviceID}});"><i class="fa fa-trash"></i></button>
                                    </form>
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