<div class="card h-100 w-60 d-flex flex-column justify-content-between">
  <div class="card-body">
    <a href="{{ route('actualites.show', $article) }}" class="text-decoration-none">
      <p class="card-title">{{ tronquerTexte($article->title,46) }}</p>
    </a>
    <p class="card-text">{{ tronquerTexte($article->description,60) }}</p>
    <div class="row" style="margin-top: -3%;">
      <div class="col">
        <a href="{{ route('actualites.show', $article) }}">
          <button class="bouton text-center bg-light" style="font-size: 10px;">Lire l'article</button>
        </a>
      </div>
      <div class="col fw-bold" style="margin-left: -15%">
        <img src="/img/calendar 1.png" alt="" width="18">
      </div>
      <div class="col card-text offset-0" style="font-size: 12px; margin-left:-45%;">
        <span class="fw-bold mt-5">
          {{ \Carbon\Carbon::parse($article->date)->locale('fr')->isoFormat('D MMMM YYYY') }}
        </span>
      </div>
    </div>
  </div>
  <a href="{{ route('actualites.show', $article) }}">
    <img src="{{ $article->getFirstMediaUrl('post-image') }}" class="card-img-bottom" alt="..." style="height: 150px;">
  </a>
</div>
