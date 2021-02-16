@extends('layout/main')

@section('title', 'List Profile Hobby')

@section('container')

      <div class="container">
          <div class="row">
              <div class="col-10">
              <h1 class="mt-3">List Profile Hobby</h1>

              <a href="/kontakhobby/create" class="btn btn-secondary btn-lg btn-block my-2">Tambah Data</a>
              @if (session('status'))
                 <div class="alert alert-success">
                 {{ session('status') }}
                </div>
                    @endif

              <table class="table">
                <thead class="thead-dark">
                   <tr>
                   <th scope="col">No</th> 
                   <th scope="col">ID Profile</th> 
                   <th scope="col">ID Hobby</th>
                   <th scope="col">action</th> 
                   </tr>
                </thead>
                 <tbody>
                  @foreach( $kontakhobby as $khby)
                 <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $khby-> idkontak }}</td>
                    <td>{{ $khby-> idhobby }}</td>
                    <td>

                  <a href="/kontakhobby/{{ $khby->id }}/edit" class="btn btn-outline-dark">Edit</a>

                  <form action="/kontakhobby/{{ $khby->id }}" method="post" class="d-inline">
                    
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
