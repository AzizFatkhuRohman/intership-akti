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
                
                <a href="#" target="_blank" rel="noopener noreferrer" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" class="bi bi-eye-fill text-white" viewBox="0 0 16 16">
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