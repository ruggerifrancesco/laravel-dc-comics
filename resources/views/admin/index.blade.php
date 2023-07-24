@extends('layout.admin-app')

@section('title', 'Admin Index Comics')

@section('main-content')
    <main class="admin-panel-container">
        <h1>
            Lista Panello Admin Comics
        </h1>

        <div class="container">
            <div class="row">
                <table class="table table-dark table-hover">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Serie</th>
                        <th scope="col">Price</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($comicsIndex as $comic)
                            <tr>
                                <th scope="row">{{ $comic['id'] }}</th>
                                <td>{{ $comic['title'] }}</td>
                                <td>{{ $comic['series'] }}</td>
                                <td>{{ $comic['price'] }}</td>
                                <td>{{ $comic['type'] }}</td>
                                <td>
                                    <a href="{{ route('admin.comic.show', ['id' => $comic['id']]) }}" class="btn btn-warning">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="row">
                {!! $comicsIndex->links() !!}
            </div>
        </div>
    </main>
@endsection
