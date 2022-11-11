<?php
    use App\Models\mahasiswa;
    use App\Models\vjlhmhskrs;
?>
@extends('layouts.app')

@section('title','Mahasiswa')

@section('content')

    <style>
        table tr{
            padding: 10px;
        }
    </style>
            <?php

            $mhss = \DB::select('SELECT StudentID,Nama,term FROM alicia_data')[0];
            echo "Nama : ".$mhss->Nama."<br>";
            echo "Student ID : ".$mhss->StudentID."<br>";
            // echo "Total Sks : ".$mhss->total_sks."<br>";
            echo "Total Sks : ".$mhss->term."<br>";


       ?>
    <table style="padding: 10px;">
        <tr>
            <th>No</th>
            <th>Kode Matakuliah</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
        </tr>
        <?php

        $rows = \DB::select('SELECT StudentID,nama,kode FROM alicia_matakuliah');
 
        $no=1;
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$row->StudentID."</td>";
            echo "<td>".$row->nama."</td>";
            echo "<td>".$row->kode."</td>";
            // echo "<td>".$row->sks."</td>";
            echo "</tr>";
            $no+=1;
        }
        ?>
    </table>
@endsection
