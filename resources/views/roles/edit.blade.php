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
                  <li class="breadcrumb-item active" aria-current="page">Modification d'un rôles</li>
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
                    <h3 class="card-title">Modifir d'un rôles</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('roles.update', $role) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $role->name) }}" required>
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                            </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info btn-sm me-1">Enrégistrer</button>
                </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

