{{-- Pagina iniziale --}}

@extends('layouts.app')

{{-- Titolo della pagina --}}
@section('page-title')
    DC Comics
@endsection

@section('page-main')

    {{-- Jumbotron --}}
    {{-- <section class="jumbotron">
        <div class="container">
          <h2>current series</h2>
        </div>
    </section> --}}
    {{-- /Jumbotron --}}

    {{-- Contenuto principale --}}
    <section class="comics-list d-flex flex-column align-items-center">
        {{-- Lista fumetti --}}
        <div class="big-container d-flex flex-wrap">
            @foreach ($comics as $comic)
                <div class="ms-card">
                    <a href="{{ route('comics-detail', ['index' => $loop->index]) }}">        {{-- Link alla pagina del dettaglio fumetto --}}  
                        <div class="img">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <div class="text-uppercase mt-2">{{ $comic['title'] }}</div>
                    </a>
                </div>
            @endforeach
        </div>
        {{-- /Lista fumetti --}}
        <div>
            <button>load more</button>
        </div>
    </section>
    {{-- /Contenuto principale --}}

@endsection