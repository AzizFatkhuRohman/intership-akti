@extends('layouts.app')
@section('main')
<div class="container-xl">

    <h1 class="app-page-title">{{$title}}</h1>


    <!--//app-card-->

    <div class="row g-4 mb-4">
        <div class="col-4">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Total Mahasiswa</h4>
                    <div class="stats-figure">{{$mahasiswa}}</div>

                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->

        <div class="col-4">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Total Absensi</h4>
                    <div class="stats-figure">{{$absensi}}</div>

                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
        <div class="col-4">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Total Logbook</h4>
                    <div class="stats-figure">{{$logbook}}</div>

                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
    </div>
    <div class="app-card app-card-chart h-100 shadow-sm">
        <div class="app-card-header p-3">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <h4 class="app-card-title">Chart Absensi</h4>
                </div>
                <!--//col-->

                <!--//col-->
            </div>
            <!--//row-->
        </div>
        <!--//app-card-header-->
        <div class="app-card-body p-3 p-lg-4">

            <div class="chart-container">
                <canvas id="absensi"></canvas>
            </div>
        </div>
        <!--//app-card-body-->
    </div>
    <!--//row-->

</div>
<script>
    const ctx = document.getElementById('absensi');
  
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: [{
          label: '# of Absensi', // Sesuaikan label sesuai kebutuhan Anda
          data: [{{ $janabs }}, {{ $febabs }}, {{ $marabs }}, {{ $aprabs }}, {{ $meiabs }}, {{ $junabs }}, {{ $julabs }}, {{ $agusabs }}, {{ $sepabs }}, {{ $oktabs }}, {{ $novabs }}, {{ $desabs }}],
          borderWidth: 1,
          backgroundColor: '#800000', // Sesuaikan warna sesuai keinginan Anda
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
</script>
@endsection