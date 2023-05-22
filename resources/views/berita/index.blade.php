@extends('app')
@section('content')
    <div class="p py-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis">Berita</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Project simple CRUD Berita</p>
        </div>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            {{-- Modal --}}
            {{-- <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                class="btn btn-warning btn-lg px-4 gap-3">Tambah Berita</button> --}}

            {{-- Page --}}
            <a href="{{ url('/create') }}" class="btn btn-warning px-4 gap-3">Tambah Berita</a>
        </div>
        <div class="album py-5">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                    {{-- 1 --}}
                    @foreach ( $berita as $b )
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ url('storage/' . $b->gambar) }}" class="card-img-top object-fit-cover" width="100%" height="225"
                                alt="photo">
                            <div class="card-body">
                                <h5 class="card-text mb-3">{!! $b->judul !!}</h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ "/show/$b->id" }}" class="btn btn-sm btn-outline-secondary">View</a>
                                        <a href="{{ "/edit/$b->id" }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    </div>
                                    <small class="text-body-secondary">{{ date('d M', strtotime($b->tanggal)) }}</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    @include('berita.modal.add')
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
