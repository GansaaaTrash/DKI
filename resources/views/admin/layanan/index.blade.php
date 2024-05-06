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
        <a href="{{route('layanan.create')}}" class="btn btn-primary mb-3">Create new Post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
            <th scope="col">#</th>
              <th scope="col">Judul</th>
              <th scope="col">Card1</th>
              <th scope="col">Card2</th>
              <th scope="col">Card3</th>
              <th scope="col">Card4</th>
              <th scope="col">Card5</th>
              <th scope="col">Card6</th>
              <th scope="col">Card7</th>
              <th scope="col">Card8</th>
              <th scope="col">Gambar1</th>
              <th scope="col">Gambar2</th>
              <th scope="col">Gambar3</th>
              <th scope="col">Gambar4</th>
              <th scope="col">Gambar5</th>
              <th scope="col">Gambar6</th>
              <th scope="col">Gambar7</th>
              <th scope="col">Gambar8</th>
             
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->img }}</td>
 
              <td>
              <a href="/admin{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="{{ route('layanan.edit', $post->id) }}" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="{{ route('layanan.destroy', $post->id) }}" method="post" class="d-inline">
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