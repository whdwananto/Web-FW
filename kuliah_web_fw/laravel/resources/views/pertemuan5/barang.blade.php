@extends('pertemuan5/utama')

@section('judul_menu')

    <!-- ini ditampilkan dari section judul menu, dengan data : {{$isi_data}} <br> -->
    
    @php

    @endphp

    <!-- @if($isi_data == 65)
        data diisi dengan angka 1
    @elseif($isi_data < 65)
        data diisi dengan angka lebih dari 1
    @else
        tidak ada data atau data tidak valid
    @endif -->

    <!-- @for($x = 1; $x <=5; $x++)
        nilainya adalah {{ $x }}<br>
    @endfor -->
    @if($isi_data >= 80)
        grade a
    @elseif ($isi_data >=70)
        grade b
    @elseif($isi_data >=60)
        grade c
    @else
        grade d
    @endif
   

@endsection

@section('isi_menu')

    <!-- isi dari section isi menu -->

@endsection


