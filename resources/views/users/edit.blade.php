@extends('layouts.admin')

@section('content')
<div class="container">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Utilisateurs</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Utilisateurs</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Modification d'un utilisateurs</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <div class="row">
            <div class="col-12 pb-3">
                <a class="btn btn-default" href="{{ route('users.index') }}" data-toggle="tooltip" title="Back to list">
                    <span class="far fa-arrow-alt-circle-left text-muted"></span>
                </a>
            </div>
           </div>
           <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Modifir d'un utilisateur</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.update', $user) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $user->name) }}" required>
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                            </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control select2bs4" name="status" id="" style="width: 100%;"required>
                            <option value="draft" @if(old('status', $user->status) == 'draft') selected @endif>Brouillon</option>
                            <option value="actived" @if(old('status', $user->status) == 'actived') selected @endif>Actif</option>
                            <option value="archived" @if(old('status', $user->status) == 'archived') selected @endif>Archivé</option>
                        </select>
                        @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('date', $user->email) }}" required>
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    @foreach($roles as $role)
                        <label>
                            <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                {{ $user->roles->contains($role) ? 'checked' : '' }}>
                            {{ $role->name }}
                        </label><br>
                    @endforeach
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

