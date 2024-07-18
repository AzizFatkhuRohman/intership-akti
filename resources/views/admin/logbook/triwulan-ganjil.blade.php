@extends('layouts.app')
@section('main')
<div class="container-xl">
    <div class="card mt-3">
        <div class="card-header d-flex justify-content-between">
            <h5>{{$title}}</h5>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
                    <path
                        d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708" />
                </svg>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Export {{$title}}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('admin/logbook/triwulan/export')}}" method="post">
                                @csrf
                                <select class="form-select" aria-label="Default select example" name="waktu">
                                    <option selected>Pilih waktu</option>
                                    <option value="minggu">Minggu ini</option>
                                    <option value="bulan">Bulan ini</option>
                                    <option value="Tahun">Tahun ini</option>
                                </select>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Unduh</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">NOREG</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Periode</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th>
                            {{$item->mahasiswa->no_reg}}
                        </th>
                        <td>{{$item->mahasiswa->user->nama}}</td>
                        <td>{{$item->periode}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            @if ($item->status == 'pending')
                            <button class="btn btn-warning btn-sm disabled">Pending</button>
                            @elseif ($item->status == 'accept_sec')
                            <button class="btn btn-info disabled">Accept Section</button>
                            @elseif ($item->status == 'reject_sec')
                            <button class="btn btn-danger disabled">Reject Section</button>
                            @elseif ($item->status == 'accept_dep')
                            <button class="btn btn-info disabled">Accept Departement</button>
                            @elseif ($item->status == 'reject_dep')
                            <button class="btn btn-danger disabled">Reject Departement</button>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{url('admin/logbook/triwulan/'.$item->id)}}" class="btn btn-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye-fill text-white" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <ul class="pagination justify-content-center">
                <!-- Tombol "Previous" -->
                @if ($data->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" href="{{ $data->previousPageUrl() }}" rel="prev">Previous</a>
                </li>
                @endif

                <!-- Tombol nomor halaman -->
                @php
                $start = max($data->currentPage() - 2, 1);
                $end = min($data->currentPage() + 2, $data->lastPage());
                @endphp

                @if($start > 1)
                <li class="page-item">
                    <a class="page-link" href="{{ $data->url(1) }}">1</a>
                </li>
                @if($start > 2)
                <li class="page-item disabled">
                    <span class="page-link">...</span>
                </li>
                @endif
                @endif

                @for ($i = $start; $i <= $end; $i++) @if ($i==$data->currentPage())
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">{{ $i }}</span>
                    </li>
                    @else
                    <li class="page-item"><a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a></li>
                    @endif
                    @endfor

                    @if($end < $data->lastPage())
                        @if($end < $data->lastPage() - 1)
                            <li class="page-item disabled">
                                <span class="page-link">...</span>
                            </li>
                            @endif
                            <li class="page-item">
                                <a class="page-link" href="{{ $data->url($data->lastPage()) }}">{{
                                    $data->lastPage() }}</a>
                            </li>
                            @endif

                            <!-- Tombol "Next" -->
                            @if ($data->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $data->nextPageUrl() }}" rel="next">Next</a>
                            </li>
                            @else
                            <li class="page-item disabled">
                                <span class="page-link">Next</span>
                            </li>
                            @endif
            </ul>
        </div>
    </div>
</div>
@endsection