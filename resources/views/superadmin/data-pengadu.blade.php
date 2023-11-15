@extends('superadmin.app-su')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pengaduan Masyarakat</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Pengadu</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                Data Pengadu
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No </th>
                            <th>Nama</th>
                            <th>No. KTP</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
                            <th>Rw</th>
                            <th>RT</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No.hp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dataPengadus as $dataPengadu)
                        <tr>
                            <td>{{$dataPengadu -> id}}</td>
                            <td>{{$dataPengadu -> nama}}</td>
                            <td>{{$dataPengadu -> no_ktp}}</td>
                            <td>{{$dataPengadu -> kecamatan}}</td>
                            <td>{{$dataPengadu -> kelurahan}}</td>
                            <td>{{$dataPengadu -> rt}}</td>
                            <td>{{$dataPengadu -> rw}}</td>
                            <td>{{$dataPengadu -> alamat}}</td>
                            <td>{{$dataPengadu -> email}}</td>
                            <td>{{$dataPengadu -> no_hp}}</td>
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
