<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body class="app">
    @include('layouts.side')
    <div class="app-wrapper">
        @if (session('sukses'))
        <script>
            Swal.fire({
        title: 'Sukses',
        text: '{{ session('sukses') }}',
        icon: 'success',
        confirmButtonText: 'OK'
    });
        </script>
        @endif
        @yield('main')
        @include('layouts.foot')
    </div>
    <!--//app-wrapper-->
    <!-- Javascript -->
    <script src="{{asset('assets/plugins/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Charts JS -->
    <script src="{{asset('assets/plugins/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('assets/js/index-charts.js')}}"></script>

    <!-- Page Specific JS -->
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script>
        function logout() {
          Swal.fire({
              title: 'Konfirmasi',
              text: 'Apakah Anda yakin ingin keluar?',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yakin!',
              cancelButtonText: 'Batal'
          }).then((result) => {
              if (result.isConfirmed) {
                  document.getElementById('logout').submit();
              }
          });
          
      }
    </script>
    <script>
        $(document).ready(function () {
        $('.select').selectize({
            sortField: 'text'
        });
    });
    </script>
</body>

</html>