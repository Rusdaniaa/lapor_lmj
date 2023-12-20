@extends('superadmin.app-admin')

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

                <div class="d-flex justify-content-end">
                    <div class="ml-auto">
                        <a class="btn btn-primary" href="{{url('data-admin/create')}}">Tambah Data</a>
                    </div>
                </div>
                <div class="table-controls d-flex justify-content-between align-items-center">
                    <div class="left-controls">
                        Show
                        <label class="me-2">
                            <select id="showEntries" class="form-select form-select-sm" onchange="changeShowEntries()">
                                <option {{ $perPage == 10 ? 'selected' : '' }}>10</option>
                                <option {{ $perPage == 25 ? 'selected' : '' }}>25</option>
                                <option {{ $perPage == 50 ? 'selected' : '' }}>50</option>
                                <option {{ $perPage == -1 ? 'selected' : '' }}>All</option>
                            </select>
                        </label>
                        entries
                    </div>
                    <div class="right-controls">
                        <label class="me-2">Search:</label>
                        <input type="search" id="searchInput" class="form-control form-control-sm" value="{{ $keyword }}" oninput="searchData()">
                    </div>
                </div>
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
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="left-controls">
                        <div class="dataTables_info" id="table1_info" role="status" aria-live="polite">
                            Showing <span id="showingFrom">{{ $adminUsers->firstItem() }}</span> to <span id="showingTo">{{$adminUsers->lastItem() }}</span> of {{ $adminUsers->total() }} entries
                        </div>
                    </div>
                    <div class="right-controls text-end">
                        <div class="dataTables_paginate paging_simple_numbers" id="table1_paginate">
                            @if ($adminUsers->total() > 0)
                                {{ $adminUsers->links('superadmin.pagination-admin') }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->
</div>
@endsection
