@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center p-4">{{ $manga->title }}</h1>
        <div class="table-responsive p-4">
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Immagini</th>
                        <th>Ingredienti</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Nome">{{ $manga->title }}</td>
                        <td data-label="Immagini">
                            @if (Str::startsWith($manga->cover_image, 'http'))
                                <img src="{{ $manga->cover_image }}" alt="" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                            @else
                                <img src="{{ asset('storage/' . $manga->cover_image) }}" alt="" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                            @endif
                        </td>
                        <td data-label="Ingredienti">{!! preg_replace('/\n{2,}/', '</p><p>', nl2br(e($manga->description))) !!}</td>
                        <td data-label="Azioni" class="d-flex justify-content-around">
                            <form action="{{ route('admin.mangas.edit', $manga->id) }}" method="GET" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm">Modifica</button>
                            </form>
                            <form action="{{ route('admin.mangas.destroy', $manga->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Sei sicuro di eliminare questo piatto?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

<style scoped>
    @media (max-width: 425px) {
        .table-sm {
            display: block;
            width: 100%;
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
        .table-sm tr:not(:last-child) {
            margin-bottom: 30px;
        }
        .table-sm td img {
            width: 50%;
            height: auto;
            margin: 10px auto;
            display: block;
        }
    }

    @media (max-width: 992px) and (min-width: 425px) {
    .table-sm td:last-child {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .table-sm td:last-child form {
        margin-bottom: 10px;
    }
}
</style>
