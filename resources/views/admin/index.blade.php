@extends('layouts.app')
@section('main')
<div class="container mt-3">
    <div class="row g-4 mb-4">
        <div class="col-3">
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

        <div class="col-3">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Total Mentor</h4>
                    <div class="stats-figure">{{$mentor}}</div>

                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
        <div class="col-3">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Total Section</h4>
                    <div class="stats-figure">{{$section}}</div>

                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div>
            <!--//app-card-->
        </div>
        <div class="col-3">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Total Departement</h4>
                    <div class="stats-figure">{{$departement}}</div>

                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
    </div>
    <div class="row justify-content-center">
        <div class="app-card app-card-chart h-100 shadow-sm col-5" style="margin-right: 2px">
            <div class="app-card-header p-3">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <h4 class="app-card-title">Pie Sebaran Mahasiswa Magang</h4>
                    </div>
                    <!--//col-->
    
                    <!--//col-->
                </div>
                <!--//row-->
            </div>
            <!--//app-card-header-->
            <div class="app-card-body p-3 p-lg-4">
    
                <div class="chart-container">
                    <canvas id="sebaran"></canvas>
                </div>
            </div>
            <!--//app-card-body-->
        </div>
        <div class="app-card app-card-chart h-100 shadow-sm col-5">
            <div class="app-card-header p-3">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <h4 class="app-card-title">Polar Sebaran Mahasiswa Magang</h4>
                    </div>
                    <!--//col-->
    
                    <!--//col-->
                </div>
                <!--//row-->
            </div>
            <!--//app-card-header-->
            <div class="app-card-body p-3 p-lg-4">
    
                <div class="chart-container">
                    <canvas id="bar-sebaran"></canvas>
                </div>
            </div>
            <!--//app-card-body-->
        </div>
    </div>
</div>
<script>
    const ctx = document.getElementById('sebaran');

    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['KRW1', 'KRW2', 'KRW3', 'SUNTER1', 'SUNTER2'],
            datasets: [{
                label: '# of Sebaran',
                data: [
                    {{ isset($krw1) ? $krw1->mahasiswa_count : 0 }},
                    {{ isset($krw2) ? $krw2->mahasiswa_count : 0 }},
                    {{ isset($krw3) ? $krw3->mahasiswa_count : 0 }},
                    {{ isset($sunter1) ? $sunter1->mahasiswa_count : 0 }},
                    {{ isset($sunter2) ? $sunter2->mahasiswa_count : 0 }},
                ],
                borderWidth: 1
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
<script>
    const dtx = document.getElementById('bar-sebaran');

    new Chart(dtx, {
        type: 'polarArea',
        data: {
            labels: ['KRW1', 'KRW2', 'KRW3', 'SUNTER1', 'SUNTER2'],
            datasets: [{
                label: '# of Sebaran',
                data: [
                    {{ isset($krw1) ? $krw1->mahasiswa_count : 0 }},
                    {{ isset($krw2) ? $krw2->mahasiswa_count : 0 }},
                    {{ isset($krw3) ? $krw3->mahasiswa_count : 0 }},
                    {{ isset($sunter1) ? $sunter1->mahasiswa_count : 0 }},
                    {{ isset($sunter2) ? $sunter2->mahasiswa_count : 0 }},
                ],
                borderWidth: 1
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
<script>
    // Fungsi untuk melakukan refresh otomatis setiap 30 detik
    function autoRefreshPage() {
        // Menggunakan fungsi setTimeout untuk menjadwalkan pemanggilan diri sendiri setiap 30 detik
        setTimeout(function() {
            // Memuat ulang halaman saat fungsi dipanggil
            location.reload();
        }, 30000); // 30 detik dalam milidetik (1000ms = 1 detik)
    }
    
    // Memanggil fungsi autoRefreshPage untuk pertama kali agar halaman dimuat ulang setelah 30 detik pertama
    autoRefreshPage();
</script>
@endsection