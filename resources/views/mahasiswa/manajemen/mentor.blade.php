@extends('layouts.app')
@section('main')
<div class="container-xl">
    <div class="card mt-3">
        <div class="card-header d-flex justify-content-between">
            <h5>{{$title}}</h5>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                </svg>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah {{$title}}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Pengguna</label>
                                        <select class="select" aria-label="Default select example" name="user_id">
                                            <option value=""></option>
                                            @foreach ($user as $user)
                                            <option value="{{$user->id}}">{{$user->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">No Telp</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="no_telp" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Divisi</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="divisi" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Shop</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="shop" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Line</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="line" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Pos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="pos"
                                            required>
                                    </div>
                                    <div class="">
                                        <label for="exampleFormControlInput1" class="form-label">Nama GL</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="nama_gl" required>
                                    </div>
                                    <div class="">
                                        <label for="exampleFormControlInput1" class="form-label">Section</label>
                                        <select class="select" aria-label="Default select example"
                                            name="section_id" id="select-sec">
                                            <option value=""></option>
                                            @foreach ($sectionData as $section)
                                            <option value="{{$section->id}}">
                                                {{$section->user->nama}}/{{$section->nama_section}}/{{$section->departement->nama_departement}}/{{$section->departement->lokasi}}
                                            </option>
                                            @endforeach
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
        <div class="card-body table-responsive">
            <div class="d-flex justify-content-end mb-2">
                <div class="input-group" style="width: 250px;">
                    <form action="{{ url('mentor-search') }}" method="post" class="d-flex">
                        @csrf
                        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)"
                            name="cari">
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
                        <th scope="col">NIP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">GL</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{$item->user->nomor_induk}}</th>
                        <td>{{$item->user->nama}}</td>
                        <td>{{$item->nama_gl}}
                        </td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#exam{{$item->id}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye-fill text-white" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                    </svg>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exam{{$item->id}}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail {{$title}}
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{url('mahasiswa/manajemen/pilih-mentor')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="mentor_id"
                                                                value="{{$item->id}}" hidden>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Mentor</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="nama_pengguna"
                                                                value="{{$item->user->nama}}" readonly>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1" class="form-label">No
                                                                Telp</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="no_telp"
                                                                value="{{$item->no_telp}}" readonly>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Divisi</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="divisi"
                                                                value="{{$item->divisi}}" readonly>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Shop</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="shop"
                                                                value="{{$item->shop}}" readonly>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Line</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="line"
                                                                value="{{$item->line}}" readonly>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Pos</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="pos"
                                                                value="{{$item->pos}}" readonly>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Nama GL</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="nama_gl"
                                                                value="{{$item->nama_gl}}" readonly>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Section</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="section_id"
                                                                value="{{$item->section->user->nama}}/{{$item->section->nama_section}}/{{$item->section->departement->nama_departement}}/{{$item->section->departement->lokasi}}"
                                                                readonly>
                                                        </div>
                                                        <div class="">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Departement</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="section_id"
                                                                value="{{$item->departement->user->nama}}/{{$item->departement->nama_departement}}/{{$item->departement->lokasi}}"
                                                                readonly>
                                                        </div>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Pilih</button>
                                            </div>
                                            </form>
                                        </div>
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