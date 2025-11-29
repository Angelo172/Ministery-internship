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
                  <li class="breadcrumb-item active" aria-current="page">Liste des articles</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4">
                <header class="card-header">
                    <h2 class="card-header-title">Liste des articles</h2>
                    <form action="{{ route('articles.create') }}" method="post">
                        @csrf
                        <a class="btn btn-primary mt-3" href="{{ route('articles.create') }}">Ajouter Article</a>
                    </form>
                </header>
                  <!-- /.card-header -->
                  <div class="card-content">
            <div class="content">
                <table class="table is-hoverable table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Titre</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td><img src="{{ $article->getFirstMediaUrl('post-image')}}" alt=""style="width:100px"></td>
                                <td><h5 class="mt-4 text-bold">{{ $article->title }}</h5></td>
                                <td class="text-right ">
                                    <a class="btn btn-light btn-sm mt-4 " title="View" href="{{ route('articles.show', $article) }}"><i class="fas fa-eye">
                                        </i></a>
                                    <a class="btn btn-primary btn-sm mt-4 " title="Edit" href="{{ route('articles.edit', $article) }}"><i class="fas fa-pencil-alt">
                                        </i></a>
                                    <form action="{{ route('articles.destroy', $article) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mt-4 " title ="Delete"><i class="fas fa-trash-alt">
                                        </i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
        <footer class="card-footer is-centered">
            {{ $articles->links() }}
        </footer>
        <style>
        .card-footer {
            justify-content: center;
            align-items: center;
            padding: 0.4em;
        }
    </style>
    </div>
@endsection
