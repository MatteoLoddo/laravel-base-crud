@extends('layouts.app')

@section('content_page')
    <div>
        <form action="{{ route('comics.store')}} " method="post">
          @csrf
            {{-- input TITOLO --}}
            <div>
                <label for="">Titolo del Fumetto</label>
                <input type="text" name="title" id="">
            </div>
            {{-- input DESCRIZIONE --}}
            <div>
                <label for="">Descrizione del Fumetto</label>
                <input type="text" name="description">
            </div>
            {{-- input URL IMMAGINE --}}
            <div>
                <label for="">Url immagine</label>
                <input type="text" name="thumb">
            </div>
            {{-- input PREZZO --}}
            <div>
                <label for="">Prezzo</label>
                <input type="number" name="price">
            </div>
            {{-- input SERIE --}}
            <div>
                <label for="">Serie Fumetto</label>
                <input type="text" name="series">
            </div>
            {{-- input DATA SALDI --}}
            <div>
                <label for="">Data in Saldo</label>
                <input type="text" name="sale_date">
            </div>
            {{-- input ARTISTI --}}
            <div>
                <label for="">Artisti</label>
                <input type="text" name="artist">
            </div>
            {{-- input DATA SCRITTORI --}}
            <div>
                <label for="">Scrittori</label>
                <input type="text" name="writers">
            </div>
            {{-- select TIPO --}}
            <div>
                <label for="">Scegli il tipo</label>
                <select name="type">
                    <option selected></option>
                    <option value="1">Comic book</option>
                    <option value="2">graphic novel</option>
                    <option value="3">Kids Book</option>
                </select>
            </div>
            <div>
              <button type="submit">Salva</button>
              <button><a href="{{route('comics.index')}}">Annulla</a></button>
            </div>
        </form>
    </div>
@endsection
