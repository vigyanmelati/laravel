@extends('layout/main')

@section('title', 'Edit Data')

@section('container')

      <div class="container">
          <div class="row">
              <div class="col-8">
              <h1 class="mt-3">Edit Data</h1>

<form method="post" action="/golongandarah/{{$gdar->id}}">
    @csrf
    {{ method_field('PUT') }}
    <div class="form-group">
        <label for="golongandarah">Golongan Darah</label>
        <input type="text" class="form-control" id="golongandarah" name="golongandarah" value="{{$gdar->golongandarah}}">
    </div>

    <div class="form-group">
        <label for="rhesus">Rhesus</label>
        <input type="text" class="form-control" id="rhesus" name="rhesus" value="{{$gdar->rhesus}}">
    </div>

    <button type="submit" class="btn btn-outline-dark">Edit Data</button>

</form>


          </div>
      </div>
  </div>
@endsection
