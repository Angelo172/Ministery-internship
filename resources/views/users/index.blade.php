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
                  <li class="breadcrumb-item active" aria-current="page">Liste des utilisateurs</li>
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
            <h2 class="card-header-title">Listes des utilisateurs</h2>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Rôles</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td><h5 class="mt-4 text-bold">{{ $user->name }}</strong></h5></td>
                                <td><h5 class="mt-4 text-bold">{{ $user->email }}</strong></h5></td>
                                <td>
                                @foreach($user->roles as $role)
                                    <span class="badge bg-info">{{ $role->name }}</span>
                                @endforeach
                                </td>
                                <td class="text-right">
                                       <a class="btn btn-primary btn-sm mt-4" title="View" href="{{ route('users.show', $user) }}"><i class="fas fa-eye">
                                        </i></a>
                                       <a class="btn btn-info btn-sm mt-4" title=" Edit" href="{{ route('users.edit', $user) }}"><i class="fas fa-pencil-alt">
                                        </i></a>
                                    <form action="{{ route('users.destroy', $user) }}" method="post" style="display: inline-block;">
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
            {{ $users->links() }}
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
