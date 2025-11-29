@extends('layouts.admin')

@section('content')
    <div class="container">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Rôles</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Rôles</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Création d'un rôles</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <div class="row">
            <div class="col-12 pb-3">
                <a class="btn btn-default" href="{{ route('roles.index') }}" data-toggle="tooltip" title="Back to list">
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
                   <form action="{{ route('roles.store') }}" method="POST">
                   @csrf
                   <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                            <label for="name">Noms</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ old('name') }}">
                            @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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
