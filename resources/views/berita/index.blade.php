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
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="/img/kel2.jpeg" class="card-img-top object-fit-cover" width="100%" height="225"
                                alt="photo">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ '/show' }}" class="btn btn-sm btn-outline-secondary">View</a>
                                        <a href="{{ '/edit' }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    </div>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- 2 --}}
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="card-img-top object-fit-cover" src="/img/3.png" width="100%" height="225"
                                alt="photo-berita">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ '/show' }}" class="btn btn-sm btn-outline-secondary">View</a>
                                        <a href="{{ '/edit' }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    </div>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
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
