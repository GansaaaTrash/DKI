@extends ('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>        
        </div>

        <div class="col-lg-8">
            <form method="post" action="{{route('layanan.store')}}" class="mb-5" enctype="multipart/form-data">
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
                    <label for="Description" class="form-label @error('Card1') is-invalid @enderror">Deskripsi</label>
                    <input type="text" class="form-control" id="Card1" name="Card1" required value="{{ old('Card1') }}">
                    @error ('Card1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label @error('Card2') is-invalid @enderror">Deskripsi</label>
                    <input type="text" class="form-control" id="Card2" name="Card2" required value="{{ old('Card2') }}">
                    @error ('Card2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label @error('Card3') is-invalid @enderror">Deskripsi</label>
                    <input type="text" class="form-control" id="Card3" name="Card3" required value="{{ old('Card3') }}">
                    @error ('Card3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label @error('Card4') is-invalid @enderror">Deskripsi</label>
                    <input type="text" class="form-control" id="Card4" name="Card4" required value="{{ old('Card4') }}">
                    @error ('Card4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label @error('Card5') is-invalid @enderror">Deskripsi</label>
                    <input type="text" class="form-control" id="Card5" name="Card5" required value="{{ old('Card5') }}">
                    @error ('Card5')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label @error('Card6') is-invalid @enderror">Deskripsi</label>
                    <input type="text" class="form-control" id="Card6" name="Card6" required value="{{ old('Card6') }}">
                    @error ('Card6')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label @error('Card7') is-invalid @enderror">Deskripsi</label>
                    <input type="text" class="form-control" id="Card7" name="Card7" required value="{{ old('Card7') }}">
                    @error ('Card7')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label @error('Card8') is-invalid @enderror">Deskripsi</label>
                    <input type="text" class="form-control" id="Card8" name="Card8" required value="{{ old('Card8') }}">
                    @error ('Card8')
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

