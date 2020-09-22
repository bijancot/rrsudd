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
                                <td>{{$row->keterangan}}</td>
                            </tr>
                            @endforeach  
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>



@endsection