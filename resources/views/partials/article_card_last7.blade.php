<div class="card h-90 w-60 d-flex flex-column justify-content-between">
  <div class="card-body">
    <a href="{{ route('actualites.show', $article) }}" class="text-decoration-none">
      <p class="card-title">{{ tronquerTexte($article->title,80) }}</p>
    </a>
    <p class="card-text">{{ tronquerTexte($article->description,90) }}</p>
    <div class="row">
      <div class="col">
        <a href="{{ route('actualites.show', $article) }}">
          <button class="bouton text-center bg-light" style="font-size: 10px;">Lire l'article</button>
        </a>
      </div>
      <div class="col fw-bold" style="margin-left: 15%">
        <img src="/img/calendar 1.png" alt="" width="20">
      </div>
      <div class="col card-text offset-0" style="margin-left:-32%">
        <span class="fw-bold mt-5 fs-6">
          {{ \Carbon\Carbon::parse($article->date)->locale('fr')->isoFormat('D MMMM YYYY') }}
        </span>
      </div>
    </div>
  </div>
  <a href="{{ route('actualites.show', $article) }}">
    <img src="{{ $article->getFirstMediaUrl('post-image') }}" class="card-img-bottom" alt="..." style="height: 138px;">
  </a>
  <div class="offset-2"><button id="btn" class="mt-3 mb-2 ms-3"><span class="text-light">Lire toute l'actualité</span></button></div>
</div>
