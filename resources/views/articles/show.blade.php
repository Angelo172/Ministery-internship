@extends('layouts.admin')

@section('content')
<div class="container">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Articles</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Articles</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Voir un article</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
<div class="row">
    <div class="col-12 pb-3">
        <a class="btn btn-default" href="{{ route('articles.index') }}" data-toggle="tooltip" title="Back to list">
            <span class="far fa-arrow-alt-circle-left text-muted"></span>
        </a>
    </div>
</div>
    <div class="card text-center">
        <header class="card-header">
            <h5 class="card-header-title">Titre : {{ $article->title }}</h5>
        </header>
        <div class="card-content">
            <div class="content">
                <p class="fs-5">Année de sortie : {{ $article->date }}</p>
                <hr>
                <img src="{{$article->getFirstMediaUrl('post-image')}}" alt="" width="200">
                <hr>
                <p class="mt-3">{{ $article->description }}</p>
            </div>
        </div>
        <footer class="card-footer mt-3">
        <a class="btn btn-info btn-sm me-1" href="{{ route('articles.edit', $article) }}"><i class="fas fa-pencil-alt w-100"></i></a>
        <form action="{{ route('articles.destroy', $article) }}" method="post" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt w-100"></i></button>
    </div>
        </form>
@endsection
