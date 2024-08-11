@extends('layouts.app')
@section('main')
<div class="container-xl">

    <h1 class="app-page-title">{{$title}}</h1>

    @if (!$mahasiswa)
    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
        <div class="inner">
            <div class="app-card-body p-3 p-lg-4">
                <h3 class="mb-3">Welcome, {{Auth::user()->nama}}!</h3>
                <div class="row gx-5 gy-3">
                    <div class="col-12 col-lg-9">

                        <div>Lengkapi profilmu terlebih dahulu sebelum memulai aktifitas</div>
                    </div>
                    <!--//col-->
                    <div class="col-12 col-lg-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Lengkapi
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Lengkapi profil</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{url('mahasiswa/data')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="exampleFormControlInput1"
                                                        class="form-label">Mentor</label>
                                                    <select class="select" aria-label="Default select example"
                                                        name="mentor_id" required>
                                                        @foreach ($mentor as $item)
                                                        <option value="{{$item->id}}">
                                                            {{$item->user->nama}}/{{$item->departement->nama_departement}}/{{$item->departement->lokasi}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <label for="exampleFormControlInput1"
                                                        class="form-label">Dosen</label>
                                                    <select class="select" aria-label="Default select example"
                                                        name="dosen_id" required>
                                                        @foreach ($dosen as $d)
                                                        <option value="{{$d->id}}">{{$d->user->nama}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">No
                                                            Registrasi</label>
                                                        <input type="number" class="form-control"
                                                            id="exampleFormControlInput1" name="no_reg">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Batch</label>
                                                        <input type="number" class="form-control"
                                                            id="exampleFormControlInput1" name="batch">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="exampleFormControlInput1"
                                                        class="form-label">Shift</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="shift" required>
                                                        <option value="red">red</option>
                                                        <option value="white">white</option>
                                                        <option value="non">non</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <label for="exampleFormControlInput1"
                                                        class="form-label">Prodi</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="prodi" required>
                                                        <option value="tpmo">tpmo</option>
                                                        <option value="topkr">topkr</option>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//col-->
                </div>
                <!--//row-->
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <!--//app-card-body-->

        </div>
        <!--//inner-->
    </div>
    @endif
    <!--//app-card-->

    <div class="row g-4 mb-4">
        <div class="col-6">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Total Absensi</h4>
                    @if ($mahasiswa != null)
                    <div class="stats-figure">{{$absensi}}</div>
                    @endif

                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->

        <div class="col-6">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Total Logbook</h4>
                    @if ($mahasiswa != null)
                    <div class="stats-figure">{{$logbook}}</div>
                    @endif

                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->

        <!--//col-->
    </div>
    <!--//row-->
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

</div>
@if ($mahasiswa != null)
<script>
    const ctx = document.getElementById('absensi');
  
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: [{
          label: '# of Logbooks', // Sesuaikan label sesuai kebutuhan Anda
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
@endif
@endsection