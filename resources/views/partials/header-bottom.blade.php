{{-- Header bottom --}}

<div class="bottom-header">
    <div class="big-container d-flex align-items-center justify-content-between">
        {{-- Logo --}}
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        {{-- Nav --}}
        <ul class="d-flex nav">
            <li><a href="#">characters</a></li>
            <li><a href="#">comics</a></li>
            <li><a href="#">movies</a></li>
            <li><a href="#">tv</a></li>
            <li><a href="#">games</a></li>
            <li><a href="#">collectibles</a></li>
            <li><a href="#">videos</a></li>
            <li><a href="#">fans</a></li>
            <li><a href="#">news</a></li>
            <li><a href="#">shop</a></li>
        </ul>
        {{-- Search input --}}
        <form action="GET">
            <label for="search"></label>
            <input type="text" id="search">
        </form>
    </div>
</div>