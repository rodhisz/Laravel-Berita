@extends('app')
@section('content')
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand">
                <h2>Edit Data</h2>
            </a>
            <form class="d-flex">
                <a href="{{ url('/') }}" class="btn btn-dark px-4 gap-3">Back</a>
            </form>
        </div>
    </nav>
    <div class="container py-5">
        <form action="{{ url("edit/$berita->id/update") }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" value="{{ $berita->judul }}" name="judul" class="form-control" id="judul">
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" value="{{ $berita->penulis }}" name="penulis" class="form-control" id="penulis">
            </div>
            <div class="mb-3">
                <label class="form-label">Konten</label>
                <textarea type="text" name="konten" class="form-control" id="editor">{!! $berita->konten !!}</textarea>
            </div>
            <img class="mb-3 img-thumbnail" style="width: 30%;" src="{{ url('storage/' . $berita->gambar) }}"
                alt="">
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input class="form-control" name="gambar" type="file" id="gambar">
            </div>
            <button class="btn btn-warning px-4 gap-3" type="submit">Submit</button>
        </form>
        <form action="{{ url("/delete/$berita->id") }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger px-4 gap-3" type="submit">Hapus</button>
        </form>
    </div>


    {{-- Modal --}}
    {{-- @include('berita.modal.add') --}}
@endsection
@section('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
