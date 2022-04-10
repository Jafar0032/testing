@extends("layout.master")

@section("title")

    Halaman Prodi

@endsection

@section("content")

<h3>Fakultas Ilmu Komputer dan Rekayasa</h3>

<ol>
    @foreach($prodiIK as $key => $value)
        <li>{{ $value }}</li>
    @endforeach
</ol>

<h3>Fakultas Ekonomi dan Bisnis</h3>

<ol>
    @foreach($prodiME as $key => $value)
        <li>{{ $value }}</li>
    @endforeach
</ol>

@endsection
