@extends('layout.app')

@section('title', 'DC Comics')

@section('main-content')
    <section class="my_store-nav">
        <div class="wrapper">
            {{-- @foreach ($storeBar as $store) --}}
                {{-- <div class="buy-store-section"> --}}
                    {{-- <a href="{{ $store['link'] }}"> --}}
                        {{-- <div class="store-context"> --}}
                            {{-- <img src="{{ Vite::asset('resources/img/' . $store['iconSrc']) }}" alt="{{ $store['nameStore'] }}"> --}}
                            {{-- <span class="store-label">{{ $store['nameStore'] }}</span> --}}
                        {{-- </div> --}}
                    {{-- </a> --}}
                {{-- </div> --}}
            {{-- @endforeach --}}
        </div>
    </section>
@endsection
