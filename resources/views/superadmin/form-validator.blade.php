@extends('superadmin.app-su')

@section('content')
<!-- Basic Vertical form layout section start -->
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Validator</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <div class="alert-title"><h4>Whoops!</h4></div>
                                There are some problems with your input.
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <form method="POST" action="{{url('dinas')}}" class="form form-vertical">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Nama</label>
                                                <input type="text" id="first-name-vertical" class="form-control"
                                                    name="nama_dinas"  placeholder="Nama">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Email</label>
                                                <input type="text" id="first-name-vertical" class="form-control"
                                                    name="nama_dinas"  placeholder="Nama">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Nomor Hp</label>
                                                <input type="text" id="first-name-vertical" class="form-control"
                                                    name="nama_dinas"  placeholder="Nama">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" id="alamat" class="form-control"
                                                    name="alamat"  placeholder="Alamat">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Dinas</label>
                                                <input type="text" id="first-name-vertical" class="form-control"
                                                    name="nama_dinas"  placeholder="Nama">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">userame</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="nama_dinas"  placeholder="Nama">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Password</label>
                                                <input type="text" id="first-name-vertical" class="form-control"
                                                    name="nama_dinas"  placeholder="Nama">
                                            </div>
                                        </div>


                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- // Basic Vertical form layout section end -->
@endsection
