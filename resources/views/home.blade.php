@extends('layouts.app')

@section('page-title')
    DC Comics
@endsection

@section('page-main')
    <section class="jumbotron">
        <div class="container">
          <h2>current series</h2>
        </div>
    </section>
    <section class="comics-list d-flex flex-column align-items-center">
        <div class="big-container d-flex flex-wrap">
            @foreach ($comics as $comic)
                <div class="ms-card">
                    <div class="img">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </div>
                    <div>{{ $comic['title'] }}</div>
                </div>
            @endforeach
        </div>
        <div>
            <button>load more</button>
        </div>
    </section>
@endsection