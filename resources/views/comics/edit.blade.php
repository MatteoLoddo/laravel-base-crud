@extends('layouts.app')

@section('content_page')
    <div>
        <form action="{{ route('comics.update', $comic->id) }} " method="post">
            @csrf
            @method('patch')
            @if ($errors->any())
                <div>
                    Errore!

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- input TITOLO --}}
            <div>
                <label for="">Titolo del Fumetto</label>
                <input class='form-control {{ $errors->has('title') ? 'is-invalid' : '' }}'type="text" name="title"
                    value="{{ $comic['title'] }}">
                <div class="invalid-feedback">

                </div>
            </div>
            {{-- input DESCRIZIONE --}}
            <div>
                <label for="">Descrizione del Fumetto</label>
                <input class='form-control {{ $errors->has('title') ? 'is-invalid' : '' }}' type="text" name="description"
                    value="{{ $comic['description'] }}">
                <div class="invalid-feedback">

                </div>
            </div>
            {{-- input URL IMMAGINE --}}
            <div>
                <label for="">Url immagine</label>
                <input class='form-control ' type="text" name="thumb" value="{{ $comic['thumb'] }}">

            </div>
            {{-- input PREZZO --}}
            <div>
                <label for="">Prezzo</label>
                <input class='form-control {{ $errors->has('price') ? 'is-invalid' : '' }}' type="number" name="price"
                    value="{{ $comic['price'] }}">
                <div class="invalid-feedback">

                </div>
            </div>
            {{-- input SERIE --}}
            <div>
                <label for="">Serie Fumetto</label>
                <input class='form-control' type="text" name="series" value="{{ $comic['series'] }}">
            </div>
            {{-- input DATA SALDI --}}
            <div>
                <label for="">Data in Saldo</label>
                <input class='form-control' type="text" name="sale_date" value="{{ $comic['sale_date'] }}">
            </div>
            {{-- input ARTISTI --}}
            <div>
                <label for="">Artisti</label>
                <input class='form-control' type="text" name="artist" value="{{ $comic['artist'] }}">
            </div>
            {{-- input DATA SCRITTORI --}}
            <div>
                <label for="">Scrittori</label>
                <input class='form-control' type="text" name="writers" value="{{ $comic['writers'] }}">
            </div>
            {{-- select TIPO --}}
            <div>
                <label for="">Scegli il tipo</label>
                <select name="type">
                    <option selected>{{ $comic['type'] }}</option>
                    <option value="Comic book">Comic book</option>
                    <option value="graphic novel">graphic novel</option>
                    <option value="Kids Book">Kids Book</option>
                </select>
            </div>
            <div>
                <button type="submit">Salva</button>
                <button><a href="{{ route('comics.index') }}">Annulla</a></button>
            </div>
        </form>
    </div>
@endsection
