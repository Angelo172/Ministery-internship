@extends('layouts.admin')

@section('content')
<div class="container">
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
                        <li class="breadcrumb-item active" aria-current="page">Modification d'un article</li>
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
                    <h3 class="card-title">Modifier un article</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Titre</label>
                                <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $article->title) }}" required>
                            </div>
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2bs4" name="status" id="" style="width: 100%;"required>
                                    <option value="draft" @if(old('status', $article->status) == 'draft') selected @endif>Brouillon</option>
                                    <option value="actived" @if(old('status', $article->status) == 'actived') selected @endif>Actif</option>
                                    <option value="archived" @if(old('status', $article->status) == 'archived') selected @endif>Archivé</option>
                                </select>
                            </div>
                                    @error('status')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $article->date) }}" required>
                            </div>
                                    @error('date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="5" required>{{ old('description', $article->description) }}</textarea>
                            </div>
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="file">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file" name="image">
                                        <label class="custom-file-label" for="file">Choisir image</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Téléchager</span>
                                    </div>
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                    @if($article->hasMedia('post-image'))
                                        <img src="{{ $article->getFirstMediaUrl('post-image') }}" alt="Image actuelle" width="120" class="mt-2">
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
            <button type="submit" class="btn btn-success btn-sm me-1">Enrégistrer</button>
        </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

