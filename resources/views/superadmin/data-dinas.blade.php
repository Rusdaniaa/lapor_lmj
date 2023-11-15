@extends('superadmin.app-su')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Dinas</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data dinas</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Data dinas</span>
                <a class="btn btn-primary ml-auto" href="{{url('/dinas/form')}}">Tambah Data</a>
            </div>

            <div class="card-body">

                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>Nama Dinas</th>
                            <th>Nama Dinas</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dataDinass as $dataDinas)
                        <tr>
                            <td>{{$dataDinas -> id}}</td>
                            <td>{{$dataDinas -> nama_dinas}}</td>
                            <td>{{$dataDinas -> alamat}}</td>

                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">
                                No record found!
                            </td>
                        </tr>

                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->
</div>
@endsection
