<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Triwulan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Tanggal</th>
            <th scope="col">No Registrasi</th>
            <th scope="col">Nama</th>
            <th scope="col">Mentor</th>
            <th scope="col">Section</th>
            <th scope="col">Departement</th>
            <th scope="col">Minggu</th>
            <th scope="col">Bulan</th>
            <th scope="col">Gambar</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Tools Used</th>
            <th scope="col">Safety Key Point</th>
            <th scope="col">Problem Solf</th>
            <th scope="col">Hyarihatto</th>
            <th scope="col">Point To Remember</th>
            <th scope="col">Self Evaluation</th>
            <th scope="col">Komentar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($data as $item)
            <th scope="col">{{$item->created_at}}</th>
            <th scope="col">{{$item->mahasiswa->no_reg}}</th>
            <th scope="col">{{$item->mahasiswa->user->nama}}</th>
            <th scope="col">{{$item->mentor->user->nama}}</th>
            <th scope="col">{{$item->section->user->nama}}</th>
            <th scope="col">{{$item->departement->user->nama}}</th>
            <th scope="col">{{$item->minggu}}</th>
            <th scope="col">{{$item->bulan}}</th>
            <th scope="col">
                @if ($item->gambar != null)
                    {{url('logbook_mingguan/'.$item->gambar)}}
                @else
                    Tidak Ada
                @endif
            </th>
            <th scope="col">{{$item->keterangan}}</th>
            <th scope="col">{{$item->tool_used}}</th>
            <th scope="col">{{$item->safety_key_point}}</th>
            <th scope="col">{{$item->problem_solf}}</th>
            <th scope="col">{{$item->hyarihatto}}</th>
            <th scope="col">{{$item->point_to_remember}}</th>
            <th scope="col">{{$item->self_evaluation}}</th>
            <th scope="col">{{$item->komentar}}</th>
            @endforeach
          </tr>
        </tbody>
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>