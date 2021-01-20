@extends('layouts.app')

@section('content')
<section>
    <div class="contenitore">
        <h1>Ops! Pagina non trovata</h1>
        <a class="error" href="{{ route('homepage') }}">
            Torna in Homepage
        </a>
    </div>
</section>
@endsection
