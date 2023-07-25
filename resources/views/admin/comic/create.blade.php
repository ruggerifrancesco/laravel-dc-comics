@extends('layout.admin-app')

@section('title', 'Creazione Comic')

@section('main-content')
<main class="admin-panel-container">
    <div class="container">
        <form action="{{ route('admin.comics.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">
                            Title
                        </label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">
                            Price
                        </label>
                        <input type="text" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">
                            Serie
                        </label>
                        <input type="text" class="form-control" id="series" name="series" required>
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">
                            Sale Date
                        </label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" required>
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">
                            Image url
                        </label>
                        <input type="text" class="form-control" id="thumb" name="thumb" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">
                            Type
                        </label>
                        <input type="text" class="form-control" id="type" name="type" required>
                    </div>
                    <div class="mb-3">
                        <label for="artists" class="form-label">
                            Artist/s
                        </label>
                        <input type="text" class="form-control" id="artists" name="artists" required>
                    </div>
                    <div class="mb-3">
                        <label for="writers" class="form-label">
                            Writer/s
                        </label>
                        <input type="text" class="form-control" id="writers" name="writers" required>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">
                    Description
                </label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10" required>
                </textarea>
            </div>


            <button type="submit" class="btn btn-primary">
                Create new pokemon
            </button>
            <button type="reset" class="btn btn-warning">
                Reset fields
            </button>

        </form>
    </div>
</main>
@endsection
