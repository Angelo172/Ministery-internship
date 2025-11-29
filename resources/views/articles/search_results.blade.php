@extends('template')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ $actualite->getFirstMediaUrl('post-image') }}" class="d-block w-100" alt="..." style="height: 350px; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="title fw-bold" style="font-size: 90px; text-align:center; margin-top:-19.50%; margin-left:8%; font-family:Montserrat">{{ $actualite->title }}</h5>
      </div>
    </div>
    </div>
    </div>
   <div class="container mt-5">
        <div class="row">
    <div class="col-md-4">
        <form action="\search" method="GET" class="d-flex" role="search">
        @csrf
        <input name="q" class="form-control p-3 me-2 " type="text" placeholder="Rechercher des articles..." aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Rechecher</button>
      </form>
    </div>
        </div>

        @if (request('q'))
        @if($articles->isEmpty())
        <div class="alert alert-warning w-100 text-center mt-3">Aucun article trouvé</div>
        @else
        @foreach ($articles as $article )
        <div class="container mt-1">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="card-title fw-bold">{{$article->title}}</h3>
                    <p class="card-text fs-5"><small class="text-muted"><img src="/img/calendar 1.png" alt="" width="20"> publié le {{ \Carbon\Carbon::parse($article->date)->locale('fr')->isoFormat('D MMMM YYYY') }}</small></p>
                    <p class="card-text fs-5">{{ $article->description }}</p>
                </div>
            </div>
        </div>
    </div>
        @endforeach
        @endif
        @endif

    </div>
@endsection
