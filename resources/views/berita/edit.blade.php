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

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul">
        </div>
        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" name="penulis" class="form-control" id="penulis">
        </div>
        <div class="mb-3">
            <label class="form-label">Konten</label>
            <textarea type="text" name="konten" class="form-control" id="editor"></textarea>
        </div>
        <img class="mb-3 img-thumbnail" style="width: 30%;" src="/img/3.png" alt="">
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input class="form-control" name="gambar" type="file" id="gambar">
        </div>
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
