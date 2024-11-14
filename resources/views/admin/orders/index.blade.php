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
                            <th>Manga</th>
                            <th>Quantità</th>
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
                                    <ul class="list-unstyled p-2 ">
                                     @foreach ($order->mangas as $manga)
                                            <li>{{ $manga->title }} ({{ $manga->pivot->quantity }})</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td data-label="Quantità">
                                    <ul class="list-unstyled text-center">
                                        @foreach ($order->mangas as $manga)
                                            <li>{{ $manga->pivot->quantity }}</li>
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

                <div class="d-flex flex-wrap justify-content-between align-items-center mt <div class="d-flex flex-wrap justify-content-between align-items-center mt-3">
                    <div class="px-3 px-md-5">
                        Mostra
                        <strong>{{ $orders->firstItem() }}</strong> a
                        <strong>{{ $orders->lastItem() }}</strong> di
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
    </div>
@endsection

<style scoped>
    html, body {
        height: 100%; /* Imposta l'altezza del body e dell'html a 100% */
        margin: 0; /* Rimuove il margine predefinito */
        overflow: auto; /* Permette lo scorrimento della pagina principale se necessario */
    }

    .btn-custom {
        height: 2rem; /* Imposta l'altezza desiderata */
        min-width: 5rem; /* Imposta una larghezza minima per entrambi i bottoni */
        margin-right: 0.5rem;
    }

    .container {
        height: auto; /* Mantieni l'altezza auto per adattarsi al contenuto */
    }

    .table-responsive {
        padding: 0; /* Rimuove il padding per una migliore visualizzazione */
    }

    .table {
        width: 100%; /* Imposta la larghezza della tabella al 100% */
        border-collapse: collapse; /* Rimuove gli spazi tra le celle */
    }

    .table-sm th, .table-sm td {
        white-space: nowrap; /* Impedisce il ritorno a capo del testo nelle celle */
        overflow: hidden; /* Nasconde il contenuto in eccesso */
        text-overflow: ellipsis; /* Mostra i puntini di sospensione se il testo è troppo lungo */
    }

    .btn-add-order {
        width: 20rem;
    }

    @media (max-width: 576px) {
        .table-responsive {
            overflow-x: auto; /* Consente lo scroll orizzontale su schermi piccoli */
        }

        .table-sm {
            width: 100%; /* Imposta la larghezza della tabella al 100% */
            margin: 0 auto; /* Centra la tabella orizzontalmente */
        }

        .table-sm thead {
            display: none; /* Nasconde l'intestazione della tabella per schermi piccoli */
        }

        .table-sm tr {
            display: block; /* Rende ogni riga della tabella un blocco */
            margin-bottom: 20px; /* Aggiunge margine tra le righe */
            border-bottom: 2px solid #ccc; /* Aggiunge una linea di separazione */
        }

        .table-sm td {
            display: block; /* Rende ogni cella un blocco */
            width: 100%; /* Imposta la larghezza delle celle al 100% */
            padding: 10px; /* Aggiunge padding alle celle */
            border: none; /* Rimuove i bordi */
            border-bottom: 1px solid #ccc; /* Aggiunge un bordo inferiore */
        }

        .table-sm td:before {
            content: attr(data-label); /* Mostra l'etichetta della cella */
            font-weight: bold; /* Rende il testo in grassetto */
            margin-right: 10px; /* Aggiunge margine a destra */
        }

        .table-sm tr:not(:last-child) {
            margin-bottom: 20px; /* Aggiunge margine solo alle righe che non sono ultime */
        }

        .btn-custom {
            height: 2rem; /* Imposta l'altezza desiderata */
            min-width: 5rem; /* Imposta una larghezza minima per entrambi i bottoni */
            margin-right: 0;
        }

        .btn-add-order {
            width: 100%;
        }

        .search-bar {
            padding-left: 1rem;
            padding-right: 1rem;
        }
    }
</style>
