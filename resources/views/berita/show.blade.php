@extends('app')
@section('content')
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <form class="d-flex">
                <a href="{{ url('/') }}" class="btn btn-dark px-4 gap-3">Back</a>
            </form>
        </div>
    </nav>
    <div class="p py-5 text-center">
        <img class="mb-3 object-fit-cover border rounded" style="width: 40%;" src="/img/3.png" alt="">
        <h1 class="display-5 fw-bold text-body-emphasis">Lorem</h1>
        <div class="d-flex justify-content-center">
            <div class="p-1">20 Mei 2023</div>
            <div class="p-1"> - </div>
            <div class="p-1">Dzikri</div>
        </div>
    </div>
    <div class="container">
        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore possimus asperiores quam omnis temporibus
            animi eligendi dicta! Aliquid soluta, nemo asperiores error doloremque tempore nulla. Doloremque quisquam animi
            accusantium quos.</div>
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
