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
                  <li class="breadcrumb-item active" aria-current="page">Liste des slides</li>
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
            <h2 class="card-header-title">Listes des slides</h2>
            <form action="{{ route('sliders.create') }}" method="post">
                @csrf
                <a class="btn btn-info mt-3" href="{{ route('sliders.create') }}">Ajouter Slider</a>
            </form>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Titre</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <td><img src="{{ $slider->getFirstMediaUrl('post-image')}}" alt=""style="width:100px"></td>
                                <td><h5 class="mt-4 text-bold">{{ $slider->title }}</strong></h5></td>
                                <td class="text-right">
                                       <a class="btn btn-primary btn-sm mt-4" title="View" href="{{ route('sliders.show', $slider) }}"><i class="fas fa-eye">
                                        </i></a>
                                       <a class="btn btn-info btn-sm mt-4" title=" Edit" href="{{ route('sliders.edit', $slider) }}"><i class="fas fa-pencil-alt">
                                        </i></a>
                                    <form action="{{ route('sliders.destroy', $slider) }}" method="post" style="display: inline-block;">
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
        <footer class="card-footer is-centered">
            {{ $sliders->links() }}
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
