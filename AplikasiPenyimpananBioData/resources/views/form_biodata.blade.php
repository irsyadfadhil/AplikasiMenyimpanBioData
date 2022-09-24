@extends('template_user')

@section('main_user')
  <!-- Container (Contact Section) -->
  <div id="contact" class="container">
    <h3 class="text-center">Form Biodata</h3>

<form action="{{ url('monitoring-risk-m/store') }}" class="default-form" autocomplete="off">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-sm-6 form-group">
            <label>posisi dilamar</label>
            <input class="form-control" id="posisi_dilamar" name="posisi_dilamar" placeholder="posisi dilamar" type="text" required>
          </div>
            <div class="col-sm-6 form-group">
            <label>no ktp</label>
            <input class="form-control" id="no_ktp" name="no_ktp" placeholder="no ktp" type="text" required>
          </div>
            <div class="col-sm-6 form-group">
            <label>tempat lahir</label>
            <input class="form-control 2" id="tempat_lahir" name="tempat_lahir" placeholder="tempat lahir" type="date" required>
          </div>
            <div class="col-sm-6 form-group">
            <label>tanggal lahir</label>
            <input class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="tanggal lahir" type="date" required>
          </div>
            <div class="col-sm-6 form-group">
            <label>jenis kelamin</label>
            <input class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="jenis kelamin" type="text" required>
          </div>
            <div class="col-sm-6 form-group">
            <label>agama</label>
            <input class="form-control" id="agama" name="agama" placeholder="agama" type="text" required>
          </div>
            <div class="col-sm-6 form-group">
            <label>golongan darah</label>
            <input class="form-control" id="golongan_darah" name="golongan_darah" placeholder="golongan darah" type="text" required>
          </div>
            <div class="col-sm-6 form-group">
            <label>status</label>
            <input class="form-control" id="status" name="status" placeholder="status" type="text" required>
          </div>
            <div class="col-sm-6 form-group">
            <label>alamat ktp</label>
            <textarea class="form-control" id="alamat_ktp" name="alamat_ktp" placeholder="alamat ktp" rows="3"></textarea>
          </div>
            <div class="col-sm-6 form-group">
            <label>alamat tinggal</label>
            <textarea class="form-control" id="alamat_tinggal" name="alamat_tinggal" placeholder="alamat tinggal" rows="3"></textarea>
          </div>
            <div class="col-sm-6 form-group">
            <label>email</label>
            <input class="form-control" id="email" name="email" placeholder="email" type="text" required>
          </div>
            <div class="col-sm-6 form-group">
            <label>no telp</label>
            <input class="form-control" id="no_telp" name="no_telp" placeholder="no telp" type="text" required>
          </div>
            <div class="col-sm-6 form-group">
            <label>orang terdekat_dihubungi</label>
            <input class="form-control" id="orang_terdekat_dihubungi" name="orang_terdekat_dihubungi" placeholder="orang terdekat dihubungi" type="text" required>
          </div>
            <div class="col-sm-6 form-group">
            <label>bersedia penempatan</label>
            <input class="form-control" id="bersedia_penempatan" name="bersedia_penempatan" placeholder="bersedia penempatan" type="text" required>
        </div>
            <div class="col-sm-6 form-group">
            <label>penghasilan yang diharapkan</label>
            <input class="form-control" id="penghasilan_yang_diharapkan" name="penghasilan_yang_diharapkan" placeholder="penghasilan yang diharapkan" type="text" required>
          </div>
            <div class="col-sm-6 form-group">
            <label>tanggal penandatanganan biodata</label>
            <input class="form-control" id="tanggal_penandatanganan_biodata" name="tanggal_penandatanganan_biodata" placeholder="tanggal penandatanganan biodata" type="text" required>
          </div>
            <div class="col-sm-6 form-group">
            <label>nama penandatanganan biodata</label>
            <input class="form-control" id="nama_penandatanganan_biodata" name="nama_penandatanganan_biodata" placeholder="nama penandatanganan biodata" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>skill</label>
            <textarea class="form-control" id="skill" name="skill" placeholder="skill" rows="3"></textarea>
          </div>

          <h3 class="text-center">Riwayat Pendidikan</h3>
          <div class="col-sm-6 form-group">
            <label>jenjang pendidikan terakhir</label>
            <input class="form-control" id="jenjang_pendidikan_terakhir" name="jenjang_pendidikan_terakhir" placeholder="jenjang pendidikan terakhir" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>nama institusi akademi</label>
            <input class="form-control" id="nama_institusi_akademi" name="nama_institusi_akademi" placeholder="nama institusi akademi" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>jurusan</label>
            <input class="form-control" id="jurusan" name="jurusan" placeholder="jurusan" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>tahun_lulus</label>
            <input class="form-control" id="tahun_lulus" name="tahun_lulus" placeholder="tahun lulus" type="date" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>ipk</label>
            <input class="form-control" id="ipk" name="ipk" placeholder="ipk" type="text" required>
          </div>
          <div class="col-sm-12 form-group">
          </div>
          <div class="col-sm-6 form-group">
            <label>jenjang pendidikan terakhir 2</label>
            <input class="form-control" id="jenjang_pendidikan_terakhir" name="jenjang_pendidikan_terakhir" placeholder="jenjang pendidikan terakhir2 " type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>nama institusi akademi 2</label>
            <input class="form-control" id="nama_institusi_akademi" name="nama_institusi_akademi" placeholder="nama institusi akademi 2" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>jurusan 2</label>
            <input class="form-control" id="jurusan" name="jurusan" placeholder="jurusan 2" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>tahun lulus 2</label>
            <input class="form-control" id="tahun_lulus" name="tahun_lulus" placeholder="tahun lulus 2" type="date" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>ipk 2</label>
            <input class="form-control" id="ipk" name="ipk" placeholder="ipk 2" type="text" required>
          </div>

          <div class="col-sm-12 form-group">
          <h3 class="text-center">Riwayat Pelatihan</h3>
        </div>

          <div class="col-sm-6 form-group">
            <label>jenjang pendidikan terakhir</label>
            <input class="form-control" id="jenjang_pendidikan_terakhir" name="jenjang_pendidikan_terakhir" placeholder="jenjang pendidikan terakhir" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>nama institusi akademi</label>
            <input class="form-control" id="nama_institusi_akademi" name="nama_institusi_akademi" placeholder="nama institusi akademi" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>jurusan</label>
            <input class="form-control" id="jurusan" name="jurusan" placeholder="jurusan" type="text" required>
          </div>
          <div class="col-sm-12 form-group">
          </div>
          <div class="col-sm-6 form-group">
            <label>jenjang pendidikan terakhir</label>
            <input class="form-control" id="jenjang_pendidikan_terakhir" name="jenjang_pendidikan_terakhir" placeholder="jenjang pendidikan terakhir" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>nama institusi akademi</label>
            <input class="form-control" id="nama_institusi_akademi" name="nama_institusi_akademi" placeholder="nama institusi akademi" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>jurusan</label>
            <input class="form-control" id="jurusan" name="jurusan" placeholder="jurusan" type="text" required>
          </div>
          <div class="col-sm-12 form-group">
            <h3 class="text-center">Riwayat Pekerjaan</h3>
          </div>
          <div class="col-sm-6 form-group">
            <label>jenjang pendidikan terakhir</label>
            <input class="form-control" id="jenjang_pendidikan_terakhir" name="jenjang_pendidikan_terakhir" placeholder="jenjang pendidikan terakhir" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>nama institusi akademi</label>
            <input class="form-control" id="nama_institusi_akademi" name="nama_institusi_akademi" placeholder="nama institusi akademi" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>jurusan</label>
            <input class="form-control" id="jurusan" name="jurusan" placeholder="jurusan" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>tahun_lulus</label>
            <input class="form-control" id="tahun_lulus" name="tahun_lulus" placeholder="tahun lulus" type="date" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>jenjang pendidikan terakhir</label>
            <input class="form-control" id="jenjang_pendidikan_terakhir" name="jenjang_pendidikan_terakhir" placeholder="jenjang pendidikan terakhir" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>nama institusi akademi</label>
            <input class="form-control" id="nama_institusi_akademi" name="nama_institusi_akademi" placeholder="nama institusi akademi" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>jurusan</label>
            <input class="form-control" id="jurusan" name="jurusan" placeholder="jurusan" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>tahun_lulus</label>
            <input class="form-control" id="tahun_lulus" name="tahun_lulus" placeholder="tahun lulus" type="date" required>
          </div>




        <div class="row">
          <div class="col-md-12 form-group">
            <button class="btn pull-right" type="submit">Save Data</button>
          </div>
        </div>

</form>
      </div>
    </div>
  </div>
@endsection
