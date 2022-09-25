@extends('template_user')

@section('main_user')

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
    <h4>Selamat Datang <b>{{Auth::user()->name}}</b>.</h4>
    <p><em>We are passionate Company with great team</em></p>
    <br>

    <div class="w3-row w3-grayscale">
        <table style="width:100%;">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Posisi Dilamar</th>
                <th>Action</th>
            </tr>
            @foreach($data as $key => $value)
            <tr>

                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->nama}}</td>
                    <td>{{ $value->tempat_lahir}}</td>
                    <td>{{ $value->tanggal_lahir}}</td>
                    <td>{{ $value->posisi_dilamar}}</td>
                    @if ($email == "admin@gmail.com")
                        <td>
                        <form class="needs-validation" action="{{ url('/form_biodata_edit') }}" method="GET" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="id_biodata" name="id_biodata" value="{{ $value->id_biodata}}">
                                <input type="submit" class="btn btn-primary" value="Edit"/>
                        </form>
                        <br>
                        <form class="needs-validation" action="{{ url('/delete_data') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="id_biodata" name="id_biodata" value="{{ $value->id_biodata}}">
                            <input type="submit" class="btn btn-primary" value="Delete"/>
                        </form>
                        </td>
                    @else
                        <td> </td>
                    @endif



            </tr>
            @endforeach
            {{-- @foreach($produk as $key => $value)
                <tr>
                    <td>{{ $value->nomor_urut}}</td>
                    <td>{{ $value->nama_barang}}</td>
                    <td>Rp.{{ $value->harga}}</td>
                    <td>{{ $value->stok}}</td>
                    <td style="text-align: center"><img src="/gambar_produk/{{ $value->gambar}}" height="150px" width="300px" /></td>
                    <td>{{ $value->kode}}</td>
                    <td>
                        <form class="needs-validation" action="{{ url('/') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="kode" name="kode" value="{{ $value->kode}}">
                            <input type="submit" class="btn btn-primary" value="Beli"/>
                        </form>
                    </td>
                </tr>
            @endforeach --}}

        </table>
    </div>
  </div>



  <!-- Image of location/map -->
  <img src="map.jpg" class="img-responsive" style="width:100%">

  @endsection
