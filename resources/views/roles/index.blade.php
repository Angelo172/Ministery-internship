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
                  <li class="breadcrumb-item active" aria-current="page">Liste des rôles</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4">
                <header class="card-header">
            <h2 class="card-header-title">Listes des rôles</h2>
            <form action="{{ route('roles.create') }}" method="post">
                @csrf
                <a class="btn btn-info mt-3" href="{{ route('roles.create') }}">Ajouter Rôles</a>
            </form>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>Noms</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td><h5 class="mt-4 text-bold">{{ $role->name }}</strong></h5></td>
                                <td class="text-right">
                                       <a class="btn btn-primary btn-sm mt-4" title="View" href="{{ route('roles.show', $role) }}"><i class="fas fa-eye">
                                        </i></a>
                                       <a class="btn btn-info btn-sm mt-4" title=" Edit" href="{{ route('roles.edit', $role) }}"><i class="fas fa-pencil-alt">
                                        </i></a>
                                    <form action="{{ route('roles.destroy', $role) }}" method="post" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm mt-4" title="Delete" type="submit"><i class="fas fa-trash">
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
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
        {{-- <footer class="card-footer is-centered">
            {{ $roles->links() }}
        </footer> --}}
        <style>
        .card-footer {
            justify-content: center;
            align-items: center;
            padding: 0.4em;
        }
    </style>
    </div>
@endsection
