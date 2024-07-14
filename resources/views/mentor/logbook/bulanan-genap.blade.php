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
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Evaluasi Genap</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{url('mentor/logbook/bulanan-genap')}}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>Nama Mahasiswa</b></label>
                  <select class="select" aria-label="Default select example" name="mahasiswa_id">
                    <option value=""></option>
                    @foreach ($mahasiswa as $item)
                    <option value="{{$item->id}}">{{$item->user->nama}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>A. KESEHATAN</b></label>
                  <select class="form-select" aria-label="Default select example" name="kesehatan">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div>
                  <b>B. PERILAKU SAFETY</b>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>B1. Safety Accident</b></label>
                  <select class="form-select" aria-label="Default select example" name="safety_accident">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>B2. Penggunaan APD</b></label>
                  <select class="form-select" aria-label="Default select example" name="apd">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>B3. Penerapan SPC</b></label>
                  <select class="form-select" aria-label="Default select example" name="spc">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>B4. Penerapan SCW</b></label>
                  <select class="form-select" aria-label="Default select example" name="scw">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>B5. Kemampuan Duga Bahaya</b></label>
                  <select class="form-select" aria-label="Default select example" name="kyt">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>B6. Safety (KY Ability)</b></label>
                  <select class="form-select" aria-label="Default select example" name="safety_ability">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>B7. Safety (Idea Hyarihatto)</b></label>
                  <select class="form-select" aria-label="Default select example" name="safety_idea">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <b>C. QUALITY</b>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>C1. BIQ (DATA DEFECT /OPT)</b></label>
                  <select class="form-select" aria-label="Default select example" name="biq">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>C2. DIV QUALITY</b></label>
                  <select class="form-select" aria-label="Default select example" name="div">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>C3. CUSTOMER / NEXT PROSES</b></label>
                  <select class="form-select" aria-label="Default select example" name="customer">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>C4. ANALISA PROBLEM</b></label>
                  <select class="form-select" aria-label="Default select example" name="analisa">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>C5. REPORTING</b></label>
                  <select class="form-select" aria-label="Default select example" name="reporting">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <b>D. PRODUCTIVITY</b>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>D1. PENGUASAAN JOB</b></label>
                  <select class="form-select" aria-label="Default select example" name="job">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <b>D.2. PEKERJAAN</b>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>D.2.1. Motivasi melakukan pekerjaan</b></label>
                  <select class="form-select" aria-label="Default select example" name="motivasi">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>D.2.2. Penyelesaian pekerjaan</b></label>
                  <select class="form-select" aria-label="Default select example" name="penyelesaian">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>D.2.3. Karakteristik hasil kerja</b></label>
                  <select class="form-select" aria-label="Default select example" name="karakteristik">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>D.3. PERSIAPAN PRODUKSI (TPM)</b></label>
                  <select class="form-select" aria-label="Default select example" name="tpm">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>D.4. LINE STOP</b></label>
                  <select class="form-select" aria-label="Default select example" name="line">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>D.5. REPAIR/ REWORK</b></label>
                  <select class="form-select" aria-label="Default select example" name="repair">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <b>E. COST</b>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>E.1. PEMAKAIAN MATERIAL (INDIRECT)</b></label>
                  <select class="form-select" aria-label="Default select example" name="indirect">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>E.2. STD PEMAKAIAN MATERIAL (DIRECT)</b></label>
                  <select class="form-select" aria-label="Default select example" name="direct">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>E.3. RULE ABNORMALITY MATERIAL</b></label>
                  <select class="form-select" aria-label="Default select example" name="abnormality">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <b>F. MORAL</b>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>F.1. KEHADIRAN</b></label>
                  <select class="form-select" aria-label="Default select example" name="kehadiran">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <b>F2. DAYA PIKIR</b>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>F.2.1. Mindset</b></label>
                  <select class="form-select" aria-label="Default select example" name="mindset">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <b>F3. ETIKA KERJA</b>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>F.3.1. Kepribadian</b></label>
                  <select class="form-select" aria-label="Default select example" name="pribadi">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>F.4. JAM KERJA NORMAL (JKN)</b></label>
                  <select class="form-select" aria-label="Default select example" name="jkn">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>F.5. 5R</b></label>
                  <select class="form-select" aria-label="Default select example" name="lima_r">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>F.6. QCC</b></label>
                  <select class="form-select" aria-label="Default select example" name="qcc">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>F.7. IDEA/IMPROVEMENT</b></label>
                  <select class="form-select" aria-label="Default select example" name="idea">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <b>F.8. GCRC TRAINING</b>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><b>F.8.1. TJI</b></label>
                  <select class="form-select" aria-label="Default select example" name="tji">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
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
                @if ($item->status == 'pending' || $item->status == 'reject')
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#{{$item->id}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square text-white" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                      </svg>
                  </button>
            
                  <!-- Modal -->
                  <div class="modal fade" id="{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Evaluasi Genap</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="{{url('mentor/logbook/bulanan-genap/'.$item->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                              <div class="mb-2">
                                <label for="exampleFormControlInput1" class="form-label">Mahasiswa</label>
                                <input type="text" class="form-control" id="nilai" name="mahasiswa_id" value="{{$item->mahasiswa->user->nama}}" readonly>
                              </div>
                              <h5>A. Kesehatan</h5>
                              <span>Nilai max 4</span>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Sehat, Bekerja dengan normal</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kesehatan_1" required>
            
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Sakit, bisa bekerja tapi ke Oasis</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kesehatan_2" required>
            
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Sakit, Hadir tidak bisa bekerja /
                                  Poliklinik</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kesehatan_3" required>
            
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Sakit, Tidak hadir dengan surat ket. Dari
                                  Dokter</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kesehatan_4" required>
            
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Sakit, Tidak hadir tanpa keterangan
                                  (Mangkir)</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kesehatan_5" required>
                              </div>
                              <h5 class="mt-2">B. Perilaku Safety</h5>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Tidak pernah accident</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="accident_1" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Pernah accident (Lalai)</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="accident_2" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Menggunakan APD dengan baik dan
                                  benar</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="apd_1" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Tidak menggunakan APD</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="apd_2" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Melakukan SPC dengan baik dan benar</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="spc_1" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Tidak melakukan SPC dengan baik dan
                                  benar</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="spc_2" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Melakukan SCW ketika terjadi Abnormality
                                  dengan baik dan benar</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="scw_1" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Tidak melakukan SCW ketika terjadi
                                  Abnormality</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="scw_2" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Mampu menduga bahaya di area kerja sendiri
                                  ( Peka )</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kyt_1" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Tidak mampu menduga bahaya di area kerja
                                  sendiri</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kyt_2" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Mampu menduga bahaya INVISIBLE (KY Level 3 TM)</label>
                                <input type="number" min="0" max="4" class="form-control" id="exampleFormControlInput1"
                                   name="safety_ky_1" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Mampu menduga bahaya iNVISIBLE (KY Level 1 New Commer)</label>
                                <input type="number" min="0" max="4" class="form-control" id="exampleFormControlInput1"
                                   name="safety_ky_2" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Mampu membuat idea HH dan dapat diterapkan di pos nya</label>
                                <input type="number" min="0" max="4" class="form-control" id="exampleFormControlInput1"
                                   name="safety_idea_1" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Tidak membuat idea HH</label>
                                <input type="number" min="0" max="4" class="form-control" id="exampleFormControlInput1"
                                  name="safety_idea_2" required>
                              </div>
                              <h5 class="mt-2">C. QUALITY (MK : Management Quality)</h5>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Tidak ada defect selama pemagangan di Job
                                  nya (exist job)</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="biq_1" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Ada defect selama pemagangan di Job nya < 5
                                    defect</label>
                                    <input type="number" min="0" max="4" class="form-control" id="nilai" name="biq_2" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Ada defect selama pemagangan di Job nya > 5
                                  defect</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="biq_3" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Tidak terjadi defect yang sama selama pemagangan di Job exist</label>
                                <input type="number" min="0" max="4" class="form-control" id="exampleFormControlInput1" name="div_1" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Terjadi defect yang sama selama pemagangan di Job exist</label>
                                <input type="number" min="0" max="4" class="form-control" id="exampleFormControlInput1"
                                  value="Terjadi defect yang sama selama pemagangan di Job exist" name="div_2" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Melaporkan ketika mengetahui defect orang lain & tidak terjadi outflow</label>
                                <input type="number" min="0" max="4" class="form-control" id="exampleFormControlInput1" name="customer_1"
                                  required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Tidak melaporkan ketika mengetahui defect orang lain & terjadi outflow</label>
                                <input type="number" min="0" max="4" class="form-control" id="exampleFormControlInput1" name="customer_2"
                                  required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Mampu menganalisa defect - improvement & tidak terjadi lagi</label>
                                <input type="number" min="0" max="4" class="form-control" id="exampleFormControlInput1" name="analisa_1" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Mampu menganalisana defect dan membuat improvement sederhana</label>
                                <input type="number" min="0" max="4" class="form-control" id="exampleFormControlInput1" name="analisa_2" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Mampu menganalisa saja</label>
                                <input type="number" min="0" max="4" class="form-control" id="exampleFormControlInput1" name="analisa_3"
                                  required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Mampu membuat report qualitas level Senior TM</label>
                                <input type="number" min="0" max="4" class="form-control" id="exampleFormControlInput1" name="reporting_1" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Mampu membuat report qualitas sederhana</label>
                                <input type="number" min="0" max="4" class="form-control" id="exampleFormControlInput1" name="reporting_2" required>
                              </div>
                              <h5 class="mt-2">D. PRODUCTIVITY (MK : Toyota Production System)</h5>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Menguasai lebih dari 3 Job</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="job_1" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Menguasai 3 Job</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="job_2" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Menguasai kurang dari 3 Job</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="job_3" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Tetap konsisten kemauan belajar dan berkembang</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kerja_1" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Kurang ada kemauan untuk belajar dan
                                  berkembang</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kerja_2" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Kesesuaian motivasi & Inisiatif tetap konsisten</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kerja_3" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Kurang konsisten kesesuaian motivasi dan inisiatif</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kerja_4" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Sistematika kerja dan ketelitian tetap konsisten</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kerja_5" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Kurang konsisten lakukan pekerjaan secara sistematikan dan teliti</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kerja_6" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Kecepatan dan daya tahan kerja tetap konsisten</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kerja_7" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Kurang konsisten segi kecepatan dan daya tahan tubuh</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kerja_8" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Mampu mengontrol volume pekerjaan dan
                                  selesai</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kerja_9" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Dapat mengontrol volume pekerjaan, tapi
                                  tidak selesai</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kerja_10" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Belum mampu mengontrol volume
                                  pekerjaan</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kerja_11" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Mampu melakukan pekerjaan tanpa
                                  kesalahan</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kerja_12" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Dapat melakukan pekerjaan tapi tidak
                                  komplit</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kerja_13" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Belum mampu melakukan pekerjaan, hasil
                                  kurang baik</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kerja_14" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Tidak terjadi keterlambatan produksi karena problem tools atau equipment</label>
                                <input type="number" min="0" max="4" class="form-control" id="exampleFormControlInput1" name="tpm_1"
                                  required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Tidak terjadi keterlambatan produksi karena problem tools atau equipment</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="tpm_2" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Ada terjadi keterlambatan kurang dari 5 menit</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                  name="tpm_3" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Tidak melakukan TPM</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="tpm_3"
                                  required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Tidak terjadi line stop</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="line_1" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Terjadi line stop < 5 menit / hari</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="line_2" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Terjadi line stop > 5 menit / hari</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="line_3" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Dapat melakukan repair / rework sesuai arahan TL/GL</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="repair_1" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Dapat melakukan repair / rework atas arahan sendiri</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="repair_2" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Tidak dapat melakukan repair / rework</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="repair_3" required>
                              </div>
                              <h5 class="mt-2">E. COST (MK : Improvement)</h5>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Mematuhi pemakaian material sesuai proses</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="indirect_1" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Tidak mematuhi pemakaian material</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="indirect_2" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Mematuhi pemakaian material sesuai standard proses (Gentan-I)</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="direct_1" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Tidak mematuhi pemakaian material</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="direct_2" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Memahami pemakaian Mat. yg abnormal, bisa kontrol stok awal akhir</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="abnormality_1"
                                  required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Belum memahami pemakaian Material</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="abnormality_2" required>
                              </div>
                              <h5 class="mt-2">F. MORAL (MK : Pengenalan Dunia Industri)</h5>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Hadir 100% selama 1 bulan</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kehadiran_1" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Pernah tidak hadir 1 kali dalam 1
                                  bulan</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kehadiran_2" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Mampu membuat kemajuan dalam pekerjaannya</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="inisiatif_1" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Dapat membuat kemajuan tapi masih dibantu</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="inisiatif_2" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Tidak punya inisiatif</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="inisiatif_3" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Mengerti dan mengikuti peraturan2 dan instruksi</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="disiplin_1" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Mengetahui peraturan2, tapi harus selalu diingatkan</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="disiplin_2" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Mengetahui peraturan2 tapi tidak dilaksanakan</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="disiplin_3" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Tangkas dalam melakukan pekerjaan start - finish 1 cycle</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="disiplin_4" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Tidak tangkas (keteter) dalam melakukan pekerjaannya</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="disiplin_5" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Mampu menyelesaikan pekerjaan & bertanggung jawab</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="tanggung_jawab_1" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Hanya dapat melakukan pekerjaannya saja</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="tanggung_jawab_2" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Melimpahkan pekerjaan kepada orang laina</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="tanggung_jawab_3" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Mampu mengikuti instruksi atasan (SOPAN) & kerjasama MP lain</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kerja_sama_1" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Dapat mengikuti instruksi atasan, tapi blm bekerjasama</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kerja_sama_2" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Tidak mengikuti instruksi atasan / malas</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="kerja_sama_3" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Mematuhi aturan JKN, Ontime, selalu SENAM (Awal-Break-Lunch-Break)</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="jkn_1" required>
                              </div>
                              <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">Pernah terlambat tanpa info ke TL/GL (Awal-Break-Lunch-Break)</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="jkn_2" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Memahami dan menjalankan 5R</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="lima_r_1" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Memahami tapi tidak menjalankan 5R</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="lima_r_2" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Aktif dalam kegiatan QCC di grupnya</label>
                                <input type="text" min="0" max="4" class="form-control" id="exampleFormControlInput1" name="qcc_1" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Pasif dalam kegiatan QCC di grupnya</label>
                                <input type="text" min="0" max="4" class="form-control" id="exampleFormControlInput1" name="qcc_2" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Mampu membuat IDEA/IMPROVEMENT >1 kali dalam 1 bulan</label>
                                <input type="text" min="0" max="4" class="form-control" id="exampleFormControlInput1" name="idea_1" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Mampu membuat IDEA/IMPROVEMENT hanya 1 kali dalam 1 bulan</label>
                                <input type="text" min="0" max="4" class="form-control" id="exampleFormControlInput1" name="idea_2" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Menjalankan TL Role min. Requirement (Shadowing Style)</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="gcrc_1" required>
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label">Belum dapat menjalankan TL Role min. Requirement</label>
                                <input type="number" min="0" max="4" class="form-control" id="nilai" name="gcrc_2" required>
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
                <form action="{{url('mentor/logbook/bulanan-ganjil/'.$item->id)}}" method="post" id="evaluasiganjil">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger" onclick="evaluasiganjil()">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill text-white" viewBox="0 0 16 16">
                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                  </svg>
                </button>
                </form>
                @endif
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