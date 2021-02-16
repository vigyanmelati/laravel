@extends('layout/main')

@section('title', 'Edit Data')

@section('container')

      <div class="container">
          <div class="row">
              <div class="col-8">
              <h1 class="mt-3">Edit Data</h1>

<form method="post" action="/mahasiswa/{{$mhs->id}}">
    @csrf
    {{ method_field('PUT') }}
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{$mhs->nama}}">
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="{{$mhs->alamat}}">
    </div>

    <div class="form-group">
        <label for="telepon">Telepon</label>
        <input type="text" class="form-control" id="telepon" name="telepon" value="{{$mhs->telepon}}">
    </div>

    <div class="form-group">
        <label for="iddarah">ID Darah</label>
        <input type="text" class="form-control" id="iddarah" name="iddarah" value="{{$mhs->darahid}}">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{$mhs->email}}">
    </div>
    <button type="submit" class="btn btn-outline-dark">Edit Data</button>

</form>


          </div>
      </div>
  </div>
@endsection
