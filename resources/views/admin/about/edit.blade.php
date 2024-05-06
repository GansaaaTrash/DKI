@extends ('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Post</h1>        
        </div>

        <div class="col-lg-8">
        <form action="{{route('about.update', $item->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method("PUT")
                <div class="modal-header">						
                    <h4 class="modal-title">Edit Berita</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control @error('Judul') is-invalid @enderror" id="Judul" name="Judul" required autofocus value="{{ old('title') }}">
                    @error ('Judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label @error('Desc1') is-invalid @enderror">Deskripsi</label>
                    <input type="text" class="form-control" id="Desc1" name="Desc1" required value="{{ old('Desc1') }}">
                    @error ('Desc1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label @error('Desc2') is-invalid @enderror">Deskripsi</label>
                    <input type="text" class="form-control" id="Desc2" name="Desc2" required value="{{ old('Desc2') }}">
                    @error ('Desc2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                
                <div class="mb-3">
                    <label for="img1" class="form-label">Post Image</label>
                    <input class="form-control @error('img') is-invalid @enderror" type="file" id="img" name="img">
                    @error ('img')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>    


<!-- 
            <form action="{{ route('admin.update',  $item->id) }}" class="mb-5" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control @error('Judul') is-invalid @enderror" id="Judul" name="Judul" required autofocus value="{{ $item->Judul }}">
                    @error ('Judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label @error('Description') is-invalid @enderror">Deskripsi</label>
                    <input type="text" class="form-control" id="Description" name="Description" required value="{{ $item->Description }}">
                    @error ('Description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                
                <div class="mb-3">
                    <label for="img1" class="form-label">Post Image</label>
                    <input class="form-control @error('img1') is-invalid @enderror" type="file" id="img1" name="img1">
                    <img src="{{asset('img1/'.$item->img1)}}" alt="img1">
                    @error ('img1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="img2" class="form-label">Post Image</label>
                    <input class="form-control @error('img2') is-invalid @enderror" type="file" id="img2" name="img2">
                    <img src="{{asset('img2/'.$item->img2)}}" alt="img2">
                    @error ('img2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="img3" class="form-label">Post Image</label>
                    <input class="form-control @error('img3') is-invalid @enderror" type="file" id="img3" name="img3">
                    <img src="{{asset('img3/'.$item->img3)}}" alt="img3">
                    @error ('img3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="submit">
            
            </form> -->
        </div>

        <!-- <script>
            const title = document.querySelector('#title');
            const slug = document.querySelector('#slug');


            title.addEventListener('change', function()
            {
                fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
            });
        </script> -->
@endsection

