@extends ('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Post</h1>        
        </div>

        <div class="col-lg-8">
        <form action="{{route('profil.update', $items->id)}}" enctype="multipart/form-data" method="post">
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
                    <label for="Description" class="form-label @error('Desc') is-invalid @enderror">Deskripsi</label>
                    <input type="text" class="form-control" id="Desc" name="Desc" required value="{{ old('Desc') }}">
                    @error ('Desc')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="img1" class="form-label">Post Image</label>
                    <input class="form-control @error('img1') is-invalid @enderror" type="file" id="img1" name="img1">
                    @error ('img1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="img2" class="form-label">Post Image</label>
                    <input class="form-control @error('img2') is-invalid @enderror" type="file" id="img2" name="img2">
                    @error ('img2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="img3" class="form-label">Post Image</label>
                    <input class="form-control @error('img3') is-invalid @enderror" type="file" id="img3" name="img3">
                    @error ('img3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="img4" class="form-label">Post Image</label>
                    <input class="form-control @error('img4') is-invalid @enderror" type="file" id="img4" name="img4">
                    @error ('img4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="img5" class="form-label">Post Image</label>
                    <input class="form-control @error('img5') is-invalid @enderror" type="file" id="img5" name="img5">
                    @error ('img5')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="img6" class="form-label">Post Image</label>
                    <input class="form-control @error('img6') is-invalid @enderror" type="file" id="img6" name="img6">
                    @error ('img6')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="img7" class="form-label">Post Image</label>
                    <input class="form-control @error('img7') is-invalid @enderror" type="file" id="img7" name="img7">
                    @error ('img7')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="img8" class="form-label">Post Image</label>
                    <input class="form-control @error('img8') is-invalid @enderror" type="file" id="img8" name="img8">
                    @error ('img8')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="img9" class="form-label">Post Image</label>
                    <input class="form-control @error('img9') is-invalid @enderror" type="file" id="img9" name="img9">
                    @error ('img9')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="img10" class="form-label">Post Image</label>
                    <input class="form-control @error('img10') is-invalid @enderror" type="file" id="img10" name="img10">
                    @error ('img10')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="img11" class="form-label">Post Image</label>
                    <input class="form-control @error('img11') is-invalid @enderror" type="file" id="img11" name="img11">
                    @error ('img11')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="img12" class="form-label">Post Image</label>
                    <input class="form-control @error('img12') is-invalid @enderror" type="file" id="img12" name="img12">
                    @error ('img12')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
	
                    
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>    


<!-- 
            <form action="{{ route('admin.update',  $items->id) }}" class="mb-5" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control @error('Judul') is-invalid @enderror" id="Judul" name="Judul" required autofocus value="{{ $items->Judul }}">
                    @error ('Judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label @error('Description') is-invalid @enderror">Deskripsi</label>
                    <input type="text" class="form-control" id="Description" name="Description" required value="{{ $items->Description }}">
                    @error ('Description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                
                <div class="mb-3">
                    <label for="img1" class="form-label">Post Image</label>
                    <input class="form-control @error('img1') is-invalid @enderror" type="file" id="img1" name="img1">
                    <img src="{{asset('img1/'.$items->img1)}}" alt="img1">
                    @error ('img1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="img2" class="form-label">Post Image</label>
                    <input class="form-control @error('img2') is-invalid @enderror" type="file" id="img2" name="img2">
                    <img src="{{asset('img2/'.$items->img2)}}" alt="img2">
                    @error ('img2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="img3" class="form-label">Post Image</label>
                    <input class="form-control @error('img3') is-invalid @enderror" type="file" id="img3" name="img3">
                    <img src="{{asset('img3/'.$items->img3)}}" alt="img3">
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

