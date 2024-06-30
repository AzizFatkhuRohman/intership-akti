@extends('layouts.app')
@section('main')
<div class="container-xl">
    <div class="card mt-3">
        <div class="card-header d-flex justify-content-between">
            <h5>Evaluasi Ganjil</h5>
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Evaluasi Ganjil</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('mentor/logbook/bulanan-ganjil')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Mahasiswa</label>
                                    <select class="select" aria-label="Default select example" name="mahasiswa_id">
                                        <option value=""></option>
                                        @foreach ($mahasiswa as $item)
                                            <option value="{{$item->id}}">{{$item->user->nama}}/{{$item->no_reg}}</option>
                                        @endforeach
                                      </select>
                                  </div>
                                  <h5>A. Kesehatan</h5>
                                  <span>Nilai max 4</span>
                                  <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label">Sehat, Bekerja dengan normal</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="kesehatan_1" required>
                                    
                                  </div>
                                  <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label">Sakit, bisa bekerja tapi ke Oasis</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="kesehatan_2" required>
                                    
                                  </div>
                                  <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label">Sakit, Hadir tidak bisa bekerja / Poliklinik</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="kesehatan_3" required>
                                    
                                  </div>
                                  <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label">Sakit, Tidak hadir dengan surat ket. Dari Dokter</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="kesehatan_4" required>
                                    
                                  </div>
                                  <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label">Sakit, Tidak hadir tanpa keterangan (Mangkir)</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="kesehatan_5" required>
                                  </div>
                                  <h5 class="mt-2">B. Perilaku Safety</h5>
                                  <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label">Tidak pernah accident</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="accident_1" required>
                                  </div>
                                  <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label">Pernah accident (Lalai)</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="accident_2" required>
                                  </div>
                                  <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label">Menggunakan APD dengan baik dan benar</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="apd_1" required>
                                  </div>
                                  <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label">Tidak menggunakan APD</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="apd_2" required>
                                  </div>
                                  <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label">Melakukan SPC dengan baik dan benar</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="spc_1" required>
                                  </div>
                                  <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label">Tidak melakukan SPC dengan baik dan benar</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="spc_2" required>
                                  </div>
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
        </div>
    </div>
</div>
@endsection