@extends('layout/main')

@section('title', 'List Hobby')

@section('container')

      <div class="container">
          <div class="row">
              <div class="col-10">
              <h1 class="mt-3">List Hobby</h1>

              <a href="/hobby/create" class="btn btn-secondary btn-lg btn-block my-2">Tambah Data</a>
              @if (session('status'))
                 <div class="alert alert-success">
                 {{ session('status') }}
                </div>
                    @endif
              <table class="table">
                <thead class="thead-dark">
                   <tr>
                   <th scope="col">No</th> 
                   <th scope="col">Hobby</th> 
                   <th scope="col">action</th> 
                   </tr>
                </thead>
                 <tbody>
                  @foreach( $hobby as $hby)
                 <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $hby-> hobby }}</td>
                    <td>
                    <a href="/hobby/{{ $hby->id }}/edit" class="btn btn-outline-dark">Edit</a>
                    <form action="/hobby/{{ $hby->id }}" method="post" class="d-inline">
                    
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-outline-dark">Delete</button>
                  </form>

                    <!-- <a href="" class="badge badge-success ">edit</a>
                    <a href="" class="badge badge-danger">delete</a> -->
                    </td>
                 </tr>
                 @endforeach
                </tbody>
              </table>


          </div>
      </div>
  </div>
@endsection
