@extends('template_user')

@section('main_user')
  <!-- Container (Contact Section) -->
  <div id="contact" class="container">
    <h3 class="text-center">Form Biodata Edit</h3>

<form action="{{ url('/form_store') }}" class="default-form" autocomplete="off">
    @csrf
    <input type="hidden" name="id_biodata"  value="{{$data->id_biodata ?? ''}}">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
           <div class="col-sm-6 form-group">
            <label>Nama</label>
                <input class="form-control" id="nama" name="nama" placeholder="nama" type="text" value="{{$data->nama ?? ''}}" required>
          </div>
          <div class="col-sm-6 form-group">
            <label>posisi dilamar</label>
            <input class="form-control" id="posisi_dilamar" name="posisi_dilamar" placeholder="posisi dilamar" value="{{$data->posisi_dilamar ?? ''}}" type="text" required>
          </div>
            <div class="col-sm-6 form-group">
            <label>tempat lahir</label>
            <input class="form-control 2" id="tempat_lahir" name="tempat_lahir" placeholder="tempat lahir" value="{{$data->tempat_lahir ?? ''}}" type="text" required>
          </div>
            <div class="col-sm-6 form-group">
            <label>tanggal lahir</label>
            <input class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="tanggal lahir" value="{{$data->tanggal_lahir ?? ''}}" type="date" required>
          </div>
          <div class="col-md-12 form-group">
            <button class="btn pull-right" type="submit">Save Data</button>
          </div>
        </div>

</form>
      </div>
    </div>
  </div>
@endsection
