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
        <a href="{{route('visi.create')}}" class="btn btn-primary mb-3">Create new Post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Gambar1</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $post)
            <tr>
            <td>{{ $loop->iteration }}</td>
              <td>{{ $post->Judul }}</td>
              <td>{{ $post->Description }}</td>
              <td>{{ $post->img1 }}</td>
              <td>{{ $post->img2 }}</td>
              <td>{{ $post->img3 }}</td>
              <td>{{ $post->img4 }}</td>
              <td>{{ $post->img5 }}</td>
              <td>{{ $post->img6 }}</td>
              <td>{{ $post->img7 }}</td>
              <td>{{ $post->img8 }}</td>
              <td>{{ $post->img9 }}</td>
              <td>{{ $post->img10 }}</td>
              <td>{{ $post->img11 }}</td>
              <td>{{ $post->img12 }}</td>
              <td>
              <a href="/admin{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="{{ route('visi.edit', $post->id) }}" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="{{ route('visi.destroy', $post->id) }}" method="post" class="d-inline">
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