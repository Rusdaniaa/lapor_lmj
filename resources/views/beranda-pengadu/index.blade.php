
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
          <form id="reservation-form" name="gs" method="submit" role="search" action="#">
            <div class="row">
              <div class="col-lg-12">
                <h4>Kirim <em>Pengaduan</em> Anda </h4>
              </div>
              <div class="col-lg-12">
                  <fieldset>
                      <label for="Name" class="form-label">Nama</label>
                      <input type="text" name="Name" class="Name" placeholder="Nama" autocomplete="on" required>
                  </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                    <label for="Number" class="form-label">No. KTP</label>
                    <input type="text" name="Number" class="Number" placeholder="No KTP" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="Number" class="form-label">RT</label>
                    <input type="text" name="Number" class="Number" placeholder="RT" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="Number" class="form-label">RW</label>
                    <input type="text" name="Number" class="Number" placeholder="RW" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                    <label for="Number" class="form-label">Alamat</label>
                    <input type="text" name="Number" class="Number" placeholder="Alamat" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="Number" class="form-label">Email</label>
                    <input type="text" name="Number" class="Number" placeholder="Email" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="Number" class="form-label">No. HP</label>
                    <input type="text" name="Number" class="Number" placeholder="No. HP" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                  <fieldset>
                      <label for="chooseDestination" class="form-label">Pengaduan Kepada</label>
                      <select name="Destination" class="form-select" aria-label="Default select example" id="chooseCategory" onChange="this.form.click()">
                          <option selected>---SKPD---</option>
                          <option value="Italy, Roma">Italy, Roma</option>
                          <option value="France, Paris">France, Paris</option>
                          <option value="Engaland, London">Engaland, London</option>
                          <option value="Switzerland, Lausanne">Switzerland, Lausanne</option>
                      </select>
                  </fieldset>
              </div>

              <div class="col-lg-12">
                <fieldset>
                    <label for="Complaint" class="form-label">Isi Pengaduan</label>
                    <textarea name="Complaint" class="form-textarea" placeholder="Tuliskan pengaduan Anda di sini..." rows="4" required></textarea>
                </fieldset>
            </div>

            <div class="col-lg-12">
                <fieldset>
                    <label for="media" id="file-label">
                        File foto atau video:
                   </label>
                   <div class="file-input-container" id="file-input-container">
                       <input type="file" id="media" name="media" accept="image/*, video/*" />
                       <label for="media" class="upload-icon">
                           <i class="fas fa-cloud-upload-alt"></i>
                           <p>Upload File</p>
                       </label>
                   </div>
                </fieldset>
            </div>
              <div class="col-lg-12">
                  <fieldset>
                      <button class="main-button">Ajukan Sekarang!</button>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
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
                  <span class="info">*Belum ada tanggapan</span>
                  <h4>Venezia Italy Ipsum</h4>
                  <div class="row">
                    <div class="col-6">
                      <i class="fa fa-clock"></i>
                      <span class="list">5 Days</span>
                    </div>
                    <div class="col-6">
                      <i class="fa fa-map"></i>
                      <span class="list">Daily Places</span>
                    </div>
                  </div>
                  <p>Lorem ipsum dolor sit amet dire consectetur adipiscing elit.</p>
                  <div class="main-button">
                    <a href="reservation.html">Make a Reservation</a>
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
                  <span class="info">**Undefined</span>
                  <h4>Glasgow City Lorem</h4>
                  <div class="row">
                    <div class="col-6">
                      <i class="fa fa-clock"></i>
                      <span class="list">5 Days</span>
                    </div>
                    <div class="col-6">
                      <i class="fa fa-map"></i>
                      <span class="list">Daily Places</span>
                    </div>
                  </div>
                  <p>Lorem ipsum dolor sit amet dire consectetur adipiscing elit.</p>
                  <div class="main-button">
                    <a href="reservation.html">Make a Reservation</a>
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
                  <span class="info">*Offer Until 24th March</span>
                  <h4>Glasgow City Lorem</h4>
                  <div class="row">
                    <div class="col-6">
                      <i class="fa fa-clock"></i>
                      <span class="list">5 Days</span>
                    </div>
                    <div class="col-6">
                      <i class="fa fa-map"></i>
                      <span class="list">Daily Places</span>
                    </div>
                  </div>
                  <p>This free CSS template is provided by Template Mo website.</p>
                  <div class="main-button">
                    <a href="reservation.html">Make a Reservation</a>
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
