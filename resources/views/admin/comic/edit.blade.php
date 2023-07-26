@extends('layout.admin-app')

@section('title', 'Creazione Comic')

@section('main-content')
    <main class="admin-panel-container">
        <div class="container">

            <h3 class="text-center mb-5">Updated {{ $comic->title }} Comic</h3>
            <form action="{{ route('admin.comics.update', ['comic' => $comic->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">
                                Title
                            </label>
                            <input type="text" class="form-control" id="title"
                                name="title" value="{{ $comic->title }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">
                                Price
                            </label>
                            <input type="text" class="form-control" id="price"
                                name="price" value="{{ $comic->price }}" required >
                        </div>
                        <div class="mb-3">
                            <label for="series" class="form-label">
                                Serie
                            </label>
                            <input type="text" class="form-control" id="series"
                                name="series" value="{{ $comic->series }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="sale_date" class="form-label">
                                Sale Date
                            </label>
                            <input type="date" class="form-control" id="sale_date"
                                name="sale_date" value="{{ $comic->sale_date }}" required>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="thumb" class="form-label">
                                Image url
                            </label>
                            <input type="text" class="form-control" id="thumb"
                                name="thumb" value="{{ $comic->thumb }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">
                                Type
                            </label>
                            <input type="text" class="form-control" id="type"
                                name="type" value="{{ $comic->type }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="artists" class="form-label">
                                Artist/s
                            </label>
                            <input type="text" class="form-control" id="artists"
                                name="artists" value="{{ is_array($comic->artists) ? implode(', ', $comic->artists) : $comic->artists }}">
                        </div>
                        <div class="mb-3">
                            <label for="writers" class="form-label">
                                Writer/s
                            </label>
                            <input type="text" class="form-control" id="writers"
                                name="writers" value="{{ is_array($comic->writers) ? implode(', ', $comic->writers) : $comic->writers }}">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">
                        Description
                    </label>
                    <textarea class="form-control" name="description" id="description" rows="10" required>{{ $comic->description }}</textarea>
                </div>


                <button type="submit" class="btn btn-success">
                    Edit comic
                </button>

            </form>
        </div>
    </main>
@endsection
