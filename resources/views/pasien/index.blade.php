@extends('layout/main_backend')

@section('title', 'Data Pasien')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Pasien</h1>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{url('/resume-medis/insert')}}" style="margin: 25px auto;float: right;" class="btn btn-success">Tambah</a>
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Diagnosa Masuk</th>
                            <th>Anamnesis</th>
                            <th>Pemeriksaan Fisik</th>
                            <th>Pemeriksaan Pengunjung</th>
                            <th>Obat Selama Rawat</th>
                            <th>Diagnosa Akhir</th>
                            <th>Tindakan Operasi</th>
                            <th>Obat Terapi Pulang</th>
                            <th>Pengobtan Lanjutan</th>
                            <th>Tanggal Kontrol</th>
                            <th>Kondisi Saat Pulang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resumes as $resume)
                            <tr>
                                <td>{{$resume->diagnosa_masuk}}</td>
                                <td>{{$resume->anamnesis}}</td>
                                <td>{{$resume->pemeriksaan_fisik}}</td>
                                <td>{{$resume->pemeriksaan_pengunjung}}</td>
                                <td>{{$resume->obat_selama_rawat}}</td>
                                <td>{{$resume->diagnosa_akhir}}</td>
                                <td>{{$resume->tindakan_operasi}}</td>
                                <td>{{$resume->obat_terapi_pulang}}</td>
                                <td>
                                    @if ($resume->pengobatan_lanjutan['poliklinik'] == "on")
                                        Poliklinik&nbsp;
                                    @endif
                                    {{$resume->pengobatan_lanjutan['pengobatan_lanjutan']}}
                                </td>
                                <td>{{$resume->tgl_kontrol}}</td>
                                <td>
                                    @if (!empty($resume->kondisi_saat_pulang['ket_dirujuk']))
                                        {{"Dirujuk ke ".$resume->kondisi_saat_pulang['ket_dirujuk']." Alasan: "}}
                                        @if ($resume->kondisi_saat_pulang['alasan'] == null)
                                            -
                                        @else
                                        {{$resume->kondisi_saat_pulang['alasan']}}
                                        @endif
                                    @else
                                        {{$resume->kondisi_saat_pulang}}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{action('ResumeMedisController@FormEdit', $resume->id)}}"  class="btn btn-warning">Edit</a>
                                    <button onclick="hapus()" type="button" class="btn btn-danger">Hapus</button>
                                    <form id="form-delete" method="post" action="{{action('ResumeMedisController@Delete')}}">
                                        @csrf
                                        <input type="hidden" value="{{$resume->id}}" name="id">
                                    </form>
                                </td>
                            </tr>
                            @endforeach  
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
    function hapus(){
        swal({
            title: "Anda yakin hayoo ?",
            text: "Apakah anda yakin menhapus data satu ini!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $("#form-delete").submit();
                } else {
                    
                }
            })
    }
</script>

@endsection