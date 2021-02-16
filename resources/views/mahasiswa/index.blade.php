@extends('layout/main')

@section('title', 'List Profile')

@section('container')

      <div class="container">
          <div class="row">
              <div class="col-10">
              <h1 class="mt-3">List Profile</h1>

              <a href="/mahasiswa/create" class="btn btn-secondary btn-lg btn-block my-2">Tambah Data</a>

              @if (session('status'))
                 <div class="alert alert-success">
                 {{ session('status') }}
                </div>
                    @endif
              <table class="table">
                <thead class="thead-dark">
                   <tr>
                   <th scope="col">No</th> 
                   <th scope="col">Nama</th> 
                   <th scope="col">Alamat</th>  
                   <th scope="col">Telepon</th> 
                   <th scope="col">ID GolDarah</th> 
                   <th scope="col">Email</th> 
                   <th scope="col">action</th> 
                   </tr>
                </thead>
                 <tbody>
                  @foreach( $mahasiswa as $mhs)
                 <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $mhs-> nama }}</td>
                    <td>{{ $mhs-> alamat }}</td>
                    <td>{{ $mhs-> telepon }}</td>
                    <td>{{ $mhs-> darahid }}</td>
                    <td>{{ $mhs-> email }}</td>
                    
                    <td>
                    <a href="/mahasiswa/{{ $mhs->id }}/edit" class="btn btn-outline-dark">Edit</a>

                    <form action="/mahasiswa/{{ $mhs->id }}" method="post" class="d-inline">
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
