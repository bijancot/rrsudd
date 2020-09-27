<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .row{
            margin-right: 0px;
            margin-left: 0px;
        }

    </style>
</head>
<body>
    <div class="row">
        <div class="col">
            <h1>Data Pasien</h1>
        </div>
    </div>
    <form method="post" action="{{action('ResumeMedisController@UpdateJsonForm', $datas->id)}}">
        @csrf
        <div class="row">
            <div class="col-6 column1">
            </div>
            <div class="col-6 column2"></div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="{{url("js/jsonform/underscore.js")}}"></script>
    <script src="{{url("js/jsonform/jsv.js")}}"></script>
    <script src="{{url("js/jsonform/jsonform.js")}}"></script>
    <script>
        //column1
        
        $.getJSON("{{url('data-form/resume-medis.json')}}", function(data){
            $('.column1').jsonForm(data.column1);
            $('.column2').jsonForm(data.column2);
            $("#no_pendaftaran").val("{{$datas->no_pendaftaran}}");
            $("#no_rekam_medis").val("{{$datas->no_rekam_medis}}");
            $("#nama").val("{{$datas->nama}}");
            $("#agama option[value='{{$datas->agama}}']").attr("selected", "selected");
            $("#tgl_lahir").val("{{$datas->tgl_lahir}}");
            $("#umur").val("{{$datas->umur}}");
            $("#jenkel option[value='{{$datas->jenkel}}']").attr("selected", "selected");
            $("#alamat").val("{{$datas->alamat}}");
            $("#desa option[value='{{$datas->desa}}']").attr("selected", "selected");
            $("#kecamatan option[value='{{$datas->kecamatan}}']").attr("selected", "selected");
            $("#kota_kabupaten option[value='{{$datas->kota_kabupaten}}']").attr("selected", "selected");
            $("#status").val("{{$datas->status}}");
            $("#tanggung_jawab").val("{{$datas->tanggung_jawab}}");
            $("#nama_pj").val("{{$datas->nama_pj}}");
            $("#alamat_pj").val("{{$datas->alamat_pj}}");
            $("#desa_pj option[value='{{$datas->desa_pj}}']").attr("selected", "selected");
            $("#kecamatan_pj option[value='{{$datas->kecamatan_pj}}']").attr("selected", "selected");
            $("#kota_kabupaten_pj option[value='{{$datas->kota_kabupaten_pj}}']").attr("selected", "selected");
            $("#cara_masuk_rs").val("{{$datas->cara_masuk_rs}}");
            $("#cara_penerimaan").val("{{$datas->cara_penerimaan}}");
            $("#kelas_pelayanan option[value='{{$datas->kelas_pelayanan}}']").attr("selected", "selected");
            $("#penjamin").val("{{$datas->penjamin}}");
            $("#tgl_masuk").val("{{$datas->tgl_masuk}}");
            $("#jam").val("{{$datas->jam}}");
        })
    </script>

</body>
</html>