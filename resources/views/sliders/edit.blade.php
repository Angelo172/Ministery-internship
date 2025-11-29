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
                  <li class="breadcrumb-item active" aria-current="page">Modification d'un slide</li>
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
                    <h3 class="card-title">Modifir d'un slide</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('sliders.update', $slider) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $slider->title) }}" required>
                    </div>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                            </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control select2bs4" name="status" id="" style="width: 100%;"required>
                            <option value="draft" @if(old('status', $slider->status) == 'draft') selected @endif>Brouillon</option>
                            <option value="actived" @if(old('status', $slider->status) == 'actived') selected @endif>Actif</option>
                            <option value="archived" @if(old('status', $slider->status) == 'archived') selected @endif>Archivé</option>
                        </select>
                        @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $slider->date) }}" required>
                    </div>
                    @error('date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                        </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="file">Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file" name="image">
                                <label class="custom-file-label" for="file">Choisir image</label>
                            </div>
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="input-group-append">
                               <span class="input-group-text">Téléchager</span>
                            </div>
                        </div>
                         @if($slider->hasMedia('post-image'))
                            <img src="{{$slider->getFirstMediaUrl('post-image')}}" alt="Image actuelle" width="120" class="mt-2">
                        @endif
                    </div>
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

