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
                <form action="">
                    <div class="form-group">
                        <label for="diagnosa_awal">Diagnosa Masuk</label>
                        <input type="text" class="form-control" name="diagnosa_awal" id="txt_dAwal">
                    </div>
                    <div class="form-group">
                        <label for="anamnesis">Anamnesis</label>
                        <textarea type="text" class="form-control" name="anamnesis" id="tarea_anamnesis"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pemeriksaan_fisik">Pemeriksaan Fisk</label>
                        <textarea type="text" class="form-control" name="pemeriksaan_fisik" id="tarea_pFisik"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pemeriksaan_pengunjung">Pemeriksaan Pengunjung</label>
                        <textarea type="text" class="form-control" name="pemeriksaan_pengunjung" id="tarea_pPengunjung"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="obat_selama_rawat">Obat Selama Rawat</label>
                        <textarea type="text" class="form-control" name="obat_selama_rawat" id="tarea_oSelamaRawat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="diagnosa_akhir">Diagnosa Akhir</label>
                        <input type="text" class="form-control" name="diagnosa_akhir" id="txt_dAkhir">
                    </div>
                    <div class="form-group">
                        <label for="tindakan_operasi">Tindakan Operasi</label>
                        <textarea type="text" class="form-control" name="tindakan_operasi" id="tarea_tOperasi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="obat_terapi_pulang">Obat / Terapi Pulang</label>
                        <textarea type="text" class="form-control" name="obat_terapi_pulang" id="tarea_oTerapiPulang"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kondisi_saat_pulang">Kondisi Saat Pulang</label>
                        <br>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="kSaatPulang" id="rdb_sembuh" value="">
                            <label class="form-check-label" for="sembuh">Sembuh</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="kSaatPulang" id="rdb_perbaikan" value="">
                            <label class="form-check-label" for="perbaikan">Perbaikan</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="kSaatPulang" id="rdb_paPermintaanSendiri" value="">
                            <label class="form-check-label" for="pulang_atas_permintaan_sendiri">Pulang Atas Permintaan Sendiri</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="kSaatPulang" id="rdb_meninggal" value="">
                            <label class="form-check-label" for="meninggal">Meninggal</label>
                        </div>
                        <br>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="kSaatPulang" id="rdb_dirujuk" value="">
                            <label class="form-check-label" for="dirujuk">Dirujuk ke</label>
                        </div>
                        <input type="text" class="form-control-inline" name="kDirujuk" id="txt_dirujuk">
                        <label for="kondisi_saat_pulang">Alasan</label>
                        <input type="text" class="form-control-inline" name="alasan" id="txt_alasan">
                    </div>
                    <div class="form-group">
                        <label for="pengobatan_lanjutan">Pengobatan lanjutan</label>
                        <div class="row">
                            <div class="col-1">
                                <div class="form-group form-check" style="margin-top:5px;">
                                    <input type="checkbox" class="form-check-input" id="chck_poliklinik">
                                    <label class="form-check-label" for="poliklinik">Poliklinik</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="diagnosa_akhir" id="txt_dAkhir">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tgl_kontrol">Tanggal Kontrol</label>
                        <input type="date" class="form-control" name="tgl_kontrol" id="date_tglKontrol">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-success btn-block">Simpan</button>
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