@extends('layouts.app')
@section('main')
<div class="container">
    <div class="card mt-3">
        <div class="card-header d-flex justify-content-between">
            <h5>{{$title}}</h5>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-plus-circle-fill text-white" viewBox="0 0 16 16">
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
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Mentor</label>
                                    <select class="select" aria-label="Default select example" name="mentor_id">
                                        <option value=""></option>
                                        @foreach ($mentor as $m)
                                        <option value="{{$m->id}}">
                                            {{$m->user->nama}}/{{$m->section->nama_section}}/{{$m->departement->nama_departement}}/{{$m->departement->lokasi}}
                                        </option>
                                        @endforeach
                                    </select>
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
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Mentor</th>
                        <th scope="col">Section</th>
                        <th scope="col">Departement</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->mentor->user->nama}}</td>
                        <td>{{$item->section->nama_section}}/{{$item->section->user->nama}}</td>
                        <td>{{$item->departement->nama_departement}}/{{$item->departement->lokasi}}</td>
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
                            @if ($item->status == 'pending' || $item->status == 'reject')
                            <form action="{{url('mahasiswa/manajemen/pindah-mentor/'.$item->id)}}" method="post" id="pindahMentor">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="button" onclick="pindahMentor()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-x-circle text-white" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                    </svg>
                                </button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function pindahMentor() {
      Swal.fire({
          title: 'Konfirmasi',
          text: 'Apakah anda yakin membatalkan ini?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yakin!',
          cancelButtonText: 'Batal'
      }).then((result) => {
          if (result.isConfirmed) {
              document.getElementById('pindahMentor').submit();
          }
      });
      
  }
</script>
@endsection