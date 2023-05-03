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
@endsection