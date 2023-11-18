@extends('superadmin.app-pengadu')

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
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="left-controls">
                        <div class="dataTables_info" id="table1_info" role="status" aria-live="polite">
                            Showing <span id="showingFrom">{{ $dataPengadus->firstItem() }}</span> to <span id="showingTo">{{$dataPengadus->lastItem() }}</span> of {{ $dataPengadus->total() }} entries
                        </div>
                    </div>
                    <div class="right-controls text-end">
                        <div class="dataTables_paginate paging_simple_numbers" id="table1_paginate">
                            @if ($dataPengadus->total() > 0)
                                {{ $dataPengadus->links('superadmin.pagination-admin') }}
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
