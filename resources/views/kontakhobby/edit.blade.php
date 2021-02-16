@extends('layout/main')

@section('title', 'Edit Data')

@section('container')

      <div class="container">
          <div class="row">
              <div class="col-8">
              <h1 class="mt-3">Edit Data</h1>

<form method="post" action="/kontakhobby/{{$khby->id}}">
    @csrf
    {{ method_field('PUT') }}
    <div class="form-group">
        <label for="idkontak">ID Profile</label>
        <input type="text" class="form-control" id="idkontak" name="idkontak" value="{{$khby->idkontak}}">
    </div>

    <div class="form-group">
        <label for="idhobby">ID Hobby</label>
        <input type="text" class="form-control" id="idhobby" name="idhobby" value="{{$khby->idhobby}}">
    </div>

    <button type="submit" class="btn btn-outline-dark">Edit Data</button>

</form>


          </div>
      </div>
  </div>
@endsection
