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
                                        <select class="form-select" aria-label="Default select example" name="user_id">
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
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Nama GL</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="nama_gl" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">Section</label>
                                        <select class="form-select" aria-label="Default select example"
                                            name="section_id">
                                            @foreach ($sectionData as $section)
                                            <option value="{{$section->id}}">
                                                {{$section->user->nama}}/{{$section->nama_section}}
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
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Section</th>
                        <th scope="col">Departement</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{$item->user->nomor_induk}}</th>
                        <td>{{$item->user->nama}}</td>
                        <td>{{$item->section->nama_section}}
                        </td>
                        <td>{{$item->departement->nama_departement}}/{{$item->departement->lokasi}}</td>
                        <td>
                            <div class="d-flex">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#examp{{$item->id}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square text-white" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                      </svg>
                                </button>
                    
                                <!-- Modal -->
                                <div class="modal fade" id="examp{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah {{$title}}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{url('admin/manajemen/mentor/'.$item->id)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1" class="form-label">Pengguna</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                                name="nama" value="{{$item->user->nama}}" readonly>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1" class="form-label">No Telp</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                                name="no_telp" value="{{$item->no_telp}}" required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1" class="form-label">Divisi</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                                name="divisi" value="{{$item->divisi}}" required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1" class="form-label">Shop</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                                name="shop" value="{{$item->shop}}" required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1" class="form-label">Line</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                                name="line" value="{{$item->line}}" required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1" class="form-label">Pos</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="pos" value="{{$item->pos}}"
                                                                required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1" class="form-label">Nama GL</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                                name="nama_gl" value="{{$item->nama_gl}}" required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="exampleFormControlInput1" class="form-label">Section</label>
                                                            <select class="form-select" aria-label="Default select example"
                                                                name="section_id">
                                                                <option value="{{$item->section_id}}">{{$item->section->user->nama}}/{{$item->section->nama_section}}</option>
                                                                @foreach ($sectionData as $sec)
                                                                <option value="{{$sec->id}}">
                                                                    {{$sec->user->nama}}/{{$sec->nama_section}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="">
                                                            <label for="exampleFormControlInput1" class="form-label">Departement</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                                name="departement" value="{{$item->departement->user->nama}}/{{$item->departement->nama_departement}}/{{$item->departement->lokasi}}" readonly>
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
                                <form action="{{url('admin/manajemen/mentor/'.$item->id)}}" method="post" id="mentor">
                                    @csrf
                                    @method('delete')
                                <button class="btn btn-danger" type="button" onclick="mentor()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill text-white" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                      </svg>
                                </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function mentor() {
      Swal.fire({
          title: 'Konfirmasi',
          text: 'Apakah anda yakin menghapus ini?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yakin!',
          cancelButtonText: 'Batal'
      }).then((result) => {
          if (result.isConfirmed) {
              document.getElementById('mentor').submit();
          }
      });
      
  }
</script>
@endsection