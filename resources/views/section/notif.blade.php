@extends('layouts.app')
@section('main')
<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="position-relative mb-3">
            <div class="row g-3 justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">{{$title}}</h1>
                </div>
            </div>
        </div>

        @foreach ($data as $item)
        <div class="app-card app-card-notification shadow-sm mb-4">
            <div class="app-card-header px-4 py-3">
                <div class="row g-3 align-items-center">
                    <!--//col-->
                    <div class="col-12 col-lg-auto text-center text-lg-start">
                        <div class="notification-type mb-2">
                            @if ($item->status == 'belum')
                            <span class="badge bg-warning">Belum dibaca</span>
                            @else
                            <span class="badge bg-info">{{$item->status}}</span>
                            @endif
                        </div>
                        <h4 class="notification-title mb-1">{{$item->content}}</h4>

                        <ul class="notification-meta list-inline mb-0">
                            <li class="list-inline-item">{{
                                \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>
                        </ul>

                    </div>
                    <!--//col-->
                </div>
                <!--//row-->
            </div>
            <!--//app-card-body-->
            <div class="app-card-footer px-4 py-3">
                @if ($item->status == 'belum')
                <form action="{{url('section/notification/'.$item->id)}}" method="post">
                    @method('put')
                    @csrf
                    <button class="badge bg-info">Tandai sudah dibaca</button>
                </form>
                @endif
            </div>
            <!--//app-card-footer-->
        </div>
        @endforeach
        <!--//app-card-->
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
    <!--//container-fluid-->
</div>
@endsection