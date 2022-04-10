<!-- @include("layout.header") -->

@extends("layout.master") 

@section('title')

    Halaman Detail Fakultas
    
@endsection

@section('content')

    <h1>Detail Fakultas</h1>
    <p>Fakultas ID = {{ $fakultas->id }}</p>

@endsection

<!-- @include("layout.footer") -->