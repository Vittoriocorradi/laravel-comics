{{-- Jumbotron --}}
<section class="jumbotron">
    {{-- Stampa 'current series' solo se nella home --}}
    @if (Route::currentRouteName() === 'home')
        <div class="container">
            <h2>current series</h2>
        </div>
    @endif
</section>
{{-- /Jumbotron --}}