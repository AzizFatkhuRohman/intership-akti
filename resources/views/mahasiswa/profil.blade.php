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
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
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
                <div class="app-card-body px-4 w-100">
                    @if (!$data)
                    <form action="{{url('mahasiswa/profil-add')}}" method="post" enctype="multipart/form-data">
                        @else
                        <form action="{{url('mahasiswa/profil/'.Auth::user()->id)}}" method="post"
                            enctype="multipart/form-data">
                            @endif
                            @csrf
                            @method('put')
                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label mb-2"><strong>Photo</strong></div>
                                        <div class="item-data">
                                            @if (Auth::user()->photo == null)
                                            <img class="profile-image" src="{{asset('assets/images/user.png')}}" alt="">
                                            @else
                                            <img class="profile-image" src="{{asset('profil/'.Auth::user()->photo)}}"
                                                alt="">
                                            @endif
                                        </div>
                                    </div>
                                    <!--//col-->
                                    <div class="col text-end">
                                        <input type="file" name="photo" class="form-control"
                                            id="exampleFormControlInput1" accept="image/*">
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//item-->
                            <div class="item border-bottom py-3">
                                <div class="">
                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                                        value="{{Auth::user()->nama}}" required>
                                </div>
                            </div>
                            <!--//item-->
                            <div class="item border-bottom py-3">
                                <div class="">
                                    <label for="exampleFormControlInput1" class="form-label">NIM</label>
                                    <input type="number" name="nomor_induk" class="form-control"
                                        id="exampleFormControlInput1" value="{{Auth::user()->nomor_induk}}" readonly>
                                </div>
                                <!--//row-->
                            </div>
                            <!--//item-->
                            <div class="item border-bottom py-3">
                                <div class="">
                                    <label for="exampleFormControlInput1" class="form-label">No Registrasi</label>
                                    <input type="number" name="no_reg" class="form-control"
                                        id="exampleFormControlInput1" value="{{ optional($data)->no_reg }}" required>
                                </div>
                                <!--//row-->
                            </div>
                            <!--//item-->
                            <div class="item border-bottom py-3">
                                <div class="">
                                    <label for="exampleFormControlInput1" class="form-label">Batch</label>
                                    <input type="number" name="batch" class="form-control" id="exampleFormControlInput1"
                                        value="{{ optional($data)->batch }}" required>
                                </div>
                                <!--//row-->
                            </div>
                            <div class="item border-bottom py-3">
                                <div class="">
                                    <label for="exampleFormControlInput1" class="form-label">Shift</label>
                                    <select class="select" aria-label="Default select example" name="shift">
                                        <option value="{{ optional($data)->shift }}">{{ optional($data)->shift }}
                                        </option>
                                        <option value="red">red</option>
                                        <option value="white">white</option>
                                        <option value="non">non</option>
                                    </select>
                                </div>
                                <!--//row-->
                            </div>
                            <div class="item border-bottom py-3">
                                <div class="">
                                    <label for="exampleFormControlInput1" class="form-label">Dosen</label>
                                    <input type="text" name="dosen" class="form-control" id="exampleFormControlInput1"
                                        value="{{ optional($data)->dosen->user->nama }}" readonly>
                                </div>
                                <!--//row-->
                            </div>
                            <!--//item-->
                            <div class="item border-bottom py-3">
                                @if (!$data)
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                @else
                                <button type="submit" class="btn btn-primary">Ubah</button>
                                @endif
                            </div>
                </div>
                </form>
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
        <div class="col-12 col-lg-6">
            <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                        <div class="col-auto">
                            <div class="app-icon-holder">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                </svg>
                            </div>
                            <!--//icon-holder-->

                        </div>
                        <!--//col-->
                        <div class="col-auto">
                            <h4 class="app-card-title">Mentor</h4>
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
                                <div class="item-label"><strong>Nama </strong></div>
                                <div class="item-data">{{optional($data->mentor)->user->nama}}</div>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <!--//item-->
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>No Telp</strong></div>
                                <div class="item-data">{{optional($data->mentor)->no_telp}}</div>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <!--//item-->
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>Divisi</strong></div>
                                <div class="item-data">{{optional($data->mentor)->divisi}}</div>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <!--//item-->
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>Shop</strong></div>
                                <div class="item-data">{{optional($data->mentor)->shop}}</div>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <!--//item-->
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>Line</strong></div>
                                <div class="item-data">{{optional($data->mentor)->line}}</div>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>Pos</strong></div>
                                <div class="item-data">{{optional($data->mentor)->pos}}</div>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>GL</strong></div>
                                <div class="item-data">{{optional($data->mentor)->nama_gl}}</div>
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
        <!--//col-->
        <div class="col-12 col-lg-6">
            <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                        <div class="col-auto">
                            <div class="app-icon-holder">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                </svg>
                            </div>
                            <!--//icon-holder-->

                        </div>
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
                                <div class="item-label"><strong>Section</strong></div>
                                <div class="item-data">{{$data->section->nama_section}}</div>
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
        <div class="col-12 col-lg-6">
            <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                        <div class="col-auto">
                            <div class="app-icon-holder">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg>
                            </div>
                            <!--//icon-holder-->

                        </div>
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
                                <div class="item-label"><strong>Nama
                                    </strong></div>
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
                                <div class="item-label"><strong>Departement</strong></div>
                                <div class="item-data">{{$data->departement->nama_departement}}</div>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>Lokasi</strong></div>
                                <div class="item-data">{{$data->departement->lokasi}}</div>
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