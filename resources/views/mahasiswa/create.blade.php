@extends('layout/main')

@section('title', 'Tambah Data')

@section('container')

      <div class="container">
          <div class="row">
              <div class="col-8">
              <h1 class="mt-3">Tambah Data</h1>

<form method="post" action="/mahasiswa">
    @csrf
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" required>
    </div>

    <div class="form-group">
        <label for="telepon">Telepon</label>
        <input type="text" class="form-control" id="telepon" placeholder="Masukkan Telepon" name="telepon" required>
    </div>

    <div class="form-group">
        <label for="iddarah">ID Darah</label>
        <input type="text" class="form-control" id="iddarah" placeholder="Masukkan ID Darah" name="iddarah" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" required>
    </div>
    <button type="submit" class="btn btn-outline-dark">Tambah Data</button>

</form>


          </div>
      </div>
  </div>
@endsection
