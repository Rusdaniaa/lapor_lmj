
@extends('beranda-pengadu.app-beranda')

@section('content')
<div class="second-page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Selamat datang di</h4>
          <h2>Lapor Lumajang</h2>
          <p>Sampaikan pengaduan, aspirasi, atau saran Anda melalui platform ini, karena setiap suara Anda memiliki peran penting dalam perbaikan dan kemajuan Kabupaten Lumajang. Bersama kita bisa menciptakan Lumajang yang lebih baik dan berdaya.</p>
          <div class="main-button"><a href="{{url('tentang')}}">Petunjuk</a></div>
        </div>
      </div>
    </div>
  </div>

  <div class="reservation-form">
    <div class="container">
      <div class="row">

        <div class="col-lg-12">
             <!-- Menampilkan pesan kesalahan jika ada -->
             @if(session('error'))
             <div class="alert alert-danger">
                 {{ session('error') }}
             </div>
         @endif
            <form id="reservation-form" name="gs" method="post" role="search" action="{{ url('pengaduan') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-lg-12">
                <h4>Kirim <em>Pengaduan</em> Anda </h4>
              </div>
              <div class="col-lg-12">
                  <fieldset>
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" name="nama" class="Name" placeholder="Nama" autocomplete="on" required>
                  </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                    <label for="no_ktp" class="form-label">No. KTP</label>
                    <input type="text" name="no_ktp" class="Number" placeholder="No KTP" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <input type="text" name="kecamatan" class="Number" placeholder="RT" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="kelurahan" class="form-label">Kelurahan</label>
                    <input type="text" name="kelurahan" class="Number" placeholder="RW" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="rt" class="form-label">RT</label>
                    <input type="text" name="rt" class="Number" placeholder="RT" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="rw" class="form-label">RW</label>
                    <input type="text" name="rw" class="Number" placeholder="RW" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="Name" placeholder="Alamat" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="Name" placeholder="Email" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="no_hp" class="form-label">No. HP</label>
                    <input type="text" name="no_hp" class="Number" placeholder="No. HP" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                  <fieldset>
                      <label for="dinas_id" class="form-label">Pengaduan Kepada</label>
                      <select name="dinas_id" class="form-select" aria-label="Default select example" id="chooseCategory" onChange="this.form.click()">
                          <option selected>---SKPD---</option>
                      @foreach($dinasOptions as $dinas)
                          <option value="{{ $dinas->id }}">{{ $dinas->nama_dinas }}</option>
                      @endforeach
                      </select>
                  </fieldset>
              </div>

              <div class="col-lg-12">
                <fieldset>
                    <label for="isi_pengaduan" class="form-label">Isi Pengaduan</label>
                    <textarea name="isi_pengaduan" class="form-textarea" placeholder="Tuliskan pengaduan Anda di sini..." rows="4" required></textarea>
                </fieldset>
            </div>

            <div class="col-lg-12">
                <fieldset>
                    <label for="file" id="file-label">
                        Unggah File foto atau video (jika ada):
                   </label>
                   <div class="file-input-container" id="file-input-container">
                       <input type="file" id="media" name="file" accept="image/*, video/*" />
                       <label for="media" class="upload-icon">
                           <i class="fas fa-cloud-upload-alt"></i>
                           <p>Upload File</p>
                       </label>
                   </div>
                </fieldset>
            </div>
              <div class="col-lg-12">
                  <fieldset>
                      <button class="main-button" type="submit">Ajukan Sekarang!</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="amazing-deals">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Lapor Lumajang Terkini </h2>

          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-6">
                <div class="image">
                  <img src="assets/images/deals-01.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="content">
                  <span class="info">*Sudah ditanggapi</span>
                  <h4>Indah</h4>
                  <div class="row">
                    <div class="col-6">
                      <i class="fa fa-clock"></i>
                      <span class="list">22 November 2023</span>
                    </div>
                    <div class="col-6">
                      <i class="fa fa-map"></i>
                      <span class="list">Dinas Perhubungan</span>
                    </div>
                  </div>
                  <p>Lorem ipsum dolor sit amet dire consectetur adipiscing elit.</p>
                  <div class="main-button">
                    <a href="lapor-index-formpengaduan.html">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-6">
                <div class="image">
                  <img src="assets/images/deals-02.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="content">
                  <span class="info">*Sudah ditanggapi</span>
                  <h4>Indah</h4>
                  <div class="row">
                    <div class="col-6">
                      <i class="fa fa-clock"></i>
                      <span class="list">22 November 2023</span>
                    </div>
                    <div class="col-6">
                      <i class="fa fa-map"></i>
                      <span class="list">Dinas Perhubungan</span>
                    </div>
                  </div>
                  <p>Lorem ipsum dolor sit amet dire consectetur adipiscing elit.</p>
                  <div class="main-button">
                    <a href="lapor-index-formpengaduan.html">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-6">
                <div class="image">
                  <img src="assets/images/deals-03.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="content">
                  <span class="info">*Sudah ditanggapi</span>
                  <h4>Indah</h4>
                  <div class="row">
                    <div class="col-6">
                      <i class="fa fa-clock"></i>
                      <span class="list">22 November 2023</span>
                    </div>
                    <div class="col-6">
                      <i class="fa fa-map"></i>
                      <span class="list">Dinas Perhubungan</span>
                    </div>
                  </div>
                  <p>Lorem ipsum dolor sit amet dire consectetur adipiscing elit.</p>
                  <div class="main-button">
                    <a href="lapor-index-formpengaduan.html">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-6">
                <div class="image">
                  <img src="assets/images/deals-04.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="content">
                  <span class="info">*Sudah ditanggapi</span>
                  <h4>Indah</h4>
                  <div class="row">
                    <div class="col-6">
                      <i class="fa fa-clock"></i>
                      <span class="list">22 November 2023</span>
                    </div>
                    <div class="col-6">
                      <i class="fa fa-map"></i>
                      <span class="list">Dinas Perhubungan</span>
                    </div>
                  </div>
                  <p>Lorem ipsum dolor sit amet dire consectetur adipiscing elit.</p>
                  <div class="main-button">
                    <a href="lapor-index-formpengaduan.html">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <ul class="page-numbers">
            <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
