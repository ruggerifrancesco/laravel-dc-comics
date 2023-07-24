@extends('layout.app')

@section('title', 'Comics Index')

@section('main-content')
    <div class="wrapper wrapper-main">
        <div class="series-section-title">
            <h2>Current Series</h2>
        </div>

        <div class="series-wrapper">

            <!-- Comics Item -->
            @foreach ($comicsIndex as $comic)
                <article class="card-item">
                    <div class="card-img">
                        <a href="#">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }} Series">
                        </a>
                    </div>

                    <div class="card-infos">
                        <h5>{{ $comic['series'] }}</h5>
                    </div>
                </article>
            @endforeach
        </div>

        <button type="button" class="btn btn-primary" id="load-more-btn">
            Load more
        </button>
    </div>
@endsection
