@extends("layout.master") 

@section('title')

    Halaman Mahasiswa
    
@endsection

@section('content')

    <h1>Nama Nama Mahasiswa</h1>
    <ol>
        @foreach($namaMahasiswa as $key => $value)
            <li>{{ $value }}</li>
        @endforeach
    </ol>

@endsection