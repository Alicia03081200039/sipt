<?php
    use App\Models\mahasiswa;
    use App\Models\vjlhmhskrs;
?>
@extends('layouts.app')

@section('title','Mahasiswa')

@section('content')
    <h1>Index Mahasiswa</h1>
    <style>
        table tr{
            padding: 10px;
        }
    </style>
    <table style="padding: 10px;">
        <tr>
            <th>Student ID</th>
            <th>Nama</th>
            <th>Jumlah KRS</th>
        </tr>
        <?php
        // $mahasiswas = mahasiswa::get();

        // foreach ($mahasiswas as $mahasiswa) {
        //     echo "<tr>";
        //     echo "<td>".$mahasiswa->studentId."</td>";
        //     echo "<td>".$mahasiswa->nama."</td>";
        //     echo "<td>".$mahasiswa->jurusan."</td>";
        //     echo "<td>".$mahasiswa->tahunMasuk."</td>";
        //     echo "</tr>";
        // }

        
        $rows = DB::select("select StudentID, Nama, Jurusan, Tahun_masuk from mahasiswa");
 

        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>".$row->StudentID."</td>";
            echo "<td>".$row->Nama."</td>";
            echo "<td>".$row->Jurusan."</td>";
            echo "<td>".$row->Tahun_masuk."</td>";
            echo "</tr>";
        }
        ?>
    </table>
@endsection
