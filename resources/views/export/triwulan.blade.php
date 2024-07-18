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
            <th scope="col">Actual Safety</th>
            <th scope="col">Remarks Safety</th>
            <th scope="col">Actual Quality</th>
            <th scope="col">Remarks Quality</th>
            <th scope="col">Actual Productivity</th>
            <th scope="col">Remarks Productivity</th>
            <th scope="col">Actual Cost</th>
            <th scope="col">Remarks Cost</th>
            <th scope="col">Actual Moral</th>
            <th scope="col">Remarks Moral</th>
            <th scope="col">Actual Lima R</th>
            <th scope="col">Remarks Lima R</th>
            <th scope="col">Range</th>
            <th scope="col">Strong</th>
            <th scope="col">Weakness</th>
            <th scope="col">Skill</th>
            <th scope="col">Knowledge</th>
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
            <th scope="col">{{$item->actual_safety}}</th>
            <th scope="col">{{$item->remarks_safety}}</th>
            <th scope="col">{{$item->actual_quality}}</th>
            <th scope="col">{{$item->remarks_quality}}</th>
            <th scope="col">{{$item->actual_productivity}}</th>
            <th scope="col">{{$item->remarks_productivity}}</th>
            <th scope="col">{{$item->actual_cost}}</th>
            <th scope="col">{{$item->remarks_cost}}</th>
            <th scope="col">{{$item->actual_moral}}</th>
            <th scope="col">{{$item->remarks_moral}}</th>
            <th scope="col">{{$item->actual_lima_r}}</th>
            <th scope="col">{{$item->remarks_lima_r}}</th>
            <th scope="col">{{$item->range}}</th>
            <th scope="col">{{$item->strong}}</th>
            <th scope="col">{{$item->weakness}}</th>
            <th scope="col">{{$item->skill}}</th>
            <th scope="col">{{$item->knowledge}}</th>
            @endforeach
          </tr>
        </tbody>
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>