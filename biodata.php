<?php include "templates/dashboard/header.php"; ?>
<?php include "templates/dashboard/sidebar.php"; ?>
<?php include "templates/dashboard/content.php"; ?>

<div class="col">
  <div class="card">
    <div class="card-body">
      <!-- Nav Pills -->
      <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-data-diri-tab" data-bs-toggle="pill" data-bs-target="#pills-data-diri" type="button" role="tab" aria-controls="pills-data-diri" aria-selected="true">Data Diri</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-data-ibu-tab" data-bs-toggle="pill" data-bs-target="#pills-data-ibu" type="button" role="tab" aria-controls="pills-data-ibu" aria-selected="false">Data Ibu</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-data-ayah-tab" data-bs-toggle="pill" data-bs-target="#pills-data-ayah" type="button" role="tab" aria-controls="pills-data-ayah" aria-selected="false">Data Ayah</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-data-wali-tab" data-bs-toggle="pill" data-bs-target="#pills-data-wali" type="button" role="tab" aria-controls="pills-data-wali" aria-selected="false">Data Wali</button>
        </li>
      </ul>

      <!-- Nav Pills Contents -->
      <div class="tab-content" id="pills-tabContent">
        <!-- Data Diri -->
        <div class="tab-pane fade show active" id="pills-data-diri" role="tabpanel" aria-labelledby="pills-data-diri-tab" tabindex="0">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="FormControlNamaSiswa" class="form-label">Nama Siswa/i</label>
                <input type="text" class="form-control" id="FormControlNamaSiswa">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis-kelamin" id="laki-laki">
                  <label class="form-check-label" for="laki-laki">
                    Laki-laki
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis-kelamin" id="perempuan" checked>
                  <label class="form-check-label" for="perempuan">
                    Perempuan
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <label for="FormControlTempatLahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="FormControlTempatLahir">
              </div>
              <div class="mb-3">
                <label for="FormControlTanggalLahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="FormControlTanggalLahir">
              </div>
              <div class="mb-3">
                <label for="FormControlNIK" class="form-label">NIK</label>
                <input type="text" class="form-control" id="FormControlNIK">
              </div>
              <div class="mb-3">
                <label for="FormControlNISN" class="form-label">NISN</label>
                <input type="text" class="form-control" id="FormControlNISN">
              </div>
              <div class="mb-3">
                <label for="FormControlAsalSekolah" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control" id="FormControlAsalSekolah">
              </div>
              <div class="mb-3">
                <label for="FormControlTahunLulus" class="form-label">Tahun Lulus</label>
                <input type="text" class="form-control" id="FormControlTahunLulus">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="FormControlProvinsi" class="form-label">Provinsi</label>
                <input type="text" class="form-control" id="FormControlProvinsi">
              </div>
              <div class="mb-3">
                <label for="FormControlKabKota" class="form-label">Kab/Kota</label>
                <input type="text" class="form-control" id="FormControlKabKota">
              </div>
              <div class="mb-3">
                <label for="FormControlKecamatan" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" id="FormControlKecamatan">
              </div>
              <div class="mb-3">
                <label for="FormControlKelurahan" class="form-label">Kelurahan</label>
                <input type="text" class="form-control" id="FormControKelurahan1">
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="FormControlRT" class="form-label">RT</label>
                    <input type="text" class="form-control" id="FormControlRT">
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="FormControlRW" class="form-label">RW</label>
                    <input type="text" class="form-control" id="FormControlRW">
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="FormControlTextarea1" class="form-label">Alamat Lengkap</label>
                <textarea class="form-control" id="FormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Status Tempat Tinggal</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status-tempat-tinggal" id="kedua-orang-tua">
                  <label class="form-check-label" for="kedua-orang-tua">
                    Tinggal Bersama Kedua Orang Tua
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status-tempat-tinggal" id="bersama-wali">
                  <label class="form-check-label" for="bersama-wali">
                    Tinggal Bersama Wali
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status-tempat-tinggal" id="bersama-ibu">
                  <label class="form-check-label" for="bersama-ibu">
                    Tinggal Bersama Ibu
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status-tempat-tinggal" id="bersama-ayah">
                  <label class="form-check-label" for="bersama-ayah">
                    Tinggal Bersama Ayah
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status-tempat-tinggal" id="tinggal-sendiri">
                  <label class="form-check-label" for="tinggal-sendiri">
                    Tinggal Sendiri
                  </label>
                </div>
              </div>
              <button class="btn btn-primary float-right">Simpan Data</button>
            </div>
          </div>
        </div>
        <!-- Data Ibu -->
        <div class="tab-pane fade" id="pills-data-ibu" role="tabpanel" aria-labelledby="pills-data-ibu-tab" tabindex="0">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="FormControlNamaIbu" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" id="FormControlNamaIbu">
              </div>
              <div class="mb-3">
                <label for="FormControlTempatLahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="FormControlTempatLahir">
              </div>
              <div class="mb-3">
                <label for="FormControlTanggalLahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="FormControlTanggalLahir">
              </div>
              <div class="mb-3">
                <label for="FormControlNIK" class="form-label">NIK</label>
                <input type="text" class="form-control" id="FormControlNIK">
              </div>
              <div class="mb-3">
                <label for="FormControlPendidikan" class="form-label">Pendidikan</label>
                <input type="text" class="form-control" id="FormControlPendidikan">
              </div>
              <div class="mb-3">
                <label for="FormControlPekerjaan" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" id="FormControlPekerjaan">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="FormControlProvinsi" class="form-label">Provinsi</label>
                <input type="text" class="form-control" id="FormControlProvinsi">
              </div>
              <div class="mb-3">
                <label for="FormControlKabKota" class="form-label">Kab/Kota</label>
                <input type="text" class="form-control" id="FormControlKabKota">
              </div>
              <div class="mb-3">
                <label for="FormControlKecamatan" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" id="FormControlKecamatan">
              </div>
              <div class="mb-3">
                <label for="FormControlKelurahan" class="form-label">Kelurahan</label>
                <input type="text" class="form-control" id="FormControKelurahan1">
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="FormControlRT" class="form-label">RT</label>
                    <input type="text" class="form-control" id="FormControlRT">
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="FormControlRW" class="form-label">RW</label>
                    <input type="text" class="form-control" id="FormControlRW">
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="FormControlTextarea1" class="form-label">Alamat Lengkap</label>
                <textarea class="form-control" id="FormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Status Tempat Tinggal</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status-tempat-tinggal" id="bersama-wali">
                  <label class="form-check-label" for="bersama-wali">
                    Tinggal Bersama Wali
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status-tempat-tinggal" id="bersama-ayah">
                  <label class="form-check-label" for="bersama-ayah">
                    Tinggal Bersama Ayah
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status-tempat-tinggal" id="tinggal-sendiri">
                  <label class="form-check-label" for="tinggal-sendiri">
                    Tinggal Sendiri
                  </label>
                </div>
              </div>
              <button class="btn btn-primary float-right">Simpan Data</button>
            </div>
          </div>
        </div>
        <!-- Data Ayah -->
        <div class="tab-pane fade" id="pills-data-ayah" role="tabpanel" aria-labelledby="pills-data-ayah-tab" tabindex="0">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="FormControlNamaAyah" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control" id="FormControlNamaAyah">
              </div>
              <div class="mb-3">
                <label for="FormControlTempatLahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="FormControlTempatLahir">
              </div>
              <div class="mb-3">
                <label for="FormControlTanggalLahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="FormControlTanggalLahir">
              </div>
              <div class="mb-3">
                <label for="FormControlNIK" class="form-label">NIK</label>
                <input type="text" class="form-control" id="FormControlNIK">
              </div>
              <div class="mb-3">
                <label for="FormControlPendidikan" class="form-label">Pendidikan</label>
                <input type="text" class="form-control" id="FormControlPendidikan">
              </div>
              <div class="mb-3">
                <label for="FormControlPekerjaan" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" id="FormControlPekerjaan">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="FormControlProvinsi" class="form-label">Provinsi</label>
                <input type="text" class="form-control" id="FormControlProvinsi">
              </div>
              <div class="mb-3">
                <label for="FormControlKabKota" class="form-label">Kab/Kota</label>
                <input type="text" class="form-control" id="FormControlKabKota">
              </div>
              <div class="mb-3">
                <label for="FormControlKecamatan" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" id="FormControlKecamatan">
              </div>
              <div class="mb-3">
                <label for="FormControlKelurahan" class="form-label">Kelurahan</label>
                <input type="text" class="form-control" id="FormControKelurahan1">
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="FormControlRT" class="form-label">RT</label>
                    <input type="text" class="form-control" id="FormControlRT">
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="FormControlRW" class="form-label">RW</label>
                    <input type="text" class="form-control" id="FormControlRW">
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="FormControlTextarea1" class="form-label">Alamat Lengkap</label>
                <textarea class="form-control" id="FormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Status Tempat Tinggal</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status-tempat-tinggal" id="bersama-wali">
                  <label class="form-check-label" for="bersama-wali">
                    Tinggal Bersama Wali
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status-tempat-tinggal" id="bersama-ibu">
                  <label class="form-check-label" for="bersama-ibu">
                    Tinggal Bersama Ibu
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status-tempat-tinggal" id="tinggal-sendiri">
                  <label class="form-check-label" for="tinggal-sendiri">
                    Tinggal Sendiri
                  </label>
                </div>
              </div>
              <button class="btn btn-primary float-right">Simpan Data</button>
            </div>
          </div>
        </div>
        <!-- Data Wali -->
        <div class="tab-pane fade" id="pills-data-wali" role="tabpanel" aria-labelledby="pills-data-wali-tab" tabindex="0">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="FormControlNamaWali" class="form-label">Nama Wali</label>
                <input type="text" class="form-control" id="FormControlNamaWali">
              </div>
              <div class="mb-3">
                <label for="FormControlTempatLahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="FormControlTempatLahir">
              </div>
              <div class="mb-3">
                <label for="FormControlTanggalLahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="FormControlTanggalLahir">
              </div>
              <div class="mb-3">
                <label for="FormControlNIK" class="form-label">NIK</label>
                <input type="text" class="form-control" id="FormControlNIK">
              </div>
              <div class="mb-3">
                <label for="FormControlPendidikan" class="form-label">Pendidikan</label>
                <input type="text" class="form-control" id="FormControlPendidikan">
              </div>
              <div class="mb-3">
                <label for="FormControlPekerjaan" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" id="FormControlPekerjaan">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="FormControlProvinsi" class="form-label">Provinsi</label>
                <input type="text" class="form-control" id="FormControlProvinsi">
              </div>
              <div class="mb-3">
                <label for="FormControlKabKota" class="form-label">Kab/Kota</label>
                <input type="text" class="form-control" id="FormControlKabKota">
              </div>
              <div class="mb-3">
                <label for="FormControlKecamatan" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" id="FormControlKecamatan">
              </div>
              <div class="mb-3">
                <label for="FormControlKelurahan" class="form-label">Kelurahan</label>
                <input type="text" class="form-control" id="FormControKelurahan1">
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="FormControlRT" class="form-label">RT</label>
                    <input type="text" class="form-control" id="FormControlRT">
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="FormControlRW" class="form-label">RW</label>
                    <input type="text" class="form-control" id="FormControlRW">
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="FormControlTextarea1" class="form-label">Alamat Lengkap</label>
                <textarea class="form-control" id="FormControlTextarea1" rows="3"></textarea>
              </div>
              <button class="btn btn-primary float-right">Simpan Data</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "templates/dashboard/footer.php"; ?>