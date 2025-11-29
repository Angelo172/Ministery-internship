<div class="card h-100 d-flex flex-column justify-content-between">
  <div class="card-body pt-4">
    <a href="{{ route('actualites.show', $article) }}" class="text-decoration-none">
      <p class="card-title mb-3">{{ tronquerTexte($article->title,90) }}</p>
    </a>
    <p class="card-text mb-4">{{ tronquerTexte($article->description,170) }}</p>
    <div class="row">
      <div class="col mb-4">
        <a class="bouto w-100" href="{{ route('actualites.show', $article) }}">Lire l'article</a>
      </div>
      <div class="col fw-bold" style="margin-left: 30%">
        <img src="/img/calendar 1.png" alt="">
      </div>
      <div class="col card-text offset-0" style="margin-left: -23%;">
        <span class="fw-bold fs-5 mt-5">
          {{ \Carbon\Carbon::parse($article->date)->locale('fr')->isoFormat('D MMMM YYYY') }}
        </span>
      </div>
    </div>
  </div>
  <a href="{{ route('actualites.show', $article) }}">
    <img src="{{ $article->getFirstMediaUrl('post-image') }}" class="card-img-bottom" alt="..." style="height: 282px;">
  </a>
</div>
