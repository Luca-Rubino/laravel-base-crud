<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/scss/app.scss', 'resources/js/app.js')
    <title>@yield('title-page', 'Index')</title>
</head>

<body>
    @include('layout.component.nav')
    @include('layout.component.main')

    <article>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center p-5">
                    <h1>
                        Lista animali
                    </h1>
                </div>
            </div>
            <div class="row">
                @foreach ($animals as $animal)
                    <article class="col-3 card p-0 m-2">
                        <img src="{{ $animal->url_img }}" class="card-img-top" alt="...">
                        <div class="card-body p-3">
                            <h5 class="card-title my-3">Nome: {{$animal->nome}}</h5>
                            <p class="card-text">Specie: {{ $animal->specie }}</p>
                            <p class="card-text">Razza: {{ $animal->razza }}</p>
                            <p class="card-text">Età: {{ $animal->eta }}</p>
                            <p class="card-text">Sesso: {{ $animal->sesso }}</p>
                            <p class="card-text">Colore: {{ $animal->colore }}</p>
                            <p class="card-text">Peso: {{ $animal->peso }}</p>
                            <p class="card-text">Altezza: {{ $animal->altezza }}</p>
                            <p class="card-text">{{ $animal->note }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </article>

    @include('layout.component.footer')

    {{-- @include('resources.js.myScript') --}}
</body>

</html>
