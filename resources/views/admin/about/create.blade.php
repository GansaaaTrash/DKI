@extends ('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>        
        </div>

        <div class="col-lg-8">
            <form method="post" action="{{route('about.store')}}" class="mb-5" enctype="multipart/form-data">
                @csrf
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

             

            
                <button type="submit" class="btn btn-primary">Create Post</button>
                
            </form>
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

