<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Resume Medis</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 style="margin: 25px auto;">Form Resume Medis</h2>
        <div class="row">
            <div class="col">
                <form method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label for="diagnosa_masuk">Diagnosa Masuk</label>
                        <input type="text" class="form-control" name="diagnosa_masuk" id="txt_dMasuk" value="{{$resume->diagnosa_masuk}}">
                    </div>
                    <div class="form-group">
                        <label for="anamnesis">Anamnesis</label>
                        <textarea type="text" class="form-control" name="anamnesis" id="tarea_anamnesis">{{$resume->anamnesis}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="pemeriksaan_fisik">Pemeriksaan Fisk</label>
                        <textarea type="text" class="form-control" name="pemeriksaan_fisik" id="tarea_pFisik">{{$resume->pemeriksaan_fisik}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="pemeriksaan_pengunjung">Pemeriksaan Pengunjung</label>
                        <textarea type="text" class="form-control" name="pemeriksaan_pengunjung" id="tarea_pPengunjung">{{$resume->pemeriksaan_pengunjung}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="obat_selama_rawat">Obat Selama Rawat</label>
                        <textarea type="text" class="form-control" name="obat_selama_rawat" id="tarea_oSelamaRawat">{{$resume->obat_selama_rawat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="diagnosa_akhir">Diagnosa Akhir</label>
                        <input type="text" class="form-control" name="diagnosa_akhir" id="txt_dAkhir" value="{{$resume->diagnosa_akhir}}">
                    </div>
                    <div class="form-group">
                        <label for="tindakan_operasi">Tindakan Operasi</label>
                        <textarea type="text" class="form-control" name="tindakan_operasi" id="tarea_tOperasi">{{$resume->tindakan_operasi}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="obat_terapi_pulang">Obat / Terapi Pulang</label>
                        <textarea type="text" class="form-control" name="obat_terapi_pulang" id="tarea_oTerapiPulang">{{$resume->obat_terapi_pulang}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="kondisi_saat_pulang">Kondisi Saat Pulang</label>
                        <br>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="kondisi_saat_pulang" id="rdb_sembuh" value="sembuh"
                            @if (!empty($resume->kondisi_saat_pulang) && $resume->kondisi_saat_pulang == "sembuh")
                                checked
                            @endif
                            >
                            <label class="form-check-label" for="sembuh">Sembuh</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="kondisi_saat_pulang" id="rdb_perbaikan" value="perbaikan"
                            @if (!empty($resume->kondisi_saat_pulang) && $resume->kondisi_saat_pulang == "perbaikan")
                                checked
                            @endif
                            >
                            <label class="form-check-label" for="perbaikan">Perbaikan</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="kondisi_saat_pulang" id="rdb_paPermintaanSendiri" value="pulang atas permintaan sendiri"
                            @if (!empty($resume->kondisi_saat_pulang) && $resume->kondisi_saat_pulang == "pulang atas permintaan sendiri")
                                checked
                            @endif
                            >
                            <label class="form-check-label" for="pulang_atas_permintaan_sendiri">Pulang Atas Permintaan Sendiri</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="kondisi_saat_pulang" id="rdb_meninggal" value="meninggal"
                            @if (!empty($resume->kondisi_saat_pulang) && $resume->kondisi_saat_pulang == "meninggal")
                                checked
                            @endif
                            >
                            <label class="form-check-label" for="meninggal">Meninggal</label>
                        </div>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <div class="form-check" style="margin-top: 23px;">
                                        <input class="form-check-input" type="radio" name="kondisi_saat_pulang" id="rdb_dirujuk" value="dirujuk"
                                        @if (!empty($resume->kondisi_saat_pulang["ket_dirujuk"]))
                                            checked
                                        @endif
                                        >
                                        <label class="form-check-label" for="dirujuk">Dirujuk ke</label>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <input style="margin-top: 15px;" type="text" class="form-control" name="ket_dirujuk" id="txt_dirujuk" 
                                    @if (!empty($resume->kondisi_saat_pulang['ket_dirujuk']))
                                        value="{{$resume->kondisi_saat_pulang["ket_dirujuk"]}}"
                                    @endif
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group row">
                                <label style="margin-top: 15px;" class="col-md-1 col-form-label" for="kondisi_saat_pulang">Alasan</label>
                                <div class="col-md-11">
                                    <textarea class="form-control" name="alasan" id="tarea_alasan">@if (!empty($resume->kondisi_saat_pulang["alasan"])){{$resume->kondisi_saat_pulang["alasan"]}}@endif</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pengobatan_lanjutan">Pengobatan lanjutan</label>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <div class="form-group form-check" style="margin-top:5px;">
                                            <input type="checkbox" name="poliklinik" class="form-check-input" id="chck_poliklinik"
                                            @if ($resume->pengobatan_lanjutan['poliklinik'] == "on")
                                                checked
                                            @endif
                                            >
                                            <label class="form-check-label" for="poliklinik">Poliklinik</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="pengobatan_lanjutan" id="txt_pLanjutan" value="{{$resume->pengobatan_lanjutan['pengobatan_lanjutan']}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tgl_kontrol">Tanggal Kontrol</label>
                        <div class="row">
                            <div class="col-3">
                                <input type="date" class="form-control" name="tgl_kontrol" id="date_tglKontrol" value="{{$resume->tgl_kontrol}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="text-align: center">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Javascript --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>    
</body>
</html>