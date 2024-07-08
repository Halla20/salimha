

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('design/user/lib/wow/wow.min.js')}}"></script>
    <script src="{{url('design/user/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('design/user/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('design/user/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{url('design/user/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('design/user/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{url('design/user/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{url('design/user/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('design/user/js/main.js')}}"></script>
    <script src="{{url('design/user/lib/sweetalert/sweetalert.min.js')}}"></script>
    <script>
      function confirmDelete(id){
        swal({
              title: "Are you sure?",
              text: "You won't be able to revert this!",
              type: "warning",
              buttons: {
                cancel: {
                  visible: true,
                  text: "No, cancel!",
                  className: "btn btn-danger",
                },
                confirm: {
                  text: "Yes, delete it!",
                  className: "btn btn-success",
                },
              },
            }).then((willDelete) => {
              if (willDelete) {
                $('.sub'+id).submit();
              } else {
                swal("Your data totally is safe!", {
                  buttons: {
                    confirm: {
                      className: "btn btn-success",
                    },
                  },
                });
              }
            });
      }
    </script>
    @yield('js')