@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: rgb(250, 0, 83); min-height: calc(100vh - 6.7rem);">
        <h1 class="text-center pt-4">Elenco Ordini</h1>
        <div class="d-flex flex-wrap justify-content-end align-items-center p-4">
            <button class="btn-add-order btn btn-primary mt-3" type="button" onclick="window.location.href='{{ route('admin.orders.create') }}'">
                Aggiungi un nuovo ordine
            </button>
        </div>
        <div class="search-bar mb-1 mt-2 d-flex justify-content-end mx-2 mx-md-4">
            <form method="GET" action="{{ route('admin.orders.index') }}" class="w-100">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Cerca un ordine..." value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" style="background-color: white; color:black" type="submit">Cerca</button>
                </div>
            </form>
        </div>

        <div class="table-responsive p-4">
            @if ($orders->count() > 0)
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nome Cliente</th>
                            <th>Indirizzo Consegna</th>
                            <th>Data Ordine</th>
                            <th>Totale</th>
                            <th>Manga e quantità</th>
                            <th>Consegna</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>
                    <tbody id="orderTableBody">
                        @foreach ($orders as $order)
                            <tr>
                                <td data-label="Nome Cliente">{{ $order->client_name }}</td>
                                <td data-label="Indirizzo Consegna">{{ $order->client_address }}</td>
                                <td data-label="Data Ordine">{{ $order->order_date }}</td>
                                <td data-label="Totale">€{{ $order->total_price }}</td>
                                <td data-label="Manga">
                                    <ul class="list-unstyled">
                                     @foreach ($order->mangas as $manga)
                                            <li>{{ $manga->title }} - ({{ $manga->pivot->quantity }})</li>
                                        @endforeach
                                    </ul>
                                </td>

                                <td data-label="Consegna">{{ $order->status }}</td>

                                <td data-label="Azioni">
                                    <div class="d-flex flex-column flex-sm-row justify-content-between">
                                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" class="flex-grow-1"
                                            onsubmit="event.preventDefault(); Swal.fire({
                                                title: 'Elimina l\'ordine?',
                                                text: 'Sei sicuro di eliminare l\'ordine di {{ $order->client_name }}?',
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonText: 'Elimina',
                                                cancelButtonText: 'Annulla',
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    this.submit();
                                                }
                                            })">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger w-100 btn-custom"><i class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="d-flex flex-wrap justify-content-between align-items-center mt-3">
                    <div class="px-3 px-md-5">
                        Mostra
                        <strong>{{ $orders->firstItem() }}</strong> a
                        <strong>{{ $orders->lastItem() }}</ strong> di
                        <strong>{{ $orders->total() }}</strong> risultati
                    </div>
                    <div class="mt-2 mt-md-0">
                        <div style="white-space: nowrap;">
                            {{ $orders->links('vendor.pagination.bootstrap-4') }}
                        </div>
                    </div>
                </div>

            @else
                <p class="text-center">Non ci sono ordini disponibili.</p>
            @endif
        </div>
    </div>
@endsection

<style scoped>
    html, body {
        height: 100%;
        margin: 0;
        overflow-x: hidden;
    }


    .container {
        padding: 0;
    }

    .table-responsive {
        overflow-x: auto;
        width: 100%;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table-sm th, .table-sm td {
        overflow: hidden;
        text-overflow: ellipsis;
        min-width: 1rem;
        word-wrap: break-word;
        overflow-wrap: break-word;
        white-space: normal;
        padding: 0.5rem;
    }

    @media (max-width: 576px) {
        .table-sm {
            display: block;
            width: 100%;
        }

        .table-sm thead {
            display: none;
        }

        .table-sm tr {
            display: block;
            margin-bottom: 1.5rem; /
            border-bottom: 0.01rem solid #ccc;
        }

        .table-sm td {
            display: block;
            width: calc(100%);
            padding: 1rem;
            border: none;
            border-bottom: 0.01rem solid #ccc;
            box-sizing: border-box;
            background-color: white;
        }

        .table-sm td:before {
            content: attr(data-label);
            font-weight: bold;
            margin-right: 1rem;
        }
    }
</style>
