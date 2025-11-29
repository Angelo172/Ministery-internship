@extends('template')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
        @if (isset($actualites))
      <img src="{{ $actualites->getFirstMediaUrl('post-image') }}" class="d-block w-100" alt="..." style="height: 350px; object-fit: cover;">
      @endif
      <div class="carousel-caption d-none d-md-block">
        <h5 class="title fw-bold" style="font-size: 100px; text-align:center; margin-top:-19.50%; margin-left:8%; font-family:Montserrat">Actualités</h5>
      </div>
    </div>
    </div>
    </div>

    <div class="container mt-2">
  <div id="article4" class="row row-cols-1 row-cols-md-3 g-4">
          @foreach ( $articles as $article )
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <p class="card-title">{{ $article->title }}</p>
            <p class="card-text">{{ $article->description }}</p>
            <div class="row">
              <div class="col"><a href="{{ route('actualites.show',$article) }}"><button style="font-size: 10px;" class="bouton text-center bg-light">Lire l'article</button></a></div>
              <div style="margin-left: 15%;" class="col fw-bold"><img src="/img/calendar 1.png" alt="" width="20"></div>
              <div style="margin-left: -32%;" class="col card-text offset-0"><span class="fs-6 mt-5 fw-bold">
                {{ \Carbon\Carbon::parse($article->date)->locale('fr')->isoFormat('D MMMM YYYY') }}
            </span></div>
            </div>
          </div>
          <img src="{{ $article->getFirstMediaUrl('post-image') }}" class="card-img-bottom" alt="..." height="200">
        </div>
      </div>
          @endforeach
    </div>
    </div>
@endsection
