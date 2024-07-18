<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="id" lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Logbook 3 Bulan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            text-indent: 0;
        }

        h1 {
            color: black;
            font-family: Calibri, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 16pt;
        }

        p {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
            margin: 0pt;
        }

        .s1 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
            vertical-align: 1pt;
        }

        h3 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s2 {
            color: black;
            font-family: Calibri, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s3 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s4 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s5 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .s6 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s7 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .page-break {
            page-break-before: always;
        }

        h2 {
            color: black;
            font-family: Calibri, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 13pt;
        }

        table,
        tbody {
            vertical-align: top;
            overflow: visible;
        }
    </style>
</head>

<body style="padding: 4%">
    <table class="table table-borderless">
        <tr>
            <th>
                <img src="{{ public_path('assets/logo-akti.png') }}" width="200" height="auto" class="img-fluid" alt="">
            </th>
            <th>
                <h5 class="text-end" style="font-size: 15px; margin:0%; padding:0%;"><b>Unit Pelatihan Kerja</b></h5>
                <h5 class="text-end" style="font-size: 14px; margin:0%; padding:0%;"><b>PT Toyota Motor Manufacturing
                        Indonesia</b><br>
                    <p class="text-end" style="font-size: 9px; margin:0%; padding:0%;">Kawasan Industri KIIC Lot DD 1,
                        Jl.Permata Raya, Karawang Barat<br>Sirnabaya, Telukjambe Timur, Karawang Jawa Barat 41361</p>
                </h5>
            </th>
        </tr>
    </table>
    <h5 style="padding-top: 15pt;padding-left: 20pt;text-indent: 0pt;text-align: left;  margin-bottom: 3%;">
        <center>EVALUASI MAHASISWA AKTI PEMAGANGAN 3 BULAN PERTAMA</center>
    </h5>
    <table style="border-collapse:collapse;margin-left:5.9pt;" cellspacing="0">
        <tr style="height:17pt">
            <td style="width:85pt">
                <p class="s1" style="padding-left: 2pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Nama Vokasi
                </p>
            </td>
            <td style="width:17pt">
                <p class="s1" style="padding-left: 3pt;text-indent: 0pt;line-height: 13pt;text-align: center;">:</p>
            </td>
            <td style="width:61pt">
                <p class="s1" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">{{$data->mahasiswa->user->nama}}
                </p>
            </td>
            <td style="width:22pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:51pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:93pt">
                <p class="s1" style="padding-left: 20pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Divisi</p>
            </td>
            <td style="width:21pt">
                <p class="s1" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: right;">:</p>
            </td>
            <td style="width:52pt">
                <p class="s1" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">{{$data->mentor->divisi}}</p>
            </td>
        </tr>
        <tr style="height:21pt">
            <td style="width:85pt">
                <p class="s1" style="padding-top: 3pt;padding-left: 2pt;text-indent: 0pt;text-align: left;">Noreg Vokasi
                </p>
            </td>
            <td style="width:17pt">
                <p class="s1" style="padding-top: 3pt;padding-left: 3pt;text-indent: 0pt;text-align: center;">:</p>
            </td>
            <td style="width:61pt">
                <p class="s1" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">{{$data->mahasiswa->no_reg}}</p>
            </td>
            <td style="width:22pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:51pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:93pt">
                <p class="s1" style="padding-top: 3pt;padding-left: 20pt;text-indent: 0pt;text-align: left;">Departement
                </p>
            </td>
            <td style="width:21pt">
                <p class="s1" style="padding-top: 3pt;padding-right: 5pt;text-indent: 0pt;text-align: right;">:</p>
            </td>
            <td style="width:52pt">
                <p class="s1" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">{{$data->departement->nama_departement}}
                </p>
            </td>
        </tr>
        <tr style="height:17pt">
            <td style="width:85pt">
                <p class="s1"
                    style="padding-top: 3pt;padding-left: 2pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                    Priode Magang</p>
            </td>
            <td style="width:17pt">
                <p class="s1"
                    style="padding-top: 3pt;padding-left: 3pt;text-indent: 0pt;line-height: 13pt;text-align: center;">:
                </p>
            </td>
            <td style="width:61pt">
                <p class="s1"
                    style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">{{$data->periode}}
                </p>
            </td>
            <td style="width:22pt">
                <p class="s1"
                    style="padding-top: 3pt;padding-left: 1pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                </p>
            </td>
            <td style="width:51pt">
                <p class="s1"
                    style="padding-top: 3pt;padding-left: 7pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                </p>
            </td>
            <td style="width:93pt">
                <p class="s1"
                    style="padding-top: 3pt;padding-left: 20pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                    Section</p>
            </td>
            <td style="width:21pt">
                <p class="s1"
                    style="padding-top: 3pt;padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: right;">:
                </p>
            </td>
            <td style="width:52pt">
                <p class="s1"
                    style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">{{$data->section->nama_section}}
                </p>
            </td>
        </tr>
    </table>
    <p style="margin-left: 6.27398pt; font-size: 18px; margin-top: 10px; margin-bottom: 10px;"><b>Table Evaluasi</b></p>

    <table style="border-collapse:collapse;margin-left:6.27398pt; width: 99%;" cellspacing="0">
        <tr style="height:25pt;">
            <td style="width:99pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p class="s3" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">Datang Terlambat</p>
            </td>
            <td style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="3">
                <p class="s3" style="text-indent: 0pt;text-align: center;">Sakit</p>
            </td>
            <td style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="3">
                <p class="s3" style="padding-left: 35pt;text-indent: 0pt;text-align: center;">Pulang Cepat</p>
            </td>
            <td style="width:78pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p class="s3" style="padding-left: 7pt;text-indent: 0pt;text-align: center;">Tidak Masuk</p>
            </td>
        </tr>
        <tr style="height:20pt">
            <td style="width:63pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt"
                rowspan="2">
                <p style="text-indent: 0pt;padding-top: 8pt; text-align: center;">2000</p>
            </td>
            <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                rowspan="2">
                <p class="s3" style="padding-top: 8pt;padding-left: 7pt;text-indent: 0pt;text-align: center;">Hari</p>
            </td>
            <td
                style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                <p class="s3" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">Opname:</p>
            </td>
            <td
                style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:32pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="text-indent: 0pt;text-align: center;">Hari</p>
            </td>
            <td
                style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                <p class="s3" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">Izin:</p>
            </td>
            <td
                style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="text-indent: 0pt;text-align: center;">Hari</p>
            </td>
            <td style="width:45pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt"
                rowspan="2">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:33pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                rowspan="2">
                <p class="s3" style="padding-top: 9pt;padding-left: 6pt;text-indent: 0pt;text-align: center;">Hari</p>
            </td>
        </tr>
        <tr style="height:19pt">
            <td
                style="width:56pt;border-top-style:dotted;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                <p class="s3" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">CD:</p>
            </td>
            <td
                style="width:49pt;border-top-style:dotted;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:32pt;border-top-style:dotted;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="text-indent: 0pt;text-align: center;">Hari</p>
            </td>
            <td
                style="width:67pt;border-top-style:dotted;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                <p class="s3" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">Tanpa Izin:</p>
            </td>
            <td
                style="width:35pt;border-top-style:dotted;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td
                style="width:35pt;border-top-style:dotted;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="text-indent: 0pt;text-align: center;">Hari</p>
            </td>
        </tr>
    </table>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <table style="border-collapse:collapse;margin-left:6.27398pt; width: 99%;" cellspacing="0">
        <tr style="height:44pt">
            <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                bgcolor="#E7E6E6">
                <p class="s4" style="padding-top: 15pt;text-indent: 0pt;text-align: center;">Performa</p>
            </td>
            <td style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                bgcolor="#E7E6E6">
                <p class="s4"
                    style="padding-top: 8pt;padding-right:3pt;padding-left:3pt; text-indent: 0pt;text-align: center;">
                    Target Point</p>
            </td>
            <td style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                bgcolor="#E7E6E6">
                <p class="s4"
                    style="padding-top: 5pt;padding-right:3pt;padding-left:3pt;text-indent: 0pt;text-align: center;">
                    Actual Point</p>
                <p class="s4" style="padding-bottom: 2pt;text-indent: 0pt;text-align: center;">(1 – 4)
                </p>
            </td>
            <td style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                bgcolor="#E7E6E6">
                <p class="s4" style="padding-top: 15pt;text-indent: 0pt;text-align: center;">Remarks</p>
            </td>
        </tr>
        <tr style="height:23pt">
            <td
                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">1. <span
                        class="s6">Perilaku Safety (APD, SPC, SCW, &amp; KY)</span></p>
            </td>
            <td
                style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="padding-top: 4pt;text-indent: 0pt;text-align: center;">3</p>
            </td>
            <td
                style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">isi actual 1</p>
            </td>
            <td
                style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">isi remark 1</p>
            </td>
        </tr>
        <tr style="height:30pt">
            <td
                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">2. <span class="s6">Quality
                        (BIQ, Analisa Problem, Follow SW)</span></p>
            </td>
            <td
                style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="padding-top: 7pt;text-indent: 0pt;text-align: center;">3</p>
            </td>
            <td
                style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">isi actual 2</p>
            </td>
            <td
                style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">isi remark 2</p>
            </td>
        </tr>
        <tr style="height:31pt">
            <td
                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">3. <span
                        class="s6">Productivity (Penguasaan Job, Motivasi, &amp; TPM)</span></p>
            </td>
            <td
                style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="padding-top: 7pt;text-indent: 0pt;text-align: center;">3</p>
            </td>
            <td
                style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">isi actual 3</p>
            </td>
            <td
                style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">isi remark 3</p>
            </td>
        </tr>
        <tr style="height:23pt">
            <td
                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">4. <span
                        class="s6">Cost (Pemakaian Material)</span></p>
            </td>
            <td
                style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="padding-top: 4pt;text-indent: 0pt;text-align: center;">3</p>
            </td>
            <td
                style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">isi actual 4</p>
            </td>
            <td
                style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">isi remark 4</p>
            </td>
        </tr>
        <tr style="height:31pt">
            <td
                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">5. <span
                        class="s6">Moral
                        (Mindset, Inisiatif, Kepribadian, Disiplin, Responsibility&amp; Kerjasama)</span></p>
            </td>
            <td
                style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="padding-top: 7pt;text-indent: 0pt;text-align: center;">3</p>
            </td>
            <td
                style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center; padding-top: 7pt">isi actual 5</p>
            </td>
            <td
                style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center; padding-top: 7pt">isi remark 5</p>
            </td>
        </tr>
        <tr style="height:23pt">
            <td
                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">6. <span
                        class="s6">Implementasi tentang 5R</span></p>
            </td>
            <td
                style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="padding-top: 4pt;text-indent: 0pt;text-align: center;">3</p>
            </td>
            <td
                style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">isi actual 6</p>
            </td>
            <td
                style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">isi remark 6</p>
            </td>
        </tr>
        <tr style="height:23pt">
            <td
                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s4" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Total Point
                </p>
            </td>
            <td style="width:217pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="3">
                <p style="text-indent: 0pt;text-align: center;">isi total point</p>
            </td>
        </tr>
    </table>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <table style="border-collapse:collapse;margin-left:6.27398pt; width: 99%;" cellspacing="0">
        <tr style="height:29pt">
            <td style="width:150pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                rowspan="2">
                <p style="padding-top: 2pt;text-indent: 0pt;text-align: left;"><br /></p>
                <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Range</p>
            </td>
            <td
                style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="text-indent: 0pt;text-align: center;">D</p>
                <p class="s3" style="padding-top: 1pt;text-indent: 0pt;text-align: center;">(Poor)</p>
            </td>
            <td
                style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="text-indent: 0pt;text-align: center;">C</p>
                <p class="s3" style="padding-top: 1pt;text-indent: 0pt;text-align: center;">(Enough)</p>
            </td>
            <td
                style="width:76pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="text-indent: 0pt;text-align: center;">B</p>
                <p class="s3" style="padding-top: 1pt;text-indent: 0pt;text-align: center;">(Good)</p>
            </td>
            <td
                style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="text-indent: 0pt;text-align: center;">A</p>
                <p class="s3" style="padding-top: 1pt;text-indent: 0pt;text-align: center;">(Excellent)</p>
            </td>
        </tr>
        <tr style="height:15pt">
            <td
                style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="text-indent: 0pt;text-align: center;">&lt; 12</p>
            </td>
            <td
                style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="padding-left: 19pt;text-indent: 0pt;text-align: center;">12 – 17</p>
            </td>
            <td
                style="width:76pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="padding-left: 19pt;text-indent: 0pt;text-align: center;">18 – 23</p>
            </td>
            <td
                style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="text-indent: 0pt;text-align: center;">24</p>
            </td>
        </tr>
    </table>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <table style="border-collapse:collapse;margin-left:6.27398pt; width: 99%;" cellspacing="0">
        <tr style="height:27pt">
            <td
                style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s7" style="padding-top: 6pt;padding-left: 13pt;text-indent: 0pt;text-align: center;">Strong
                    Point</p>
            </td>
            <td
                style="width:112pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s7" style="padding-top: 6pt;text-indent: 0pt;text-align: center;">Weakness Point</p>
            </td>
            <td
                style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s7" style="padding-top: 6pt;padding-left: 13pt;text-indent: 0pt;text-align: center;">
                    Development
                    Skills</p>
            </td>
            <td
                style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s7" style="padding-top: 6pt;text-indent: 0pt;text-align: center;">
                    Development Knowledge</p>
            </td>
        </tr>
        <tr style="height:87pt">
            <td
                style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">isi strong point</p>
            </td>
            <td
                style="width:112pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">isi weaknes </p>
            </td>
            <td
                style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">isi dev skill</p>
            </td>
            <td
                style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">dev know</p>
            </td>
        </tr>
    </table>
    <p style="padding-top: 6pt;padding-bottom: 1pt;text-align: right; padding-right: 10px; margin-bottom:10px">
        Karawang, 21 Juni 2024</p>
    <table style="border-collapse:collapse;margin-left:6.27398pt; width: 99%;" cellspacing="0" cellspacing="0">
        <tr style="height:30pt;">
            <td
                style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="padding-top: 5pt;text-align: center;">Kepala Program Studi</p>
            </td>
            <td style="width:87pt;">
            </td>
            <td
                style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="padding-top: 7pt;text-align: center;">Mentor</p>
            </td>
            <td
                style="width:88pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="padding-top: 7pt;text-align: center;">Section
                    Head</p>
            </td>
            <td
                style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s3" style="padding-top: 7pt;text-align: center;">Dept. Head
                </p>
            </td>
        </tr>
        <tr style="height:56pt">
            <td
                style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">isi kepala program studi</p>
            </td>
            <!-- blank -->
            <td></td>
            <!-- blank -->
            <td
                style="width:88pt;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">isi mentor</p>
            </td>
            <td
                style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">isi section head</p>
            </td>
            <td
                style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: center;">isi dept head</p>
            </td>
        </tr>
    </table>

    <div class="page-break"></div>
    <!-- page break -->

    <body style="padding: 4%">
        <table class="table table-borderless">
            <tr>
                <th>
                    <img src="{{ public_path('logo-akti.png') }}" width="200" height="auto" class="img-fluid" alt="">
                </th>
                <th>
                    <h5 class="text-end" style="font-size: 15px; margin:0%; padding:0%;"><b>Unit Pelatihan Kerja</b>
                    </h5>
                    <h5 class="text-end" style="font-size: 14px; margin:0%; padding:0%;"><b>PT Toyota Motor
                            Manufacturing Indonesia</b><br>
                        <p class="text-end" style="font-size: 9px; margin:0%; padding:0%;">Kawasan Industri KIIC Lot DD
                            1, Jl.Permata Raya, Karawang Barat<br>Sirnabaya, Telukjambe Timur, Karawang Jawa Barat 41361
                        </p>
                    </h5>
                </th>
            </tr>
        </table>
        <h5 style="padding-top: 15pt;padding-left: 20pt;text-indent: 0pt;text-align: left;  margin-bottom: 3%;">
            <center>EVALUASI MAHASISWA AKTI PEMAGANGAN 4 BULAN KEDUA</center>
        </h5>
        <table style="border-collapse:collapse;margin-left:5.9pt;" cellspacing="0">
            <tr style="height:17pt">
                <td style="width:85pt">
                    <p class="s1" style="padding-left: 2pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Nama
                        Vokasi
                    </p>
                </td>
                <td style="width:17pt">
                    <p class="s1" style="padding-left: 3pt;text-indent: 0pt;line-height: 13pt;text-align: center;">:</p>
                </td>
                <td style="width:61pt">
                    <p class="s1" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        Wahyuadin
                    </p>
                </td>
                <td style="width:22pt">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
                <td style="width:51pt">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
                <td style="width:93pt">
                    <p class="s1" style="padding-left: 20pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Divisi
                    </p>
                </td>
                <td style="width:21pt">
                    <p class="s1" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: right;">:</p>
                </td>
                <td style="width:52pt">
                    <p class="s1" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Admin
                    </p>
                </td>
            </tr>
            <tr style="height:21pt">
                <td style="width:85pt">
                    <p class="s1" style="padding-top: 3pt;padding-left: 2pt;text-indent: 0pt;text-align: left;">Noreg
                        Vokasi
                    </p>
                </td>
                <td style="width:17pt">
                    <p class="s1" style="padding-top: 3pt;padding-left: 3pt;text-indent: 0pt;text-align: center;">:</p>
                </td>
                <td style="width:61pt">
                    <p class="s1" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">1141</p>
                </td>
                <td style="width:22pt">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
                <td style="width:51pt">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
                <td style="width:93pt">
                    <p class="s1" style="padding-top: 3pt;padding-left: 20pt;text-indent: 0pt;text-align: left;">
                        Departement
                    </p>
                </td>
                <td style="width:21pt">
                    <p class="s1" style="padding-top: 3pt;padding-right: 5pt;text-indent: 0pt;text-align: right;">:</p>
                </td>
                <td style="width:52pt">
                    <p class="s1" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        Penristek
                    </p>
                </td>
            </tr>
            <tr style="height:17pt">
                <td style="width:85pt">
                    <p class="s1"
                        style="padding-top: 3pt;padding-left: 2pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        Priode Magang</p>
                </td>
                <td style="width:17pt">
                    <p class="s1"
                        style="padding-top: 3pt;padding-left: 3pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                        :
                    </p>
                </td>
                <td style="width:61pt">
                    <p class="s1"
                        style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        2021
                    </p>
                </td>
                <td style="width:22pt">
                    <p class="s1"
                        style="padding-top: 3pt;padding-left: 1pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        s/d
                    </p>
                </td>
                <td style="width:51pt">
                    <p class="s1"
                        style="padding-top: 3pt;padding-left: 7pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        2024
                    </p>
                </td>
                <td style="width:93pt">
                    <p class="s1"
                        style="padding-top: 3pt;padding-left: 20pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        Section</p>
                </td>
                <td style="width:21pt">
                    <p class="s1"
                        style="padding-top: 3pt;padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                        :
                    </p>
                </td>
                <td style="width:52pt">
                    <p class="s1"
                        style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        Lab
                    </p>
                </td>
            </tr>
        </table>
        <p style="margin-left: 6.27398pt; font-size: 18px; margin-top: 10px; margin-bottom: 10px;"><b>Table Evaluasi</b>
        </p>

        <table style="border-collapse:collapse;margin-left:6.27398pt; width: 99%;" cellspacing="0">
            <tr style="height:25pt;">
                <td style="width:99pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    colspan="2">
                    <p class="s3" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">Datang Terlambat</p>
                </td>
                <td style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    colspan="3">
                    <p class="s3" style="text-indent: 0pt;text-align: center;">Sakit</p>
                </td>
                <td style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    colspan="3">
                    <p class="s3" style="padding-left: 35pt;text-indent: 0pt;text-align: center;">Pulang Cepat</p>
                </td>
                <td style="width:78pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    colspan="2">
                    <p class="s3" style="padding-left: 7pt;text-indent: 0pt;text-align: center;">Tidak Masuk</p>
                </td>
            </tr>
            <tr style="height:20pt">
                <td style="width:63pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt"
                    rowspan="2">
                    <p style="text-indent: 0pt;padding-top: 8pt; text-align: center;">2000</p>
                </td>
                <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    rowspan="2">
                    <p class="s3" style="padding-top: 8pt;padding-left: 7pt;text-indent: 0pt;text-align: center;">Hari
                    </p>
                </td>
                <td
                    style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                    <p class="s3" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">Opname:</p>
                </td>
                <td
                    style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
                <td
                    style="width:32pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="text-indent: 0pt;text-align: center;">Hari</p>
                </td>
                <td
                    style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                    <p class="s3" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">Izin:</p>
                </td>
                <td
                    style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
                <td
                    style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="text-indent: 0pt;text-align: center;">Hari</p>
                </td>
                <td style="width:45pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt"
                    rowspan="2">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
                <td style="width:33pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    rowspan="2">
                    <p class="s3" style="padding-top: 9pt;padding-left: 6pt;text-indent: 0pt;text-align: center;">Hari
                    </p>
                </td>
            </tr>
            <tr style="height:19pt">
                <td
                    style="width:56pt;border-top-style:dotted;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                    <p class="s3" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">CD:</p>
                </td>
                <td
                    style="width:49pt;border-top-style:dotted;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
                <td
                    style="width:32pt;border-top-style:dotted;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="text-indent: 0pt;text-align: center;">Hari</p>
                </td>
                <td
                    style="width:67pt;border-top-style:dotted;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                    <p class="s3" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">Tanpa Izin:</p>
                </td>
                <td
                    style="width:35pt;border-top-style:dotted;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
                <td
                    style="width:35pt;border-top-style:dotted;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="text-indent: 0pt;text-align: center;">Hari</p>
                </td>
            </tr>
        </table>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <table style="border-collapse:collapse;margin-left:6.27398pt; width: 99%;" cellspacing="0">
            <tr style="height:44pt">
                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s4" style="padding-top: 15pt;text-indent: 0pt;text-align: center;">Performa</p>
                </td>
                <td style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s4"
                        style="padding-top: 8pt;padding-right:3pt;padding-left:3pt; text-indent: 0pt;text-align: center;">
                        Target Point</p>
                </td>
                <td style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s4"
                        style="padding-top: 5pt;padding-right:3pt;padding-left:3pt;text-indent: 0pt;text-align: center;">
                        Actual Point</p>
                    <p class="s4" style="padding-bottom: 2pt;text-indent: 0pt;text-align: center;">(1 – 4)
                    </p>
                </td>
                <td style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    bgcolor="#E7E6E6">
                    <p class="s4" style="padding-top: 15pt;text-indent: 0pt;text-align: center;">Remarks</p>
                </td>
            </tr>
            <tr style="height:23pt">
                <td
                    style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">1. <span
                            class="s6">Perilaku Safety (APD, SPC, SCW, &amp; KY)</span></p>
                </td>
                <td
                    style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="padding-top: 4pt;text-indent: 0pt;text-align: center;">3</p>
                </td>
                <td
                    style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">isi actual 1</p>
                </td>
                <td
                    style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">isi remark 1</p>
                </td>
            </tr>
            <tr style="height:30pt">
                <td
                    style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">2. <span
                            class="s6">Quality (BIQ, Analisa Problem, Follow SW)</span></p>
                </td>
                <td
                    style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="padding-top: 7pt;text-indent: 0pt;text-align: center;">3</p>
                </td>
                <td
                    style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">isi actual 2</p>
                </td>
                <td
                    style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">isi remark 2</p>
                </td>
            </tr>
            <tr style="height:31pt">
                <td
                    style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">3. <span
                            class="s6">Productivity (Penguasaan Job, Motivasi, &amp; TPM)</span></p>
                </td>
                <td
                    style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="padding-top: 7pt;text-indent: 0pt;text-align: center;">3</p>
                </td>
                <td
                    style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">isi actual 3</p>
                </td>
                <td
                    style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">isi remark 3</p>
                </td>
            </tr>
            <tr style="height:23pt">
                <td
                    style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">4. <span
                            class="s6">Cost (Pemakaian Material)</span></p>
                </td>
                <td
                    style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="padding-top: 4pt;text-indent: 0pt;text-align: center;">3</p>
                </td>
                <td
                    style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">isi actual 4</p>
                </td>
                <td
                    style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">isi remark 4</p>
                </td>
            </tr>
            <tr style="height:31pt">
                <td
                    style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">5. <span
                            class="s6">Moral
                            (Mindset, Inisiatif, Kepribadian, Disiplin, Responsibility&amp; Kerjasama)</span></p>
                </td>
                <td
                    style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="padding-top: 7pt;text-indent: 0pt;text-align: center;">3</p>
                </td>
                <td
                    style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center; padding-top: 7pt">isi actual 5</p>
                </td>
                <td
                    style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center; padding-top: 7pt">isi remark 5</p>
                </td>
            </tr>
            <tr style="height:23pt">
                <td
                    style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">6. <span
                            class="s6">Implementasi tentang 5R</span></p>
                </td>
                <td
                    style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="padding-top: 4pt;text-indent: 0pt;text-align: center;">3</p>
                </td>
                <td
                    style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">isi actual 6</p>
                </td>
                <td
                    style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">isi remark 6</p>
                </td>
            </tr>
            <tr style="height:23pt">
                <td
                    style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Total
                        Point
                    </p>
                </td>
                <td style="width:217pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    colspan="3">
                    <p style="text-indent: 0pt;text-align: center;">isi total point</p>
                </td>
            </tr>
        </table>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <table style="border-collapse:collapse;margin-left:6.27398pt; width: 99%;" cellspacing="0">
            <tr style="height:29pt">
                <td style="width:150pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                    rowspan="2">
                    <p style="padding-top: 2pt;text-indent: 0pt;text-align: left;"><br /></p>
                    <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Range</p>
                </td>
                <td
                    style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="text-indent: 0pt;text-align: center;">D</p>
                    <p class="s3" style="padding-top: 1pt;text-indent: 0pt;text-align: center;">(Poor)</p>
                </td>
                <td
                    style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="text-indent: 0pt;text-align: center;">C</p>
                    <p class="s3" style="padding-top: 1pt;text-indent: 0pt;text-align: center;">(Enough)</p>
                </td>
                <td
                    style="width:76pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="text-indent: 0pt;text-align: center;">B</p>
                    <p class="s3" style="padding-top: 1pt;text-indent: 0pt;text-align: center;">(Good)</p>
                </td>
                <td
                    style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="text-indent: 0pt;text-align: center;">A</p>
                    <p class="s3" style="padding-top: 1pt;text-indent: 0pt;text-align: center;">(Excellent)</p>
                </td>
            </tr>
            <tr style="height:15pt">
                <td
                    style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="text-indent: 0pt;text-align: center;">&lt; 12</p>
                </td>
                <td
                    style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="padding-left: 19pt;text-indent: 0pt;text-align: center;">12 – 17</p>
                </td>
                <td
                    style="width:76pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="padding-left: 19pt;text-indent: 0pt;text-align: center;">18 – 23</p>
                </td>
                <td
                    style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="text-indent: 0pt;text-align: center;">24</p>
                </td>
            </tr>
        </table>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <table style="border-collapse:collapse;margin-left:6.27398pt; width: 99%;" cellspacing="0">
            <tr style="height:27pt">
                <td
                    style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s7" style="padding-top: 6pt;padding-left: 13pt;text-indent: 0pt;text-align: center;">
                        Strong Point</p>
                </td>
                <td
                    style="width:112pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s7" style="padding-top: 6pt;text-indent: 0pt;text-align: center;">Weakness Point</p>
                </td>
                <td
                    style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s7" style="padding-top: 6pt;padding-left: 13pt;text-indent: 0pt;text-align: center;">
                        Development
                        Skills</p>
                </td>
                <td
                    style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s7" style="padding-top: 6pt;text-indent: 0pt;text-align: center;">
                        Development Knowledge</p>
                </td>
            </tr>
            <tr style="height:87pt">
                <td
                    style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">isi strong point</p>
                </td>
                <td
                    style="width:112pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">isi weaknes </p>
                </td>
                <td
                    style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">isi dev skill</p>
                </td>
                <td
                    style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">dev know</p>
                </td>
            </tr>
        </table>
        <p style="padding-top: 6pt;padding-bottom: 1pt;text-align: right; padding-right: 10px; margin-bottom:10px">
            Karawang, 21 Juni 2024</p>
        <table style="border-collapse:collapse;margin-left:6.27398pt; width: 99%;" cellspacing="0" cellspacing="0">
            <tr style="height:30pt;">
                <td
                    style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="padding-top: 5pt;text-align: center;">Kepala Program Studi</p>
                </td>
                <td style="width:87pt;">
                </td>
                <td
                    style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="padding-top: 7pt;text-align: center;">Mentor</p>
                </td>
                <td
                    style="width:88pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="padding-top: 7pt;text-align: center;">Section
                        Head</p>
                </td>
                <td
                    style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s3" style="padding-top: 7pt;text-align: center;">Dept. Head
                    </p>
                </td>
            </tr>
            <tr style="height:56pt">
                <td
                    style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">isi kepala program studi</p>
                </td>
                <!-- blank -->
                <td></td>
                <!-- blank -->
                <td
                    style="width:88pt;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">isi mentor</p>
                </td>
                <td
                    style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">isi section head</p>
                </td>
                <td
                    style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p style="text-indent: 0pt;text-align: center;">isi dept head</p>
                </td>
            </tr>
        </table>

        <div class="page-break"></div>
        <!-- page break -->

        <body style="padding: 4%">
            <table class="table table-borderless">
                <tr>
                    <th>
                        <img src="{{ public_path('logo-akti.png') }}" width="200" height="auto" class="img-fluid"
                            alt="">
                    </th>
                    <th>
                        <h5 class="text-end" style="font-size: 15px; margin:0%; padding:0%;"><b>Unit Pelatihan Kerja</b>
                        </h5>
                        <h5 class="text-end" style="font-size: 14px; margin:0%; padding:0%;"><b>PT Toyota Motor
                                Manufacturing Indonesia</b><br>
                            <p class="text-end" style="font-size: 9px; margin:0%; padding:0%;">Kawasan Industri KIIC Lot
                                DD 1, Jl.Permata Raya, Karawang Barat<br>Sirnabaya, Telukjambe Timur, Karawang Jawa
                                Barat 41361</p>
                        </h5>
                    </th>
                </tr>
            </table>
            <h5 style="padding-top: 15pt;padding-left: 20pt;text-indent: 0pt;text-align: left;  margin-bottom: 3%;">
                <center>EVALUASI MAHASISWA AKTI PEMAGANGAN 4 BULAN KETIGA</center>
            </h5>
            <table style="border-collapse:collapse;margin-left:5.9pt;" cellspacing="0">
                <tr style="height:17pt">
                    <td style="width:85pt">
                        <p class="s1" style="padding-left: 2pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Nama Vokasi
                        </p>
                    </td>
                    <td style="width:17pt">
                        <p class="s1" style="padding-left: 3pt;text-indent: 0pt;line-height: 13pt;text-align: center;">:
                        </p>
                    </td>
                    <td style="width:61pt">
                        <p class="s1" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Wahyuadin
                        </p>
                    </td>
                    <td style="width:22pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                    <td style="width:51pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                    <td style="width:93pt">
                        <p class="s1" style="padding-left: 20pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Divisi</p>
                    </td>
                    <td style="width:21pt">
                        <p class="s1" style="padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: right;">:
                        </p>
                    </td>
                    <td style="width:52pt">
                        <p class="s1" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Admin</p>
                    </td>
                </tr>
                <tr style="height:21pt">
                    <td style="width:85pt">
                        <p class="s1" style="padding-top: 3pt;padding-left: 2pt;text-indent: 0pt;text-align: left;">
                            Noreg Vokasi
                        </p>
                    </td>
                    <td style="width:17pt">
                        <p class="s1" style="padding-top: 3pt;padding-left: 3pt;text-indent: 0pt;text-align: center;">:
                        </p>
                    </td>
                    <td style="width:61pt">
                        <p class="s1" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">1141
                        </p>
                    </td>
                    <td style="width:22pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                    <td style="width:51pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                    <td style="width:93pt">
                        <p class="s1" style="padding-top: 3pt;padding-left: 20pt;text-indent: 0pt;text-align: left;">
                            Departement
                        </p>
                    </td>
                    <td style="width:21pt">
                        <p class="s1" style="padding-top: 3pt;padding-right: 5pt;text-indent: 0pt;text-align: right;">:
                        </p>
                    </td>
                    <td style="width:52pt">
                        <p class="s1" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">
                            Penristek
                        </p>
                    </td>
                </tr>
                <tr style="height:17pt">
                    <td style="width:85pt">
                        <p class="s1"
                            style="padding-top: 3pt;padding-left: 2pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Priode Magang</p>
                    </td>
                    <td style="width:17pt">
                        <p class="s1"
                            style="padding-top: 3pt;padding-left: 3pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                            :
                        </p>
                    </td>
                    <td style="width:61pt">
                        <p class="s1"
                            style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            2021
                        </p>
                    </td>
                    <td style="width:22pt">
                        <p class="s1"
                            style="padding-top: 3pt;padding-left: 1pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            s/d
                        </p>
                    </td>
                    <td style="width:51pt">
                        <p class="s1"
                            style="padding-top: 3pt;padding-left: 7pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            2024
                        </p>
                    </td>
                    <td style="width:93pt">
                        <p class="s1"
                            style="padding-top: 3pt;padding-left: 20pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Section</p>
                    </td>
                    <td style="width:21pt">
                        <p class="s1"
                            style="padding-top: 3pt;padding-right: 5pt;text-indent: 0pt;line-height: 13pt;text-align: right;">
                            :
                        </p>
                    </td>
                    <td style="width:52pt">
                        <p class="s1"
                            style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                            Lab
                        </p>
                    </td>
                </tr>
            </table>
            <p style="margin-left: 6.27398pt; font-size: 18px; margin-top: 10px; margin-bottom: 10px;"><b>Table
                    Evaluasi</b></p>

            <table style="border-collapse:collapse;margin-left:6.27398pt; width: 99%;" cellspacing="0">
                <tr style="height:25pt;">
                    <td style="width:99pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2">
                        <p class="s3" style="padding-left: 5pt;text-indent: 0pt;text-align: center;">Datang Terlambat
                        </p>
                    </td>
                    <td style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="3">
                        <p class="s3" style="text-indent: 0pt;text-align: center;">Sakit</p>
                    </td>
                    <td style="width:137pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="3">
                        <p class="s3" style="padding-left: 35pt;text-indent: 0pt;text-align: center;">Pulang Cepat</p>
                    </td>
                    <td style="width:78pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="2">
                        <p class="s3" style="padding-left: 7pt;text-indent: 0pt;text-align: center;">Tidak Masuk</p>
                    </td>
                </tr>
                <tr style="height:20pt">
                    <td style="width:63pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt"
                        rowspan="2">
                        <p style="text-indent: 0pt;padding-top: 8pt; text-align: center;">2000</p>
                    </td>
                    <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        rowspan="2">
                        <p class="s3" style="padding-top: 8pt;padding-left: 7pt;text-indent: 0pt;text-align: center;">
                            Hari</p>
                    </td>
                    <td
                        style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                        <p class="s3" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">Opname:</p>
                    </td>
                    <td
                        style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                    <td
                        style="width:32pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="text-indent: 0pt;text-align: center;">Hari</p>
                    </td>
                    <td
                        style="width:67pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                        <p class="s3" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">Izin:</p>
                    </td>
                    <td
                        style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                    <td
                        style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:dotted;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="text-indent: 0pt;text-align: center;">Hari</p>
                    </td>
                    <td style="width:45pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt"
                        rowspan="2">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                    <td style="width:33pt;border-top-style:solid;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        rowspan="2">
                        <p class="s3" style="padding-top: 9pt;padding-left: 6pt;text-indent: 0pt;text-align: center;">
                            Hari</p>
                    </td>
                </tr>
                <tr style="height:19pt">
                    <td
                        style="width:56pt;border-top-style:dotted;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                        <p class="s3" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">CD:</p>
                    </td>
                    <td
                        style="width:49pt;border-top-style:dotted;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                    <td
                        style="width:32pt;border-top-style:dotted;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="text-indent: 0pt;text-align: center;">Hari</p>
                    </td>
                    <td
                        style="width:67pt;border-top-style:dotted;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                        <p class="s3" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">Tanpa Izin:</p>
                    </td>
                    <td
                        style="width:35pt;border-top-style:dotted;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:dotted;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    </td>
                    <td
                        style="width:35pt;border-top-style:dotted;border-top-width:1pt;border-left-style:dotted;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="text-indent: 0pt;text-align: center;">Hari</p>
                    </td>
                </tr>
            </table>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <table style="border-collapse:collapse;margin-left:6.27398pt; width: 99%;" cellspacing="0">
                <tr style="height:44pt">
                    <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        bgcolor="#E7E6E6">
                        <p class="s4" style="padding-top: 15pt;text-indent: 0pt;text-align: center;">Performa</p>
                    </td>
                    <td style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        bgcolor="#E7E6E6">
                        <p class="s4"
                            style="padding-top: 8pt;padding-right:3pt;padding-left:3pt; text-indent: 0pt;text-align: center;">
                            Target Point</p>
                    </td>
                    <td style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        bgcolor="#E7E6E6">
                        <p class="s4"
                            style="padding-top: 5pt;padding-right:3pt;padding-left:3pt;text-indent: 0pt;text-align: center;">
                            Actual Point</p>
                        <p class="s4" style="padding-bottom: 2pt;text-indent: 0pt;text-align: center;">(1 – 4)
                        </p>
                    </td>
                    <td style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        bgcolor="#E7E6E6">
                        <p class="s4" style="padding-top: 15pt;text-indent: 0pt;text-align: center;">Remarks</p>
                    </td>
                </tr>
                <tr style="height:23pt">
                    <td
                        style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s5" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">1.
                            <span class="s6">Perilaku Safety (APD, SPC, SCW, &amp; KY)</span></p>
                    </td>
                    <td
                        style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="padding-top: 4pt;text-indent: 0pt;text-align: center;">3</p>
                    </td>
                    <td
                        style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">isi actual 1</p>
                    </td>
                    <td
                        style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">isi remark 1</p>
                    </td>
                </tr>
                <tr style="height:30pt">
                    <td
                        style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s5" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">2. <span
                                class="s6">Quality (BIQ, Analisa Problem, Follow SW)</span></p>
                    </td>
                    <td
                        style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="padding-top: 7pt;text-indent: 0pt;text-align: center;">3</p>
                    </td>
                    <td
                        style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">isi actual 2</p>
                    </td>
                    <td
                        style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">isi remark 2</p>
                    </td>
                </tr>
                <tr style="height:31pt">
                    <td
                        style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s5" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">3. <span
                                class="s6">Productivity (Penguasaan Job, Motivasi, &amp; TPM)</span></p>
                    </td>
                    <td
                        style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="padding-top: 7pt;text-indent: 0pt;text-align: center;">3</p>
                    </td>
                    <td
                        style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">isi actual 3</p>
                    </td>
                    <td
                        style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">isi remark 3</p>
                    </td>
                </tr>
                <tr style="height:23pt">
                    <td
                        style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s5" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">4.
                            <span class="s6">Cost (Pemakaian Material)</span></p>
                    </td>
                    <td
                        style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="padding-top: 4pt;text-indent: 0pt;text-align: center;">3</p>
                    </td>
                    <td
                        style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">isi actual 4</p>
                    </td>
                    <td
                        style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">isi remark 4</p>
                    </td>
                </tr>
                <tr style="height:31pt">
                    <td
                        style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s5" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">5.
                            <span class="s6">Moral
                                (Mindset, Inisiatif, Kepribadian, Disiplin, Responsibility&amp; Kerjasama)</span></p>
                    </td>
                    <td
                        style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="padding-top: 7pt;text-indent: 0pt;text-align: center;">3</p>
                    </td>
                    <td
                        style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center; padding-top: 7pt">isi actual 5</p>
                    </td>
                    <td
                        style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center; padding-top: 7pt">isi remark 5</p>
                    </td>
                </tr>
                <tr style="height:23pt">
                    <td
                        style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s5" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">6.
                            <span class="s6">Implementasi tentang 5R</span></p>
                    </td>
                    <td
                        style="width:56pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="padding-top: 4pt;text-indent: 0pt;text-align: center;">3</p>
                    </td>
                    <td
                        style="width:57pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">isi actual 6</p>
                    </td>
                    <td
                        style="width:104pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">isi remark 6</p>
                    </td>
                </tr>
                <tr style="height:23pt">
                    <td
                        style="width:234pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s4" style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">
                            Total Point
                        </p>
                    </td>
                    <td style="width:217pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        colspan="3">
                        <p style="text-indent: 0pt;text-align: center;">isi total point</p>
                    </td>
                </tr>
            </table>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <table style="border-collapse:collapse;margin-left:6.27398pt; width: 99%;" cellspacing="0">
                <tr style="height:29pt">
                    <td style="width:150pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                        rowspan="2">
                        <p style="padding-top: 2pt;text-indent: 0pt;text-align: left;"><br /></p>
                        <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Range</p>
                    </td>
                    <td
                        style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="text-indent: 0pt;text-align: center;">D</p>
                        <p class="s3" style="padding-top: 1pt;text-indent: 0pt;text-align: center;">(Poor)</p>
                    </td>
                    <td
                        style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="text-indent: 0pt;text-align: center;">C</p>
                        <p class="s3" style="padding-top: 1pt;text-indent: 0pt;text-align: center;">(Enough)</p>
                    </td>
                    <td
                        style="width:76pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="text-indent: 0pt;text-align: center;">B</p>
                        <p class="s3" style="padding-top: 1pt;text-indent: 0pt;text-align: center;">(Good)</p>
                    </td>
                    <td
                        style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="text-indent: 0pt;text-align: center;">A</p>
                        <p class="s3" style="padding-top: 1pt;text-indent: 0pt;text-align: center;">(Excellent)</p>
                    </td>
                </tr>
                <tr style="height:15pt">
                    <td
                        style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="text-indent: 0pt;text-align: center;">&lt; 12</p>
                    </td>
                    <td
                        style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="padding-left: 19pt;text-indent: 0pt;text-align: center;">12 – 17</p>
                    </td>
                    <td
                        style="width:76pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="padding-left: 19pt;text-indent: 0pt;text-align: center;">18 – 23</p>
                    </td>
                    <td
                        style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="text-indent: 0pt;text-align: center;">24</p>
                    </td>
                </tr>
            </table>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <table style="border-collapse:collapse;margin-left:6.27398pt; width: 99%;" cellspacing="0">
                <tr style="height:27pt">
                    <td
                        style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s7" style="padding-top: 6pt;padding-left: 13pt;text-indent: 0pt;text-align: center;">
                            Strong Point</p>
                    </td>
                    <td
                        style="width:112pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s7" style="padding-top: 6pt;text-indent: 0pt;text-align: center;">Weakness Point</p>
                    </td>
                    <td
                        style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s7" style="padding-top: 6pt;padding-left: 13pt;text-indent: 0pt;text-align: center;">
                            Development
                            Skills</p>
                    </td>
                    <td
                        style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s7" style="padding-top: 6pt;text-indent: 0pt;text-align: center;">
                            Development Knowledge</p>
                    </td>
                </tr>
                <tr style="height:87pt">
                    <td
                        style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">isi strong point</p>
                    </td>
                    <td
                        style="width:112pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">isi weaknes </p>
                    </td>
                    <td
                        style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">isi dev skill</p>
                    </td>
                    <td
                        style="width:113pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">dev know</p>
                    </td>
                </tr>
            </table>
            <p style="padding-top: 6pt;padding-bottom: 1pt;text-align: right; padding-right: 10px; margin-bottom:10px">
                Karawang, 21 Juni 2024</p>
            <table style="border-collapse:collapse;margin-left:6.27398pt; width: 99%;" cellspacing="0" cellspacing="0">
                <tr style="height:30pt;">
                    <td
                        style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="padding-top: 5pt;text-align: center;">Kepala Program Studi</p>
                    </td>
                    <td style="width:87pt;">
                    </td>
                    <td
                        style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="padding-top: 7pt;text-align: center;">Mentor</p>
                    </td>
                    <td
                        style="width:88pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="padding-top: 7pt;text-align: center;">Section
                            Head</p>
                    </td>
                    <td
                        style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p class="s3" style="padding-top: 7pt;text-align: center;">Dept. Head
                        </p>
                    </td>
                </tr>
                <tr style="height:56pt">
                    <td
                        style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">isi kepala program studi</p>
                    </td>
                    <!-- blank -->
                    <td></td>
                    <!-- blank -->
                    <td
                        style="width:88pt;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">isi mentor</p>
                    </td>
                    <td
                        style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">isi section head</p>
                    </td>
                    <td
                        style="width:87pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                        <p style="text-indent: 0pt;text-align: center;">isi dept head</p>
                    </td>
                </tr>
            </table>

            <div class="page-break"></div>
            <!-- page break -->
            <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span
                    style=" color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10pt;">
                </span></p>
            <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <h2 style="text-indent: 0pt;text-align: center;">CATATAN</h2>
            <p
                style="padding-left: 5pt;padding-right: 5pt;padding-top: 4pt;margin-bottom: 10px ;text-indent: 0pt;text-align: left;">
            </p>
        </body>

</html>