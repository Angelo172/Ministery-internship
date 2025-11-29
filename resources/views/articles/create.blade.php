@extends('layouts.admin')

@section('content')

   <div class="container">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
           <div class="container-fluid">
            <!--begin::Row-->
            <div class="row mb-3">
                <div class="col-sm-6"><h3 class="mb-0">Articles</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Articles</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Création d'article</li>
                    </ol>
                </div>
            </div>
                <div class="row">
                <div class="col-12 pb-3">
                    <a class="btn btn-default" href="{{ route('articles.index') }}" data-toggle="tooltip" title="Back to list">
                        <span class="far fa-arrow-alt-circle-left text-muted"></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Création d'article</h3>
                        </div>
              <!-- /.card-header -->
              <!-- form start -->
                        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Titre</label>
                                    <input type="text" class="form-control" id="title" placeholder="Entrer titre" name="title" value="{{ old('title') }}">
                                </div>
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control select2bs4" name="status" id="" style="width: 100%;"required>
                                        <option selected="selected" value="draft">Brouillon</option>
                                        <option value="actived">Actif</option>
                                        <option value="archived">Archivé</option>
                                    </select>
                                    @error('status')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file">Image</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file" name="image">
                                        <label class="custom-file-label" for="file">Choisir une image</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Téléchager</span>
                                    </div>
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}" required>
                                </div>
                                        @error('date')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" placeholder="Entrer description" name="description">{{ old('description') }}</textarea>
                                </div>
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                            </div>
                        </div>
                    </div>
                <!-- /.card-body -->
                    <footer class="card-footer mt-3">
                        <button type="submit" class="btn btn-primary me-1">Ajouter</button>
                    </footer>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
