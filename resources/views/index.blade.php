@extends('template')
@section('content')
        <!-- Simple Bootstrap Carousel Example without $index -->
        @php $first = true; @endphp
        <div id="simpleCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($sliders as $slider)
                <button
                        type="button"
                        data-bs-target="#simpleCarousel"
                        data-bs-slide-to="{{ $loop->index }}"
                        style="width: 30px; height: 30px; border-radius: 50%; padding: 0; margin: 0 5px; margin-top: -55px; border: solid white 1px; background-color: transparent ;"
                    {{-- <button type="button" data-bs-target="#simpleCarousel" data-bs-slide-to="{{ $loop->index }}" --}}
                        class="{{ $first ? 'active' : '' }}"
                        aria-current="{{ $first ? 'true' : 'false' }}"
                        aria-label="Slide {{ $loop->iteration }}"></button>
                    @php $first = false; @endphp
                @endforeach
            </div>
            <div class="carousel-inner">
                @php $first = true; @endphp
                @foreach ($sliders as $slider)
                    <div class="carousel-item {{ $first ? 'active' : '' }}">
                        <img src="{{ $slider->getFirstMediaUrl('post-image') }}" class="d-block w-100" alt="{{ $slider->title }}" style="margin-bottom: -120px; margin-top: -150px;">
                        <div class="carousel-caption d-none d-md-block text-start">
                             @php $textformat=preg_replace('/([,.;:!?])\s/u',"$1<br>",$slider->title); @endphp
                            <h1>{!! $textformat !!}</h1>
                        </div>
                    </div>
                    @php $first = false; @endphp
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#simpleCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#simpleCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container mt-3">
  <div class="row">

    @php
        function tronquerTexte($texte, $limite = 200) {
    if (strlen($texte) <= $limite) {
        return $texte;
    }

    $texte_tronque = substr($texte, 0, $limite);
    $dernier_espace = strrpos($texte_tronque, ' ');
    if ($dernier_espace !== false) {
        $texte_tronque = substr($texte_tronque, 0, $dernier_espace);
    }

    return $texte_tronque . '...';
}
    @endphp


    @php $count = count($articlesday); @endphp

    {{-- Cas de 1 article --}}
    @if ($count==1)
    <div id="article1" class="col-12 col-md-12 mb-3">
          @include('partials.article_card_large', ['article' => $articlesday[0]])
        </div>

    {{-- Cas de 2 articles --}}
    @elseif($count == 2)
      @foreach ($articlesday as $article)
        <div id="article1" class="col-12 col-md-6 mb-3">
          @include('partials.article_card_large', ['article' => $article])
        </div>
      @endforeach

    {{-- Cas de 3 ou 4 articles --}}
    @elseif ($count == 3)
      @foreach ($articlesday as $article)
        <div id="article2" class="col-12 col-md-{{ 12 / $count }} mb-3">
          @include('partials.article_card4', ['article' => $article])
        </div>
      @endforeach

      @elseif ($count == 4)
      @foreach ($articlesday as $article)
        <div id="article2" class="col-12 col-md-{{ 12 / $count }} mb-3">
          @include('partials.article_card5', ['article' => $article])
        </div>
      @endforeach

    {{-- Cas de 5 articles ou plus --}}
    @elseif ($count >= 5)
      {{-- Premier article en grand à gauche --}}
      <div id="article1" class="col-12 col-lg-6 mb-3">
        @include('partials.article_card_large', ['article' => $articlesday[0]])
      </div>

      {{-- Les 4 suivants en grille 2x2 à droite --}}
      <div class="col-12 col-lg-6">
        <div class="row">
          @for ($i = 1; $i <= 4; $i++)
            @if (isset($articlesday[$i]))
            @if($articlesday[$i]===$articlesday[1])
              <div id="article2" class="col-6 mb-3">
                @include('partials.article_card1', ['article' => $articlesday[1]])
              </div>
              @else
              <div id="article3" class="col-6 mb-3">
                @include('partials.article_card', ['article' => $articlesday[$i]])
              </div>
              @endif
            @endif
          @endfor
        </div>
      </div>

      {{-- Les suivants en ligne --}}
      <div class="row mt-2">
        @for ($i = 5; $i <= 7 ; $i++)
           @if (isset($articlesday[$i]))
           @if(isset($articlesday[7]) && $articlesday[$i]===$articlesday[7])
        <div id="article4" class="col-12 col-md-4 mb-3">
            @include('partials.article_card_last7', ['article' => $articlesday[7]])
          </div>
          @else
           <div id="article4" class="col-12 col-md-4 mb-3">
            @include('partials.article_card_last', ['article' => $articlesday[$i]])
          </div>
          @endif
           @endif
        @endfor
      </div>
    @endif
  </div>
</div>


<div id="content" class="container">
  <h1 id="services">Services</h1>

  <div id="good" class="row">
    <div class="row">
    <button id="bout" class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-4 col-xxl-5 bg-light mx-1 p-4"><h3 class="content">Délivrance de carte <br>d'artiste</h3></button>
    <button id="bout" class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-4 col-xxl-5 bg-light mx-4 p-4"><h3 class="content">Agrement et licence <br> d'exploitation d'hotels</h3></button>
  </div>

  <div class="row">
    <button id="bout" class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-4 col-xxl-5 bg-light text-center mx-1 mt-4 p-4"><h3 class="content">Agrement et licence <br> d'exploitation d'hotels</h3></button>
    <button id="bout" class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-4 col-xxl-5 bg-light text-center mx-4 mt-4 p-4"><h3 class="content">Délivrance de carte <br> d'artiste</h3></button>
  </div>

  <div class="row">
    <button id="bout" class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-4 col-xxl-5 bg-light text-center mx-1 mt-4 p-4"><h3 class="content">Agrement et licence <br> d'exploitation d'hotels</h3></button>
    <button id="bout" class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-4 col-xxl-5 bg-light text-center mx-4 mt-4 p-4"><h3 class="content">Délivrance de carte <br> d'artiste</h3></button>
  </div>
</div>
  </div>


<div class="container">
  <h1 id="lien">Liens utiles</h1>
  <div class="row">
    <button  id="gouv" class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-2 col-xxl-2 p-4 "> <h5 id="h3">Gouv.bj</h5> <span id="go">Actualités <br> gouvernementales</span></button>
    <button  id="sgg" class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-2 col-xxl-2 p-4 "><h5 id="h">sgg.gouv.bj</h5> <span id="ga">Lois-Décrets</span></button>
    <button  id="evisa" class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-2 col-xxl-2 p-4 "><h5 id="h3">eVisa.bj</h5> <span id="go">obtenir un visa <br> en ligne</span></button>
    <button  id="serv" class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-2 col-xxl-2 p-4 "><h5 id="h3">Service-public.bj</h5><span id="go">Actualités <br> gouvernementales </span></button>
  </div>
</div>
@endsection

