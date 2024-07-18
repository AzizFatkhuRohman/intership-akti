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
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Evaluasi Ganjil</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{url('mentor/logbook/bulanan-ganjil')}}" method="post">
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
                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                  data-bs-target="#examp{{$item->id}}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-pencil-square text-white" viewBox="0 0 16 16">
                    <path
                      d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd"
                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                  </svg>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="examp{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Evaluasi Ganjil</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="{{url('mentor/logbook/bulanan-ganjil/'.$item->id)}}" method="post">
                          @csrf
                          @method('put')
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>Nama Mahasiswa</b></label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="mahasiswa" value="{{$item->mahasiswa->user->nama}}" readonly>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>A. KESEHATAN</b></label>
                            <select class="form-select" aria-label="Default select example" name="kesehatan">
                              <option value="{{$item->kesehatan}}">{{$item->kesehatan}}</option>
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
                              <option value="{{$item->safety_accident}}">{{$item->safety_accident}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
          
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>B2. Penggunaan APD</b></label>
                            <select class="form-select" aria-label="Default select example" name="apd">
                              <option value="{{$item->apd}}">{{$item->apd}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
          
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>B3. Penerapan SPC</b></label>
                            <select class="form-select" aria-label="Default select example" name="spc">
                              <option value="{{$item->spc}}">{{$item->spc}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
          
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>B4. Penerapan SCW</b></label>
                            <select class="form-select" aria-label="Default select example" name="scw">
                              <option value="{{$item->scw}}">{{$item->scw}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
          
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>B5. Kemampuan Duga Bahaya</b></label>
                            <select class="form-select" aria-label="Default select example" name="kyt">
                              <option value="{{$item->kyt}}">{{$item->kyt}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
          
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>B6. Safety (KY Ability)</b></label>
                            <select class="form-select" aria-label="Default select example" name="safety_ability">
                              <option value="{{$item->safety_ability}}">{{$item->safety_ability}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>B7. Safety (Idea Hyarihatto)</b></label>
                            <select class="form-select" aria-label="Default select example" name="safety_idea">
                              <option value="{{$item->safety_idea}}">{{$item->safety_idea}}</option>
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
                              <option value="{{$item->biq}}">{{$item->biq}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>C2. DIV QUALITY</b></label>
                            <select class="form-select" aria-label="Default select example" name="div">
                              <option value="{{$item->div}}">{{$item->div}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>C3. CUSTOMER / NEXT PROSES</b></label>
                            <select class="form-select" aria-label="Default select example" name="customer">
                              <option value="{{$item->customer}}">{{$item->customer}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>C4. ANALISA PROBLEM</b></label>
                            <select class="form-select" aria-label="Default select example" name="analisa">
                              <option value="{{$item->analisa}}">{{$item->analisa}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>C5. REPORTING</b></label>
                            <select class="form-select" aria-label="Default select example" name="reporting">
                              <option value="{{$item->reporting}}">{{$item->reporting}}</option>
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
                              <option value="{{$item->job}}">{{$item->job}}</option>
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
                              <option value="{{$item->motivasi}}">{{$item->motivasi}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>D.2.2. Penyelesaian pekerjaan</b></label>
                            <select class="form-select" aria-label="Default select example" name="penyelesaian">
                              <option value="{{$item->penyelesaian}}">{{$item->penyelesaian}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>D.2.3. Karakteristik hasil kerja</b></label>
                            <select class="form-select" aria-label="Default select example" name="karakteristik">
                              <option value="{{$item->karakteristik}}">{{$item->karakteristik}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>D.3. PERSIAPAN PRODUKSI (TPM)</b></label>
                            <select class="form-select" aria-label="Default select example" name="tpm">
                              <option value="{{$item->tpm}}">{{$item->tpm}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>D.4. LINE STOP</b></label>
                            <select class="form-select" aria-label="Default select example" name="line">
                              <option value="{{$item->line}}">{{$item->line}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>D.5. REPAIR/ REWORK</b></label>
                            <select class="form-select" aria-label="Default select example" name="repair">
                              <option value="{{$item->repair}}">{{$item->repair}}</option>
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
                              <option value="{{$item->indirect}}">{{$item->indirect}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>E.2. STD PEMAKAIAN MATERIAL (DIRECT)</b></label>
                            <select class="form-select" aria-label="Default select example" name="direct">
                              <option value="{{$item->direct}}">{{$item->direct}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>E.3. RULE ABNORMALITY MATERIAL</b></label>
                            <select class="form-select" aria-label="Default select example" name="abnormality">
                              <option value="{{$item->abnormality}}">{{$item->abnormality}}</option>
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
                              <option value="{{$item->kehadiran}}">{{$item->kehadiran}}</option>
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
                              <option value="{{$item->mindset}}">{{$item->mindset}}</option>
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
                              <option value="{{$item->pribadi}}">{{$item->pribadi}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>F.4. JAM KERJA NORMAL (JKN)</b></label>
                            <select class="form-select" aria-label="Default select example" name="jkn">
                              <option value="{{$item->jkn}}">{{$item->jkn}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>F.5. 5R</b></label>
                            <select class="form-select" aria-label="Default select example" name="lima_r">
                              <option value="{{$item->lima_r}}">{{$item->lima_r}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>F.6. QCC</b></label>
                            <select class="form-select" aria-label="Default select example" name="qcc">
                              <option value="{{$item->qcc}}">{{$item->qcc}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>F.7. IDEA/IMPROVEMENT</b></label>
                            <select class="form-select" aria-label="Default select example" name="idea">
                              <option value="{{$item->idea}}">{{$item->idea}}</option>
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
                              <option value="{{$item->tji}}">{{$item->tji}}</option>
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
                <form action="{{url('mentor/logbook/bulanan-ganjil/'.$item->id)}}" method="post" id="evaluasiganjil">
                  @csrf
                  @method('delete')
                  <button type="button" class="btn btn-danger" onclick="evaluasiganjil()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-trash3-fill text-white" viewBox="0 0 16 16">
                      <path
                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                    </svg>
                  </button>
                </form>
                @endif
                <a href="{{url('mentor/logbook/bulanan-ganjil/'.$item->id)}}" target="_blank" rel="noopener noreferrer"
                  class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-eye-fill text-white" viewBox="0 0 16 16">
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
<script>
  function evaluasiganjil() {
    Swal.fire({
        title: 'Konfirmasi',
        text: 'Apakah Anda yakin ingin menghapus ini?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('evaluasiganjil').submit();
        }
    });
    
}
</script>
@endsection