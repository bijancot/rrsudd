@extends('layout/main_backend')

@section('title', 'Data Pasien')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Pasien</h1>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{url('/risetjson')}}" style="margin: 25px auto;float: right;" class="btn btn-success">Tambah</a>
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
                            <th>No Pendaftaran</th>
                            <th>No Rekam Medis</th>
                            <th>Nama</th>
                            <th>Agama Pasien</th>
                            <th>Tanggal Lahir</th>
                            <th>Umur Pasien</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Desa</th>
                            <th>Kecamatan</th>
                            <th>Kota/Kabupaten</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{$data->no_pendaftaran}}</td>
                                <td>{{$data->no_rekam_medis}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->agam}}</td>
                                <td>{{$data->tgl_lahir}}</td>
                                <td>{{$data->umur}}</td>
                                <td>{{$data->jenkel}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>{{$data->desa}}</td>
                                <td>{{$data->kecamatan}}</td>
                                <td>{{$data->kota_kabupaten}}</td>
                                <td>
                                    <a href="{{action('ResumeMedisController@EditJsonForm', $data->id)}}"  class="btn btn-warning">Edit</a>
                                    <button onclick="hapus()" type="button" class="btn btn-danger">Hapus</button>
                                    <form id="form-delete" method="post" action="{{action('ResumeMedisController@DeleteJsonData')}}">
                                        @csrf
                                        <input type="hidden" value="{{$data->id}}" name="id">
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