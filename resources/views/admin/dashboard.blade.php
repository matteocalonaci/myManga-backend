@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white d-flex align-items-center">
                        <i class="fa-solid fa-tachometer-alt fa-lg me-2"></i>
                        <h5 class="mb-0">{{ __('Dashboard') }}</h5>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="text-center mb-4">
                            <h3>{{ __("Benvenuto nella tua Dashboard!") }}</h3>
                            <p class="text-muted">{{ __("Hai effettuato l'accesso con successo.") }}</p>
                        </div>

                        <div class="text-center">
                            <a href="{{ route('admin.mangas.index') }}" class="btn btn-success  m-1">
                                <i class="fa-solid fa-book-open fa-lg me-2"></i>
                                {{ __('Visualizza Catalogo Manga') }}
                            </a>
                            <a href="{{ route('admin.editors.index') }}" class="btn btn-warning m-1">
                                <i class="fa-solid fa-book-open fa-lg me-2"></i>
                                {{ __('Visualizza Catalogo Editori') }}
                            </a>
                            <a href="{{ route('admin.authors.index') }}" class="btn btn-danger m-1">
                                <i class="fa-solid fa-book-open fa-lg me-2"></i>
                                {{ __('Visualizza Catalogo Autori') }}
                            </a>
                            <a href="{{ route('admin.genres.index') }}" class="btn btn-info m-1">
                                <i class="fa-solid fa-book-open fa-lg me-2"></i>
                                {{ __('Visualizza Catalogo Generi') }}
                            </a>
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-dark m-1">
                                <i class="fa-solid fa-book-open fa-lg me-2"></i>
                                {{ __('Visualizza Catalogo Categorie') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
