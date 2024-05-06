@extends ('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>        
        </div>

        <div class="col-lg-8">
            <form method="post" action="{{route('struktur.store')}}" class="mb-5" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('Nama1') is-invalid @enderror" id="Nama1" name="Nama1" required autofocus value="{{ old('Nama1') }}">
                    @error ('Nama1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('Nama2') is-invalid @enderror" id="Nama2" name="Nama2" required autofocus value="{{ old('Nama2') }}">
                    @error ('Nama2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('Nama3') is-invalid @enderror" id="Nama3" name="Nama3" required autofocus value="{{ old('Nama3') }}">
                    @error ('Nama3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('Nama4') is-invalid @enderror" id="Nama4" name="Nama4" required autofocus value="{{ old('Nama4') }}">
                    @error ('Nama4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('Nama5') is-invalid @enderror" id="Nama5" name="Nama5" required autofocus value="{{ old('Nama5') }}">
                    @error ('Nama5')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('Nama6') is-invalid @enderror" id="Nama6" name="Nama6" required autofocus value="{{ old('Nama6') }}">
                    @error ('Nama6')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



                <div class="mb-3">
                    <label for="Description" class="form-label @error('jabatan1') is-invalid @enderror">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan1" name="jabatan1" required value="{{ old('jabatan1') }}">
                    @error ('jabatan1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label @error('jabatan2') is-invalid @enderror">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan2" name="jabatan2" required value="{{ old('jabatan2') }}">
                    @error ('jabatan2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label @error('jabatan3') is-invalid @enderror">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan3" name="jabatan3" required value="{{ old('jabatan3') }}">
                    @error ('jabatan3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label @error('jabatan4') is-invalid @enderror">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan4" name="jabatan4" required value="{{ old('jabatan4') }}">
                    @error ('jabatan4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label @error('jabatan5') is-invalid @enderror">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan5" name="jabatan5" required value="{{ old('jabatan5') }}">
                    @error ('jabatan5')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label @error('jabatan6') is-invalid @enderror">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan6" name="jabatan6" required value="{{ old('jabatan6') }}">
                    @error ('jabatan6')
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

