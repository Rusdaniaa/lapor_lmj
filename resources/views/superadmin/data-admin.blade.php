@extends('superadmin.app-su')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pengaduan Masyarakat</h3>
                <p class="text-subtitle text-muted"></p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Admin</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                Data Admin
            </div>
            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No.Hp</th>
                            <th>Alamat</th>
                            <th>Dinas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($adminUsers as $adminUser )
                        <tr>
                            <td>{{ $adminUser -> id}}</td>
                            <td>{{$adminUser -> name}}</td>
                            <td>{{$adminUser -> email}}</td>
                            <td>{{$adminUser -> no_hp}}</td>
                            <td>{{$adminUser -> alamat}}</td>
                            <td>{{ ($adminUser->dinas != null) ? $adminUser->dinas->nama_dinas:'' }}</td>
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
