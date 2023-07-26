@extends('layout.admin-app')

@section('title', 'Comic ID')

@section('main-content')
<main class="admin-panel-container">
    <div class="container">

    <div class="card border-warning text-bg-dark mb-3">
        <div class="card-header d-flex justify-content-between">
            <span>
                Serie: {{ $comics->series }}
            </span>
            <span>
                Type: {{ $comics->type }}
            </span>
        </div>
        <div class="row g-0">
          <div class="col-md-5 thumb-container">
            <img src="{{ $comics->thumb }}" class="img-fluid" alt="{{ $comics->title }}">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h5 class="card-title mb-5">{{ $comics->title }}</h5>
              <p class="card-text">{{ $comics->description }}</p>

              <div class="accordion accordion-flush" id="accordionFlush">
                <div class="accordion-item text-bg-warning">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button text-bg-warning collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      More Info
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlush">
                    <div class="accordion-body">
                        <ul>
                            <li>Price: {{ $comics->price }}</li>
                            <li>Sale Date: {{ $comics->sale_date }}</li>
                        </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer d-flex gap-2 justify-content-end">
            <a href="" class="btn btn-info">
                <i class="fa-solid fa-pen"></i>
            </a>
            <a type="button" class="btn btn-danger">
                <i class="fa-solid fa-trash"></i>
            </a>
        </div>
      </div>
</main>
@endsection
