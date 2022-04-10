<!-- @include("layout.header") -->

@extends("layout.master") 

@section('title')

    Halaman Fakultas
    
@endsection

@section('content')

    <h1>Fakultas</h1>
    <ol>
        @foreach($fakultas as $key => $value)
            <li>{{ $value->name }}
                <br>
                Email: {{ $value->email }}
                <br>
                Kode: {{ $value->kode }}
                <br>
                <a href="{{route('detailfakultas', [$value->id])}}"> Detail </a>
            </li>
        @endforeach
    </ol>

@endsection

<!-- @include("layout.footer") -->
