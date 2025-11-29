@extends('layouts.admin')

@section('content')
    <div class="container">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Slides</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Slides</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Création d'un slide</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <div class="row">
            <div class="col-12 pb-3">
                <a class="btn btn-default" href="{{ route('sliders.index') }}" data-toggle="tooltip" title="Back to list">
                    <span class="far fa-arrow-alt-circle-left text-muted"></span>
                </a>
            </div>
           </div>
           <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Création d'un slide</h3>
                    </div>
              <!-- /.card-header -->
              <!-- form start -->
                   <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
                   @csrf
                   <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{ old('title') }}">
                        </div>
                            </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2bs4" name="status" id="" style="width: 100%;"required>
                                    <option selected="selected" value="draft">Brouillon</option>
                                    <option value="actived">Actif</option>
                                    <option value="archived">Archivé</option>
                                </select>
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
                                <label class="custom-file-label" for="file">Choisir image</label>
                            </div>
                            <div class="input-group-append">
                               <span class="input-group-text">Téléchager</span>
                            </div>
                        </div>
                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}" required>
                            </div>
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
    </div>
@endsection
