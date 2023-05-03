{{-- Dettaglio di un fumetto --}}
@extends('layouts.app')

{{-- Titolo della pagina --}}
@section('page-title')
    DC Comics - Comic Details
@endsection

@section('page-main')

    {{-- Immagine del fumetto --}}
    <section class="comics-img-background row justify-content-center">
        <div class="col-9 comics-img-col">
            <div class="comics-img-box">
                <img src="{{ $comics_detail['thumb'] }}" alt="{{ $comics_detail['title'] }}">
            </div>
        </div>
    </section>
    {{-- /Immagine del fumetto --}}

    {{-- Sezione centrale --}}
    <div class="central-section row justify-content-center">
        <div class="col-9 row gx-5">
            {{-- Descrizione del fumetto --}}
            <section class="comic-description col-8">
                <h1 class="fs-3 mb-4 text-uppercase">{{ $comics_detail['title'] }}</h1>
                {{-- Disponibilità --}}
                <div class="row availability m-0">
                    <div class="col-9 d-flex justify-content-between availability-price">
                        <div>U.S.Price: <span class="text-light">{{ $comics_detail['price'] }}</span></div>
                        <div class="text-uppercase">available</div>
                    </div>
                    <div class="col-3 availability-check">
                        Check Availability
                    </div>
                </div>
                {{-- /Disponibilità --}}
                <p class="comics-description mt-4">
                    {{ $comics_detail['description'] }}
                </p>
            </section>
            {{-- Descrizione del fumetto --}}
            {{-- Pubblicità --}}
            <section class="advertisement col-4">
                <h3 class="text-end text-uppercase text-secondary">advertisement</h3>
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
        <div class="col-9 row">
            {{-- Colonna info sinistra --}}
            <div class="col-6">
                <h2 class="info-border">Talent</h2>
                {{-- Disegnatori --}}
                <div class="row justify-content-between m-0 pt-2 pb-3 info-border">
                    <div class="col-4 p-0">Art by:</div>
                    <div class="col-8">
                        @foreach ($comics_detail['artists'] as $artist)
                            <a href="#">{{ $artist }}</a>
                        @endforeach
                    </div>
                </div>
                {{-- /Disegnatori --}}
                {{-- Scrittori --}}
                <div class="row justify-content-between m-0 pt-3 pb-3 info-border">
                    <div class="col-4 p-0">Written by:</div>
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
                <h2 class="info-border">Specs</h2>
                {{-- Serie --}}
                <div class="row m-0 pt-2 pb-3 info-border">
                    <div class="col-4 p-0">Series:</div>
                    <div class="col-8">
                        <a class="text-uppercase" href="#">{{ $comics_detail['series'] }}</a>
                    </div>
                </div>
                {{-- /Serie --}}
                {{-- Prezzo --}}
                <div class="row m-0 pt-3 pb-3 info-border">
                    <div class="col-4 p-0">U.S. Price:</div>
                    <div class="col-8">{{ $comics_detail['price'] }}</div>
                </div>
                {{-- /Prezzo --}}
                {{-- Data saldi --}}
                <div class="row m-0 pt-3 pb-3 info-border">
                    <div class="col-4 p-0">On Sale Date:</div>
                    <div class="col-8">{{ $comics_detail['sale_date'] }}</div>
                </div>
                {{-- /Data saldi --}}
            </div>
            {{-- /Colonna info destra --}}
        </div>
    </section>
    {{-- /Info fumetto --}}

    {{-- Links --}}
    <section class="row justify-content-center comics-detail-links">
        <div class="col-9 row">
            <div class="col-3 d-flex justify-content-between link-box">
                <h4 class="text-uppercase">Digital Comics</h4>
                <div class="link-img align-self-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Digital Comics">
                </div>
            </div>
            <div class="col-3 d-flex justify-content-between link-box">
                <h4 class="text-uppercase">shop dc</h4>
                <div class="link-img align-self-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="Shop DC">
                </div>
            </div>
            <div class="col-3 d-flex justify-content-between link-box">
                <h4 class="text-uppercase">comic shop locator</h4>
                <div class="link-img align-self-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="Shop Locator">
                </div>
            </div>
            <div class="col-3 d-flex justify-content-between link-box">
                <h4 class="text-uppercase">subscriptions</h4>
                <div class="link-img align-self-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Subscriptions">
                </div>
            </div>
        </div>
    </section>
    {{-- /Links --}}

@endsection