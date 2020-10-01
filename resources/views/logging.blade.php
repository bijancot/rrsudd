@extends('layout/main_backend')

@section('title', 'Data Logging')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Logging</h1>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id User</th>
                            <th>Metode</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($loggings as $row)
                            <tr>
                                <td>{{$row->id_user}}</td>
                                <td>{{$row->metode}}</td>
                                <td>
                                    {{-- {{$row->keterangan}} --}}
                                    @if ($row->metode == 'updated')
                                    
                                        Data sebelum : 
                                        @if($row->keterangan['old'])
                                            <br>Diagnosa masuk          : {{ $row->keterangan['old']['diagnosa_masuk'] }} 
                                            <br>anamnesis               : {{ $row->keterangan['old']['anamnesis'] }}
                                            <br>pemeriksaan_fisik       : {{ $row->keterangan['old']['pemeriksaan_fisik'] }}
                                            <br>pemeriksaan_pengunjung  : {{ $row->keterangan['old']['pemeriksaan_pengunjung'] }}
                                            <br>obat_selama_rawat       : {{ $row->keterangan['old']['obat_selama_rawat'] }}
                                            <br>diagnosa_akhir          : {{ $row->keterangan['old']['diagnosa_akhir'] }}
                                            <br>tindakan_operasi        : {{ $row->keterangan['old']['tindakan_operasi'] }}
                                            <br>obat_terapi_pulang      : {{ $row->keterangan['old']['obat_terapi_pulang'] }}
                                            <br>tgl_kontrol             : {{ $row->keterangan['old']['tgl_kontrol'] }}
                                            <br>status                  : {{ $row->keterangan['old']['status'] }}
                                            {{-- Diagnosa masuk : {{ $row->keterangan['old']['kondisi_saat_pulang'] }} --}}
                                        @endif
                                        <br><br>
                                        Data Setelah : 
                                        @if($row->keterangan['current'])
                                            <br>Diagnosa masuk          : {{ $row->keterangan['current']['diagnosa_masuk'] }}
                                            <br>anamnesis               : {{ $row->keterangan['current']['anamnesis'] }}
                                            <br>pemeriksaan_fisik       : {{ $row->keterangan['current']['pemeriksaan_fisik'] }}
                                            <br>pemeriksaan_pengunjung  : {{ $row->keterangan['current']['pemeriksaan_pengunjung'] }}
                                            <br>obat_selama_rawat       : {{ $row->keterangan['current']['obat_selama_rawat'] }}
                                            <br>diagnosa_akhir          : {{ $row->keterangan['current']['diagnosa_akhir'] }}
                                            <br>tindakan_operasi        : {{ $row->keterangan['current']['tindakan_operasi'] }}
                                            <br>obat_terapi_pulang      : {{ $row->keterangan['current']['obat_terapi_pulang'] }}
                                            <br>tgl_kontrol             : {{ $row->keterangan['current']['tgl_kontrol'] }}
                                            <br>status                  : {{ $row->keterangan['current']['status'] }}
                                        @endif

                                    @else
                                        {{$row->keterangan}}
                                    @endif
                                </td>
                            </tr>
                            @endforeach  
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>



@endsection