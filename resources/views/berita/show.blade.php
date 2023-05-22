@extends('app')
@section('content')
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <form class="d-flex">
                <a href="{{ url('/') }}" class="btn btn-dark px-4 gap-3">Back</a>
            </form>
        </div>
    </nav>
    <div class="p pt-5 text-center">
        <img class="mb-3 object-fit-cover border rounded" style="width: 70%;" src="{{ url('storage/' . $berita->gambar) }}" alt="">
        <h1 class="display-5 fw-bold text-body-emphasis" style="padding-inline:10rem">{{ $berita->judul }}</h1>
        <div class="pb-3 d-flex justify-content-center">
            <div class="p-1">{{ date('d M Y', strtotime($berita->tanggal)) }}</div>
            <div class="p-1"> - </div>
            <div class="p-1">{{ $berita->penulis }}</div>
        </div>
    </div>
    <div class="container mb-5" style="padding-inline:10rem">
        <p >
            {!! $berita->konten !!}
        </p>
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
