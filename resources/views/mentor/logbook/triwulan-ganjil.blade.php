@extends('layouts.app')
@section('main')
<div class="container-xl">
    <div class="card mt-3">
        <div class="card-header d-flex justify-content-between">
            <h5>{{$title}}</h5>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
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
                            <form action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Mahasiswa</label>
                                        <select class="select" aria-label="Default select example"
                                            name="mahasiswa_id" required>
                                            @foreach ($mahasiswa as $m)
                                            <option value="{{$m->id}}">{{$m->user->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Periode</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="periode" value="2024 s/d 2025" maxlength="30" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Actual Safety</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1"
                                            name="actual_safety" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Remarks Safety</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="remarks_safety" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Actual Quality</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1"
                                            name="actual_quality" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Remarks Quality</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="remarks_quality" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Actual
                                            Productivity</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1"
                                            name="actual_productivity" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Remarks
                                            Productivity</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="remarks_productivity" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Actual Cost</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1"
                                            name="actual_cost" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Remarks Cost</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="remarks_cost" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Actual Moral</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1"
                                            name="actual_moral" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Remarks Moral</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="remarks_moral" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Actual Lima R</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1"
                                            name="actual_lima_r" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Remarks Lima R</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="remarks_lima_r" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Range</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="range" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Strong</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="strong" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Weakness</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="weakness" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Skill</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="skill" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Knowledge</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="knowledge" required>
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
                            @elseif ($item->status == 'reject_sec')
                            <button class="btn btn-danger disabled">Reject Departement</button>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex">
                                @if ($item->status == 'pending' || $item->status == 'reject_sec' || $item->status ==
                                'reject_dep')

                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#exam{{$item->id}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pencil-square text-white" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                    </svg>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exam{{$item->id}}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah {{$title}}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{url('mentor/logbook/triwulan-ganjil/'.$item->id)}}"
                                                    method="post">
                                                    @method('put')
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Mahasiswa</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="periode"
                                                                maxlength="30" value="{{$item->mahasiswa->user->nama}}"
                                                                readonly>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Periode</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="periode"
                                                                value="2024 s/d 2025" maxlength="30"
                                                                value="{{$item->periode}}" readonly>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Actual
                                                                Safety</label>
                                                            <input type="number" class="form-control"
                                                                id="exampleFormControlInput1" name="actual_safety"
                                                                value="{{$item->actual_safety}}" required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Remarks
                                                                Safety</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                value="{{$item->remarks_safety}}" name="remarks_safety"
                                                                required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Actual
                                                                Quality</label>
                                                            <input type="number" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                value="{{$item->actual_quality}}" name="actual_quality"
                                                                required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Remarks
                                                                Quality</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                value="{{$item->remarks_quality}}"
                                                                name="remarks_quality" required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Actual
                                                                Productivity</label>
                                                            <input type="number" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                value="{{$item->actual_productivity}}"
                                                                name="actual_productivity" required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Remarks
                                                                Productivity</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                value="{{$item->remarks_productivity}}"
                                                                name="remarks_productivity" required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Actual
                                                                Cost</label>
                                                            <input type="number" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                value="{{$item->actual_cost}}" name="actual_cost"
                                                                required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Remarks
                                                                Cost</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                value="{{$item->remarks_cost}}" name="remarks_cost"
                                                                required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Actual
                                                                Moral</label>
                                                            <input type="number" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                value="{{$item->actual_moral}}" name="actual_moral"
                                                                required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Remarks
                                                                Moral</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                value="{{$item->remarks_moral}}" name="remarks_moral"
                                                                required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Actual
                                                                Lima R</label>
                                                            <input type="number" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                value="{{$item->actual_lima_r}}" name="actual_lima_r"
                                                                required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Remarks
                                                                Lima R</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                value="{{$item->remarks_lima_r}}" name="remarks_lima_r"
                                                                required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Range</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" value="{{$item->range}}"
                                                                name="range" required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Strong</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="strong"
                                                                value="{{$item->strong}}" required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Weakness</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="weakness"
                                                                value="{{$item->weakness}}" required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Skill</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="skill"
                                                                value="{{$item->skill}}" required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Knowledge</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" name="knowledge"
                                                                value="{{$item->knowledge}}" required>
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
                                <form action="{{url('mentor/logbook/triwulan-ganjil/'.$item->id)}}" method="post"
                                    id="triwulanGanjil">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="button" onclick="triwulanGanjil()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-trash3-fill text-white"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                        </svg>
                                    </button>
                                </form>

                                @endif
                                <a href="{{url('mentor/logbook/triwulan-ganjil/'.$item->id)}}" class="btn btn-info"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye-fill text-white" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                    </svg></a>
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