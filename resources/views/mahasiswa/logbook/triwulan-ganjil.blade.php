@extends('layouts.app')
@section('main')
<div class="container-xl">
    <div class="card mt-3">
        <h5 class="card-header">{{$title}}</h5>
        <div class="card-body table-responsive">
            <div class="d-flex justify-content-end mb-2">
                <div class="input-group" style="width: 250px;">
                    <form action="{{ url('triwulan-search') }}" method="post" class="d-flex">
                        @csrf
                        <select class="form-select" aria-label="Default select example" name="cari">
                            <option selected>Filter sesuai status</option>
                            <option value="pending">Pending</option>
                            <option value="accept_sec">Acc Section</option>
                            <option value="accept_dep">Acc Departement</option>
                            <option value="reject_sec">Reject Section</option>
                            <option value="reject_dep">Reject Departement</option>
                        </select>
                        <button type="submit" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">NOREG</th>
                        <th scope="col">Nama</th>
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
                        <td>
                            @if ($item->status == 'pending')
                            <button class="btn btn-warning disabled">Pending</button>
                            @elseif($item->status == 'accept_sec')
                            <button class="btn btn-info disabled">Accept Section</button>
                            @elseif($item->status == 'reject_sec')
                            <button class="btn btn-danger disabled">Reject Section</button>
                            @elseif($item->status == 'accept_dep')
                            <button class="btn btn-info disabled">Accept Departement</button>
                            @elseif($item->status == 'reject_dep')
                            <button class="btn btn-danger disabled">Reject Departement</button>
                            @endif
                        </td>
                        <td>
                            @if ($item->status == 'pending' || $item->status == 'accept_sec' || $item->status ==
                            'accept_dep')
                            <a href="{{url('mahasiswa/logbook/triwulan/'.$item->id)}}" target="__blank" class="btn btn-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-eye-fill text-white" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                    <path
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                </svg>
                            </a>
                            @endif
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