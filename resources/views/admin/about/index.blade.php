@extends('dashboard.layouts.main')

@section ('container')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">MY POST</h1>        
      </div>
    @if(session()->has('success'))
      <div class="alert alert-success col-lg-9" role="alert">
        {{ session('success') }}
      </div>
    @endif
      <div class="table-responsive col-lg-9">
        <a href="{{route('about.create')}}" class="btn btn-primary mb-3">Create new Post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Judul</th>
              <th scope="col">Deskripsi1</th>
              <th scope="col">Deskripsi2</th>
              <th scope="col">Gambar1</th>
      
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->Judul }}</td>
              <td>{{ $post->Desc1 }}</td>
              <td>{{ $post->Desc2 }}</td>
              <td>{{ $post->img }}</td>
          
              <td>
              <a href="/admin{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="{{ route('about.edit',  $post->id) }}" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="{{ route('about.destroy',  $post->id) }}" method="post" class="d-inline">
                @method ('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></button>
              </form>
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
@endsection