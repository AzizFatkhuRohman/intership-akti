@extends('layouts.app')
@section('main')
<div class="container-xl">
    <div class="row gy-4 mt-3">
        <div class="col-12 col-lg-6">
            <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                        <div class="col-auto">
                            <div class="app-icon-holder">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                </svg>
                            </div>
                            <!--//icon-holder-->

                        </div>
                        <!--//col-->
                        <div class="col-auto">
                            <h4 class="app-card-title">Profil</h4>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <form action="{{url('mentor/profil/'.Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="app-card-body px-4 w-100">

                        <div class="item border-bottom py-3">
                            <div>
                                <div class="item-label"><strong>Nama</strong></div>
                                <input type="text" class="form-control" value=" {{$data->user->nama}}" name="nama"
                                    required>
                            </div>
                            <!--//row-->
                        </div>
                        <!--//item-->
                        <div class="item border-bottom py-3">
                            <div>
                                <div class="item-label"><strong>NIP</strong></div>
                                <input type="text" class="form-control" value=" {{$data->user->nomor_induk}}"
                                    name="nomor_induk" readonly>
                            </div>
                            <!--//row-->
                        </div>
                        <div class="item border-bottom py-3">
                            <div>
                                <div class="item-label"><strong>No Telp</strong></div>
                                <input type="text" class="form-control" value=" {{$data->no_telp}}" name="no_telp"
                                    required>
                            </div>
                            <!--//row-->
                        </div>
                        <div class="item border-bottom py-3">
                            <div>
                                <div class="item-label"><strong>Divisi</strong></div>
                                <input type="text" class="form-control" value=" {{$data->divisi}}" name="divisi"
                                    required>
                            </div>
                            <!--//row-->
                        </div>
                        <div class="item border-bottom py-3">
                            <div>
                                <div class="item-label"><strong>Shop</strong></div>
                                <input type="text" class="form-control" value=" {{$data->shop}}" name="shop" required>
                            </div>
                            <!--//row-->
                        </div>
                        <div class="item border-bottom py-3">
                            <div>
                                <div class="item-label"><strong>Line</strong></div>
                                <input type="text" class="form-control" value=" {{$data->line}}" name="line" required>
                            </div>
                            <!--//row-->
                        </div>
                        <div class="item border-bottom py-3">
                            <div>
                                <div class="item-label"><strong>Pos</strong></div>
                                <input type="text" class="form-control" value=" {{$data->pos}}" name="pos" required>
                            </div>
                            <!--//row-->
                        </div>
                        <div class="item border-bottom py-3">
                            <div>
                                <div class="item-label"><strong>GL</strong></div>
                                <input type="text" class="form-control" value=" {{$data->nama_gl}}" name="nama_gl">
                            </div>
                            <!--//row-->
                        </div>
                        <div class="item border-bottom py-3 row">
                            <div class="col-6">
                                <div class="item-label"><strong>Paraf</strong></div>
                                <input type="file" class="form-control" name="paraf" accept="image/*">
                                <span>Format jpg, jpeg, png</span>
                            </div>
                            <div class="col-6">
                                <img src="{{asset('paraf/'.$data->paraf)}}" alt="paraf" width="50%">
                            </div>
                            <!--//row-->
                        </div>
                        <div class="item border-bottom py-3 row">
                            <div class="col-6">
                                <div class="item-label"><strong>Photo Profil</strong></div>
                                <input type="file" class="form-control" name="photo" accept="image/*">
                                <span>Format jpg, jpeg, png</span>
                            </div>
                            <div class="col-6">
                                <img src="{{asset('profil/'.$data->user->photo)}}" alt="profil" width="50%">
                            </div>
                            <!--//row-->
                        </div>
                        <!--//item-->
                    </div>
                    <!--//app-card-body-->

                    <div class="app-card-footer p-4 mt-auto">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
                <!--//app-card-footer-->

            </div>
            <!--//app-card-->
        </div>
        <div class="col-12 col-lg-6">
            <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                        <!--//col-->
                        <div class="col-auto">
                            <h4 class="app-card-title">Section</h4>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body px-4 w-100">

                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>Nama</strong></div>
                                <div class="item-data">{{$data->section->user->nama}}</div>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <!--//item-->
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>NIP</strong></div>
                                <div class="item-data">{{$data->section->user->nomor_induk}}</div>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>Section</strong></div>
                                <div class="item-data">{{$data->section->nama_section}}</div>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>

                    <!--//item-->
                </div>
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                        <!--//col-->
                        <div class="col-auto">
                            <h4 class="app-card-title">Departement</h4>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body px-4 w-100">

                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>Nama</strong></div>
                                <div class="item-data">{{$data->departement->user->nama}}</div>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <!--//item-->
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>NIP</strong></div>
                                <div class="item-data">{{$data->departement->user->nomor_induk}}</div>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>Departement</strong></div>
                                <div class="item-data">{{$data->departement->nama_departement}}</div>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>

                    <!--//item-->
                </div>
                <!--//app-card-footer-->

            </div>
            <!--//app-card-->
        </div>
    </div>
    <!--//row-->

</div>
@endsection