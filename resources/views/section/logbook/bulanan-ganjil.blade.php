@extends('layouts.app')
@section('main')
<div class="container-xl">
  <div class="card mt-3">
    <div class="card-header d-flex justify-content-between">
      <h5>{{$title}}</h5>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-bordered table-hover table-striped">
        <thead>
          <tr>
            <th scope="col">No Registrasi</th>
            <th scope="col">Nama</th>
            <th scope="col">Total Point</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <th scope="row">{{$item->mahasiswa->no_reg}}</th>
            <td>{{$item->mahasiswa->user->nama}}</td>
            <td>{{$item->total_point}}</td>
            <td>
              @if ($item->status == 'pending')
              <button class="btn btn-warning btn-sm text-white">Pending</button>
              @elseif($item->status == 'accept')
              <button class="btn btn-info btn-sm text-white">Accept</button>
              @else
              <button class="btn btn-danger btn-sm text-white">Reject</button>
              @endif
            </td>
            <td>
              <div class="d-flex">
                <a href="#" target="_blank" rel="noopener noreferrer" class="btn btn-info">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-eye-fill text-white" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                    <path
                      d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                  </svg>
                </a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
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
                <div class="modal fade" id="example{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="{{url('section/logbook/bulanan-ganjil/'.$item->id)}}" method="post">
                          @csrf
                          @method('put')
                          <select class="form-select" aria-label="Default select example" name="status">
                            <option selected>Pilih Status</option>
                            <option value="accept">accept</option>
                            <option value="reject">reject</option>
                          </select>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
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