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
        overflow-x: hidden; /* Nasconde lo scorrimento orizzontale */
    }


    .container {
        padding: 0; /* Rimuove il padding laterale */
    }

    .table-responsive {
        overflow-x: auto; /* Consente lo scroll orizzontale solo se necessario */
        width: 100%; /* Assicura che la tabella occupi il 100% della larghezza */
    }

    .table {
        width: 100%; /* Imposta la larghezza della tabella al 100% */
        border-collapse: collapse; /* Rimuove gli spazi tra le celle */
    }

    .table-sm th, .table-sm td {
        overflow: hidden; /* Nasconde il contenuto in eccesso */
        text-overflow: ellipsis; /* Mostra i puntini di sospensione se il testo è troppo lungo */
        min-width: 1rem; /* Imposta una larghezza massima per le celle */
        word-wrap: break-word; /* Permette la rottura delle parole */
        overflow-wrap: break-word; /* Permette la rottura delle parole */
        white-space: normal; /* Permette il ritorno a capo */
        padding: 0.5rem; /* Aggiunge padding per migliorare l'aspetto */
    }

    @media (max-width: 576px) {
        .table-sm {
            display: block; /* Rende la tabella un blocco */
            overflow-x: auto; /* Consente lo scroll orizzontale */
            width: 100%; /* Assicura che la tabella occupi il 100% della larghezza */
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
            width: calc(100%); /* Imposta la larghezza delle celle al 100% meno il padding */
            padding: 10px; /* Aggiunge padding alle celle */
            border: none; /* Rimuove i bordi */
            border-bottom: 1px solid #ccc; /* Aggiunge un bordo inferiore */
            box-sizing: border-box; /* Include padding e bordi nella larghezza totale */
            background-color: white; /* Aggiunge uno sfondo bianco per contrasto */
        }

        .table-sm td:before {
            content: attr(data-label); /* Mostra l'etichetta della cella */
            font-weight: bold; /* Rende il testo in grassetto */
            margin-right: 10px; /* Aggiunge margine a destra */
        }
    }
</style>
