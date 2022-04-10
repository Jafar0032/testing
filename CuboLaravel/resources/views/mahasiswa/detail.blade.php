@extends("layout.master") 

@section('title')

    Halaman Detail Mahasiswa
    
@endsection

@section('content')

    <h1>Detail Mahasiswa</h1>
    <p>ID Mahasiswa = {{ $id }}</p>
    <p>Nama Mahasiswa = {{ $namaMahasiswa[$id] }}</p>

@endsection