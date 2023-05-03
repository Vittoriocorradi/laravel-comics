{{-- Dettaglio di un fumetto --}}
@extends('layouts.app')

{{-- Titolo della pagina --}}
@section('page-title')
    DC Comics - Comic Details
@endsection

@section('page-main')

    {{-- Immagine del fumetto --}}
    <section class="comics-img-background row justify-content-center">
        <div class="col-8 comics-img-col">
            <div class="comics-img-box">
                <img src="{{ $comics_detail['thumb'] }}" alt="{{ $comics_detail['title'] }}">
            </div>
        </div>
    </section>
    {{-- /Immagine del fumetto --}}

    {{-- Sezione centrale --}}
    <div class="central-section row justify-content-center">
        <div class="col-8 row">
            {{-- Descrizione del fumetto --}}
            <section class="comic-description col-8">
                <h1>{{ $comics_detail['title'] }}</h1>
                {{-- Disponibilità --}}
                <div class="row availability">
                    <div class="col-9 d-flex justify-content-between">
                        <div>{{ $comics_detail['price'] }}</div>
                        <div class="text-uppercase">available</div>
                    </div>
                    <div class="col-3">
                        Check Availability
                    </div>
                </div>
                {{-- /Disponibilità --}}
                <p class="comics-description">
                    {{ $comics_detail['description'] }}
                </p>
            </section>
            {{-- Descrizione del fumetto --}}
            {{-- Pubblicità --}}
            <section class="advertisement col-4">
                <h3 class="text-end text-uppercase">advertisement</h3>
                <div class="ads-img">
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                </div>
            </section>
            {{-- /Pubblicità --}}
        </div>
    </div>
    {{-- /Sezione centrale --}}

    {{-- Info fumetto --}}
    <section class="comics-info row justify-content-center">
        <div class="col-8 row">
            {{-- Colonna info sinistra --}}
            <div class="col-6">
                <h2>Talent</h2>
                {{-- Disegnatori --}}
                <div class="row justify-content-between">
                    <div class="col-4">Art by:</div>
                    <div class="col-8">
                        @foreach ($comics_detail['artists'] as $artist)
                            <a href="#">{{ $artist }}</a>
                        @endforeach
                    </div>
                </div>
                {{-- /Disegnatori --}}
                {{-- Scrittori --}}
                <div class="row justify-content-between">
                    <div class="col-4">Written by:</div>
                    <div class="col-8">
                        @foreach ($comics_detail['writers'] as $writer)
                            <a href="#">{{ $writer }}</a>
                        @endforeach
                    </div>
                </div>
                {{-- /Scrittori --}}
            </div>
            {{-- /Colonna info sinistra --}}
            
            {{-- Colonna info destra --}}
            <div class="col-6">
                <h2>Specs</h2>
                {{-- Serie --}}
                <div class="row">
                    <div class="col-4">Series:</div>
                    <div class="col-8">
                        <a href="#">{{ $comics_detail['series'] }}</a>
                    </div>
                </div>
                {{-- /Serie --}}
                {{-- Prezzo --}}
                <div class="row">
                    <div class="col-4">U.S. Price:</div>
                    <div class="col-8">{{ $comics_detail['price'] }}</div>
                </div>
                {{-- /Prezzo --}}
                {{-- Data saldi --}}
                <div class="row">
                    <div class="col-4">On Sale Date:</div>
                    <div class="col-8">{{ $comics_detail['sale_date'] }}</div>
                </div>
                {{-- /Data saldi --}}
            </div>
            {{-- /Colonna info destra --}}
        </div>
    </section>
    {{-- /Info fumetto --}}

@endsection