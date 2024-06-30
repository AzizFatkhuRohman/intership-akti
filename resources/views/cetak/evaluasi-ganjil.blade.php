<!DOCTYPE html>
<html>

<head>
    <title>Table Example</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #ccc;
        }
    </style>
    <div style="display: flex; align-items: center;">
        <!-- Gambar di pojok kiri -->
        <div style="flex: 1;">
            <img src="https://pmb.akti.ac.id/uploads/frontend/header_logo.png" alt="" height="50%">
        </div>
        <!-- Teks di tengah -->
        <div style="flex: 2; text-align: center;">
            <h2>PEDOMAN EVALUASI PEMAGANGAN <br> MAHASISWA/I AKTI (Akademi Komunitas Toyota Indonesia)</h2>
        </div>
        <!-- Tabel di sebelah kanan -->
        <div style="flex: 1;">
            <table style="border-collapse: collapse; width: 100%;" cellspacing="0" cellpadding="0">
                <!-- First row -->
                <tr>
                    <td style="border: 1pt solid black;">
                        <p class="s3" style="padding-top: 3pt; text-align: center;">Kaprodi</p>
                    </td>
                    <td style="border: 1pt solid black;">
                        <p class="s3" style="padding-top: 3pt; text-align: center;">Mentor</p>
                    </td>
                    <td style="border: 1pt solid black;">
                        <p class="s3" style="padding-top: 3pt; text-align: center;">Section Head</p>
                    </td>
                    <td style="border: 1pt solid black;">
                        <p class="s3" style="padding-top: 3pt; text-align: center;">Dept. Head</p>
                    </td>
                </tr>
                <!-- Second row -->
                <tr style="height: 40pt;">
                    <td style="border: 1pt solid black;">
                        <p style="text-indent: 0pt; text-align: center;">Isi Kepala Program Studi</p>
                    </td>
                    <td style="border: 1pt solid black;">
                        <p style="text-indent: 0pt; text-align: center;">Isi Mentor</p>
                    </td>
                    <td style="border: 1pt solid black;">
                        <p style="text-indent: 0pt; text-align: center;">Isi Section Head</p>
                    </td>
                    <td style="border: 1pt solid black;">
                        <p style="text-indent: 0pt; text-align: center;">Isi Dept Head</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div style="display: flex;justify-content:space-between">
        <div style="flex:1">
            <h4>A. KESEHATAN (MK:Pengenalan Dunia Industri)</h4>
            <table style="width: 100%; border: 3px solid black;">
                <thead>
                    <tr>
                        <th style="border: 2px solid black;">Kategori</th>
                        <th style="border: 2px solid black;">Keterangan</th>
                        <th style="border: 2px solid black;">Range Point</th>
                        <th style="border: 2px solid black;">Actual Point</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A.1. Kesehatan</td>
                        <td style="border-left: 2px solid black;">Sehat, Bekerja dengan normal</td>
                        <td style="border-left: 2px solid black; border-right: 2px solid black;">4</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="border-left: 2px solid black;">Sakit, bisa bekerja tapi ke Oasis</td>
                        <td style="border-left: 2px solid black; border-right: 2px solid black;">3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="border-left: 2px solid black;">Sakit, Hadir tidak bisa bekerja / Poliklinik</td>
                        <td style="border-left: 2px solid black; border-right: 2px solid black;">2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="border-left: 2px solid black;">Sakit, Tidak hadir dengan surat ket. Dari Dokter</td>
                        <td style="border-left: 2px solid black; border-right: 2px solid black;">1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="border-left: 2px solid black; border-bottom:2px solid black">Sakit, Tidak hadir tanpa
                            keterangan (Mangkir)</td>
                        <td
                            style="border-left: 2px solid black; border-right: 2px solid black; border-bottom:2px solid black;">
                            0</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <h4>B. PERILAKU SAFETY (MK : Pengenalan Dunia Industri)</h4>
            <table style="width: 100%; border: 3px solid black;">
                <thead>
                    <tr>
                        <th style="border: 2px solid black;">Kategori</th>
                        <th style="border: 2px solid black;">Keterangan</th>
                        <th style="border: 2px solid black;">Range Point</th>
                        <th style="border: 2px solid black;">Actual Point</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>B.1. SAFETY (ACCIDENT)</td>
                        <td style="border-left: 2px solid black;">Tidak pernah accident</td>
                        <td style="border-left: 2px solid black; border-right: 2px solid black;">4</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="border-left: 2px solid black; border-bottom:2px solid black">Pernah accident (Lalai)
                        </td>
                        <td
                            style="border-left: 2px solid black; border-right: 2px solid black; border-bottom:2px solid black">
                            0</td>
                        <td style="border-bottom:2px solid black"></td>
                    </tr>
                    <tr>
                        <td style="border-top:2px solid black">B.2. PENGGUNAAN ALAT PELINDUNG DIRI (APD)</td>
                        <td style="border-left: 2px solid black;">Menggunakan APD dengan baik dan benar </td>
                        <td style="border-left: 2px solid black; border-right: 2px solid black;">4</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 2px solid black;"></td>
                        <td style="border-left: 2px solid black; border-bottom: 2px solid black;">Tidak menggunakan APD
                        </td>
                        <td
                            style="border-left: 2px solid black; border-right: 2px solid black; border-bottom: 2px solid black;">
                            0</td>
                        <td style="border-bottom:2px solid black"></td>
                    </tr>
                    <tr>
                        <td>B.3. PENERAPAN STOP-POINT- CONFIRMATION (SPC)</td>
                        <td style="border-left: 2px solid black;">Melakukan SPC dengan baik dan benar</td>
                        <td style="border-left: 2px solid black; border-right: 2px solid black;">
                            4</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="border-left: 2px solid black; border-bottom:2px solid black">Tidak melakukan SPC
                            dengan baik dan benar</td>
                        <td
                            style="border-left: 2px solid black; border-right: 2px solid black; border-bottom:2px solid black;">
                            0</td>
                        <td style="border-bottom:2px solid black"></td>
                    </tr>
                    <tr>
                        <td style="border-top:2px solid black">B.4. PENERAPAN STOP-CALL-WAIT (SCW)</td>
                        <td style="border-left: 2px solid black;">Melakukan SCW ketika terjadi Abnormality dengan baik
                            dan benar </td>
                        <td style="border-left: 2px solid black; border-right: 2px solid black;">
                            4</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="border-left: 2px solid black; border-bottom:2px solid black">Tidak melakukan SCW
                            ketika terjadi Abnormality</td>
                        <td
                            style="border-left: 2px solid black; border-right: 2px solid black; border-bottom:2px solid black;">
                            0</td>
                        <td style="border-bottom:2px solid black"></td>
                    </tr>
                    <tr>
                        <td style="border-top:2px solid black">B.5.	KEMAMPUAN DUGA BAHAYA DI PROSES KERJA (KYT - SGA)</td>
                        <td style="border-left: 2px solid black;">Mampu menduga bahaya di area kerja sendiri ( Peka ) </td>
                        <td style="border-left: 2px solid black; border-right: 2px solid black;">
                            4</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="border-left: 2px solid black; border-bottom:2px solid black">Tidak mampu menduga bahaya di area kerja sendiri</td>
                        <td
                            style="border-left: 2px solid black; border-right: 2px solid black; border-bottom:2px solid black;">
                            0</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="margin-left: 5px">
            <h4>Range Performance</h4>
            <table style="margin-right: 2px">
                <thead>
                    <tr>
                        <th style="border:2px solid black">Sangat Baik</th>
                        <th style="border:2px solid black">Baik</th>
                        <th style="border:2px solid black">Cukup</th>
                        <th style="border:2px solid black">Kurang</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="border:2px solid black; background-color:yellow">95 - 100</td>
                        <td style="border:2px solid black; background-color:yellow">85 - 94</td>
                        <td style="border:2px solid black; background-color:yellow">75 - 84</td>
                        <td style="border:2px solid black; background-color:yellow">75</td>
                    </tr>
                </tbody>
            </table>
            <table style="margin-top:3px">
                <thead>
                    <tr>
                        <th
                            style="border-top:2px solid black; border-right:2px solid black; border-left: 2px solid black">
                            Tata cara penilaian:
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td
                            style="border-bottom:2px solid black; border-right:2px solid black; border-left: 2px solid black">
                            1. Pengisian Item Penilaian dengan memilih <strong>Rank Point</strong> <br>yang sudah
                            tersedia dengan
                            Kriteria di Kolom <strong>Actual Point</strong>
                            <br>
                            <br>
                            2. Setelah Melakukan Pengisian Item Penilaian,<br> Jumlahkan Semua <strong>Actual
                                Point</strong>
                            <br><br>
                            3. lalu Pilih Range Performance yang sesuai
                        </td>
                    </tr>
                </tbody>
            </table>

            <div style="margin-top:4px">
                <h4>Range Penilaian</h4>
                <table>
                    <thead>
                        <th style="border:2px solid black">0</th>
                        <th style="border:2px solid black">1</th>
                        <th style="border:2px solid black">2</th>
                        <th style="border:2px solid black">3</th>
                        <th style="border:2px solid black">4</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border:2px solid black">Sangat Rendah</td>
                            <td style="border:2px solid black">Rendah</td>
                            <td style="border:2px solid black">Cukup</td>
                            <td style="border:2px solid black">Baik</td>
                            <td style="border:2px solid black">sangat Baik</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>