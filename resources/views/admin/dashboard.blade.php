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
                            <a href="{{ route('admin.mangas.index') }}" class="btn btn-primary">
                                <i class="fa-solid fa-book-open fa-lg me-2"></i>
                                {{ __('Visualizza Catalogo Manga') }}
                            </a>
                            <a href="{{ route('admin.mangas.create') }}" class="btn btn-success">
                                <i class="fa-solid fa-plus fa-lg me-2"></i>
                                {{ __('Crea Nuovo Manga') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
