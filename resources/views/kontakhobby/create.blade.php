@extends('layout/main')

@section('title', 'Tambah Data')

@section('container')

      <div class="container">
          <div class="row">
              <div class="col-8">
              <h1 class="mt-3">Tambah Data</h1>

<form method="post" action="/kontakhobby">
    @csrf
    <div class="form-group">
        <label for="idkontak">ID Profile</label>
        <input type="text" class="form-control" id="idkontak" placeholder="Masukkan ID Profile" name="idkontak" required>
    </div>
    <div class="form-group">
        <label for="idhobby">ID Hobby</label>
        <input type="text" class="form-control" id="idhobby" placeholder="Masukkan ID Hobby" name="idhobby" required>
    </div>
    <button type="submit" class="btn btn-outline-dark">Tambah Data</button>

</form>


          </div>
      </div>
  </div>
@endsection
