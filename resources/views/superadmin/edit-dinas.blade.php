@extends('superadmin.app-su')

@section('content')
<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Edit Dinas</h4>
                    </div>
                    <div class="card-body">

                        <div class="col-12 d-flex justify-content-end">
                            <a class="btn btn-primary" href="{{ url('dinas') }}">Back</a>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                            </div>
                        </div>
                        @if(session('success'))
                            <div class="alert alert-success mb-1 mt-1">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Form Update -->
                        <form id="updateForm" method="POST" action="{{ url('dinas/' . $dataDinas->id) }}" class="form form-vertical d-flex flex-column">
                            @csrf
                            @method('PATCH')

                            <div class="form-body">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Nama Dinas</label>
                                        <input type="text" id="first-name-vertical" class="form-control"
                                               name="nama_dinas"  value="{{$dataDinas->nama_dinas}}" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" id="alamat" class="form-control"
                                               name="alamat" value="{{$dataDinas->alamat}}"  placeholder="Alamat">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>

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
