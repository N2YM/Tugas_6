<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ url('public') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ url('public') }}/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      
     {{-- Navbar Start --}}
      @include('section.navbar')
     {{-- Navbar End --}}

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       
        @include('section.sidebar')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  @include('template.utils.notif')
                </div>
              </div>
            </div>
            @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         
          {{-- Footer Start --}}
          @include('section.footer')
          {{-- Footer End --}}

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ url('public') }}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ url('public') }}/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ url('public') }}/assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ url('public') }}/assets/js/off-canvas.js"></script>
    <script src="{{ url('public') }}/assets/js/hoverable-collapse.js"></script>
    <script src="{{ url('public') }}/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ url('public') }}/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    {{--  Data Tables --}}
    <script src="{{ url('public') }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
     $(".table-datatable").DataTables();
  </body>
</html>