@extends('layout/main_backend')

@section('title', 'Data Pasien')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Pasien</h1>

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
                                        {{$resume->kondisi_saat_pulang['ket_dirujuk']." Alasan: "}}
                                        @if ($resume->kondisi_saat_pulang['alasan'] == null)
                                            -
                                        @endif
                                    @else
                                        {{$resume->kondisi_saat_pulang}}
                                    @endif
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning">Edit</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                        {{-- <tr>
                            <td>Tiger</td>
                            <td>Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>5421</td>
                            <td>t.nixon@datatables.net</td>
                            <td>t.nixon@datatables.net</td>
                            <td>t.nixon@datatables.net</td>
                            <td>
                                <button type="button" class="btn btn-warning">Edit</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Garrett</td>
                            <td>Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                            <td>8422</td>
                            <td>g.winters@datatables.net</td>
                            <td>g.winters@datatables.net</td>
                            <td>g.winters@datatables.net</td>
                            <td>
                                <button type="button" class="btn btn-warning">Edit</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

@endsection