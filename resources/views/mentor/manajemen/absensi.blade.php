@extends('layouts.app')
@section('main')
<div class="container-xl">
    <div class="card mt-3">
        <h5 class="card-header">{{$title}}</h5>
        <div class="card-body table-responsive">
            <div class="d-flex justify-content-end mb-2">
                <div class="input-group" style="width: 250px;">
                    <form action="{{ url('absensi-search') }}" method="post" class="d-flex">
                        @csrf
                        <input type="text" class="form-control"
                            aria-label="Dollar amount (with dot and two decimal places)" name="cari">
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
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{$item->created_at}}</th>
                        <td>{{$item->mahasiswa->user->nama}}</td>
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
                        <td>
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                data-bs-target="#example{{$item->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-square text-white" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                </svg>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="example{{$item->id}}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah {{$title}}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{url('mentor/manajemen/absensi/'.$item->id)}}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Mahasiswa</label>
                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" name="nama"
                                                            value="{{$item->mahasiswa->user->nama}}" readonly>
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="exampleFormControlInput1" class="form-label">No
                                                            Registrasi</label>
                                                        <input type="number" class="form-control"
                                                            id="exampleFormControlInput1" name="no_reg"
                                                            value="{{$item->mahasiswa->no_reg}}" readonly>
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Keterangan</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            name="keterangan" required>
                                                            <option value="{{$item->keterangan}}">{{$item->keterangan}}
                                                            </option>
                                                            <option value="masuk">masuk</option>
                                                            <option value="datang_terlambat">datang_terlambat</option>
                                                            <option value="izin">izin</option>
                                                            <option value="pulang">pulang</option>
                                                            <option value="pulang_cepat">pulang_cepat</option>
                                                            <option value="sakit_opname">sakit_opname</option>
                                                            <option value="sakit_cd">sakit_cd</option>
                                                            <option value="tidak_hadir">tidak_hadir</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Status</label>
                                                        <select class="form-select" aria-label="Default select example"
                                                            name="status" required>
                                                            <option value="{{$item->status}}">
                                                                {{$item->status}}</option>
                                                            <option value="accept">accept</option>
                                                            <option value="reject">reject</option>
                                                        </select>
                                                    </div>
                                                    @if ($item->gambar != null)
                                                    <div class="mb-2">
                                                        <img src="{{asset('absensi/'.$item->gambar)}}"
                                                            class="img-thumbnail" alt="..." width="50%" height="50%">
                                                    </div>
                                                    @endif
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
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