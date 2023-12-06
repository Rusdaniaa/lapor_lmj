@extends('superadmin.app-validator')

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
                        <li class="breadcrumb-item active" aria-current="page">Pengaduan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                Data Pengaduan
            </div>
            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <div class="table-controls d-flex justify-content-between align-items-center">

                    <div class="left-controls">
                        Show
                        <label class="me-2">

                        </label>
                        entries
                    </div>
                    <div class="right-controls">
                        <label class="me-2">Search:</label>
                        <input type="search" id="searchInput" class="form-control form-control-sm" value="" oninput="">
                    </div>
                </div>

                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama Pengadu</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>Isi Pengaduan</th>
                            <th>Foto dan Video</th>
                            <th>Status Validasi</th>
                            <th>Status Pengaduan</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td colspan="8">
                                No record found!
                            </td>
                        </tr>


                    </tbody>
                </table>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="left-controls">
                        <div class="dataTables_info" id="table1_info" role="status" aria-live="polite">
                            Showing <span id="showingFrom"></span> to <span id="showingTo"> entries
                        </div>
                    </div>
                    <div class="right-controls text-end">
                        <div class="dataTables_paginate paging_simple_numbers" id="table1_paginate">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->
</div>
@endsection
