@extends ('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>        
        </div>

        <div class="col-lg-8">
            <form method="post" action="{{route('brand.store')}}" class="mb-5" enctype="multipart/form-data">
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
                    <label for="img" class="form-label">Post Image</label>
                    <input class="form-control @error('img') is-invalid @enderror" type="file" id="img" name="img">
                    @error ('img')
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

