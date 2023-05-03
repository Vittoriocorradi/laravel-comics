{{-- Dettaglio di un fumetto --}}
@extends('layouts.app')

{{-- Titolo della pagina --}}
@section('page-title')
    DC Comics - Comic Details
@endsection

@section('page-main')

    <section class="comics-img-background row justify-content-center">
        <div class="col-8 comics-img-col">
            <div class="comics-img-box">
                <img src="{{ $comics_detail['thumb'] }}" alt="{{ $comics_detail['title'] }}">
            </div>
        </div>
    </section>
    <div class="central-section row justify-content-center">
        <div class="col-8 row">
            <section class="comic-description col-8">
                <h1>{{ $comics_detail['title'] }}</h1>
                <div class="row availability">
                    <div class="col-9 d-flex justify-content-between">
                        <div>{{ $comics_detail['price'] }}</div>
                        <div class="text-uppercase">available</div>
                    </div>
                    <div class="col-3">
                        Check Availability
                    </div>
                </div>
                <p class="comics-description">
                    {{ $comics_detail['description'] }}
                </p>
            </section>
            <section class="advertisement col-4">
                <h3 class="text-end text-uppercase">advertisement</h3>
                <div class="ads-img">
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                </div>
            </section>
        </div>
    </div>
    <section>

    </section>

@endsection