@extends('template')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ $article->getFirstMediaUrl('post-image') }}" class="d-block w-100" alt="..." style="height: 350px; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="title fw-bold" style="font-size: 90px; text-align:center; margin-top:-19.50%; margin-left:8%; font-family:Montserrat">{{ $article->title }}</h5>
      </div>
    </div>
    </div>
    </div>

<div class="container mt-1">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="card-title fw-bold"></h3>
                    <p class="card-text fs-5"><small class="text-muted"><img src="/img/calendar 1.png" alt="" width="20"> publié le {{ \Carbon\Carbon::parse($article->date)->locale('fr')->isoFormat('D MMMM YYYY') }}</small></p>
                    <p class="card-text fs-5">{{ $article->description }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 pb-1">
                <a class="btn btn-secondary" href="{{ route('front.index') }}" data-toggle="tooltip" title="Back to list">
                    <span class="far fa-arrow-alt-circle-left text-muted"></span>
                </a>
            </div>
    </div>
</div>
@endsection
