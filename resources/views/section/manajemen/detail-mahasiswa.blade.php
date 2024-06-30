@extends('layouts.app')
@section('main')
<div class="container-xl">
    <div class="card mt-3">
        <h5 class="card-header">Absensi</h5>
        <div class="card-body table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">NOREG</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($absensi as $item)
                    <tr>
                        <th scope="row">{{$item->mahasiswa->no_reg}}</th>
                        <td>{{$item->keterangan}}</td>
                        <td>
                            @if ($item->status == 'pending')
                            <button class="btn btn-warning disabled">Pending</button>
                            @elseif ($item->status == 'accept')
                            <button class="btn btn-info disabled">Accept</button>
                            @else
                            <button class="btn btn-danger disabled">Reject</button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <ul class="pagination justify-content-center">
                <!-- Tombol "Previous" -->
                @if ($absensi->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" href="{{ $absensi->previousPageUrl() }}" rel="prev">Previous</a>
                </li>
                @endif

                <!-- Tombol nomor halaman -->
                @php
                $start = max($absensi->currentPage() - 2, 1);
                $end = min($absensi->currentPage() + 2, $absensi->lastPage());
                @endphp

                @if($start > 1)
                <li class="page-item">
                    <a class="page-link" href="{{ $absensi->url(1) }}">1</a>
                </li>
                @if($start > 2)
                <li class="page-item disabled">
                    <span class="page-link">...</span>
                </li>
                @endif
                @endif

                @for ($i = $start; $i <= $end; $i++) @if ($i==$absensi->currentPage())
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">{{ $i }}</span>
                    </li>
                    @else
                    <li class="page-item"><a class="page-link" href="{{ $absensi->url($i) }}">{{ $i }}</a></li>
                    @endif
                    @endfor

                    @if($end < $absensi->lastPage())
                        @if($end < $absensi->lastPage() - 1)
                            <li class="page-item disabled">
                                <span class="page-link">...</span>
                            </li>
                            @endif
                            <li class="page-item">
                                <a class="page-link" href="{{ $absensi->url($absensi->lastPage()) }}">{{
                                    $absensi->lastPage() }}</a>
                            </li>
                            @endif

                            <!-- Tombol "Next" -->
                            @if ($absensi->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $absensi->nextPageUrl() }}" rel="next">Next</a>
                            </li>
                            @else
                            <li class="page-item disabled">
                                <span class="page-link">Next</span>
                            </li>
                            @endif
            </ul>
        </div>
    </div>
    <div class="card mt-2">
        <h5 class="card-header">Data</h5>
        <div class="card-body">
            <div class="row">
                @if ($mahasiswa->user->photo != null)
                <div class="col-6">
                    <img src="{{asset('profil/'.$mahasiswa->user->photo)}}" class="img-thumbnail" alt="..." width="50%"
                        height="50%">
                </div>
                @endif
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label"><strong>Nama</strong></label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        value="{{$mahasiswa->user->nama}}" readonly>
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label"><strong>NIM</strong></label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        value="{{$mahasiswa->user->nomor_induk}}" readonly>
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label"><strong>No Registrasi</strong></label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$mahasiswa->no_reg}}"
                        readonly>
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label"><strong>Batch</strong></label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$mahasiswa->batch}}"
                        readonly>
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label"><strong>Shift</strong></label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$mahasiswa->shift}}"
                        readonly>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection