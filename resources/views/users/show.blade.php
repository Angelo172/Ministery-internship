@extends('layouts.admin')

@section('content')
<div class="container">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Users</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Users</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Voir un user</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
<div class="row">
    <div class="col-12 pb-3">
        <a class="btn btn-default" href="{{ route('users.index') }}" data-toggle="tooltip" title="Back to list">
            <span class="far fa-arrow-alt-circle-left text-muted"></span>
        </a>
    </div>
</div>
    <div class="card text-center">
        <header class="card-header">
            <h3 class="card-header-title">Informations de l'utilisateur</h3>
        </header>
        <div class="card-content">
            <div class="content text-start">
                <p class="fs-5">Nom : {{ $user->name }}</p>
                <p class="fs-5">Email : {{ $user->email }}</p>
                @foreach ($user->$roles as $role)
                    <p class="fs-5">Rôles : {{$role->name}}</p>
                @endforeach
                <hr>
            </div>
        </div>
        <footer class="card-footer mt-3">
        <a class="btn btn-info btn-sm me-1" href="{{ route('users.edit', $user) }}"><i class="fas fa-pencil-alt w-100"></i></a>
        <form action="{{ route('users.destroy', $user) }}" method="post" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt w-100"></i></button>
    </div>
        </form>
@endsection
