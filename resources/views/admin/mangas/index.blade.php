@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: rgb(250, 0, 83)">
        <h1 class="text-center p-4">Catalogo Manga</h1>
        <div class="table-responsive p-4">
            @if ($mangas->count() > 0)
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Immagini</th>
                            <th>Nome</th>
                            <th>Prezzo</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mangas as $manga)
                            <tr>
                                <td data-label="Immagini">
                                    @if (Str::startsWith($manga->cover_image, 'http'))
                                        <img src="{{ $manga->cover_image }}" alt="" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                                    @else
                                        <img src="{{ asset('storage/' . $manga->cover_image) }}" alt="" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                                    @endif
                                </td>
                                <td data-label="Nome">{{ $manga->title }}</td>
                                <td data-label="Prezzo">€{{ $manga->price }}</td>
                                <td data-label="Azioni">
                                    <div class="d-flex justify-content-around">
                                        <a href="{{ route('admin.mangas.edit', $manga->id) }}" class="btn btn-warning btn-sm" style="height: 2rem;">Modifica</a>
                                        <form action="{{ route('admin.mangas.destroy', $manga->id) }}" method="POST" class="d-inline"
                                            onsubmit="event.preventDefault(); Swal.fire({
                                                title: 'Elimina il manga?',
                                                text: 'Sei sicuro di eliminare il manga {{ $manga->title }}?',
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonText: 'Elimina',
                                                cancelButtonText: 'Annulla',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    this.submit(); // Submit the form if the user confirms
                                                }
                                            })">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                                      </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Controlli di paginazione -->
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div class="px-5">
                            Mostra
                            <strong>{{ $mangas->firstItem() }}</strong> a
                            <strong>{{ $mangas->lastItem() }}</strong> di
                            <strong>{{ $mangas->total() }}</strong> risultati
                        </div>
                        <div>
                            {{ $mangas->links('vendor.pagination.bootstrap-4') }} <!-- Specifica il tema Bootstrap -->
                        </div>
                    </div>
            @else
                <p class="text-center">Il menù attualmente è vuoto.</p>
            @endif
            <button class="btn btn-primary" type="button" onclick="window.location.href='{{ route('admin.mangas.create') }}'">
                Aggiungi un nuovo manga
            </button>
        </div>
    </div>
@endsection

<style scoped>
    @media (max-width: 425px) {
        .table-responsive {
            width: 100vw; /* make the container full-screen width */
            height: 100vh; /* make the container full-screen height */
            display: flex;
            justify-content: center;
            align-items: center; /* center the cards vertically and horizontally */
        }

        .table-sm {
            width: 80%; /* adjust the width of the card to your liking */
            margin: 0 auto; /* center the card horizontally */
        }
        .table-sm thead {
            display: none;
        }
        .table-sm tr {
            display: block;
            margin-bottom: 20px;
            border-bottom: 2px solid #ccc;
        }
        .table-sm td {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-bottom: 1px solid #ccc;
        }
        .table-sm td:before {
            content: attr(data-label);
            font-weight: bold;
            margin-right: 10px;
        }
        .table-sm tr:not (:last-child) {
            margin-bottom: 20px;
        }
    }
</style>
