@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column" style="height: calc(100vh - 6rem);">
    <div class="row pb-3 pt-3 flex-grow-0">
        <div class="col-12">
            <h1 class="text-center">Modifica un Ordine</h1>
        </div>
    </div>

    <div class="row justify-content-center flex-grow-1" style="margin-top: 5rem">
        <div class="col-md-8 col-sm-10 col-12">
            <form method="POST" action="{{ route('admin.orders.update', $order->id) }}">
                @csrf
                @method('PUT')

                {{-- Nome Utente --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Nome Utente *</label>
                    <input type="text" class="form-control" id="user_name" name="user_name" value="{{ old('user_name', $order->user_name) }}" required>
                    @error('user_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Cognome Utente --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Cognome Utente *</label>
                    <input type="text" class="form-control" id="user_surname" name="user_surname" value="{{ old('user_surname', $order->user_surname) }}" required>
                    @error('user_surname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Email Utente --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Email Utente *</label>
                    <input type="email" class="form-control" id="user_email" name="user_email" value="{{ old('user_email', $order->user_email) }}" required>
                    @error('user_email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Telefono Utente --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Telefono Utente *</label>
                    <input type="text" class="form-control" id="user_phone" name="user_phone" value="{{ old('user_phone', $order->user_phone) }}" required>
                    @error('user_phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Indirizzo di Spedizione --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Indirizzo di Spedizione *</label>
                    <input type="text" class="form-control" id="shipping_address" name="shipping_address" value="{{ old('shipping_address', $order->shipping_address) }}" required>
                    @error('shipping_address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Città di Spedizione --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Città di Spedizione *</label>
                    <input type="text" class="form-control" id="shipping_city" name="shipping_city" value="{{ old('shipping_city', $order->shipping_city) }}" required>
                    @error('shipping_city')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Stato di Spedizione --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Stato di Spedizione *</label>
                    <input type="text" class="form-control" id="shipping_state" name="shipping_state" value="{{ old('shipping_state', $order->shipping_state) }}" required>
                    @error('shipping_state')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                          {{-- Codice Postale di Spedizione --}}
                          <div class="mb-3">
                            <label class="form-label fw-bold">Codice Postale di Spedizione *</label>
                            <input type="text" class="form-control" id="shipping_postal_code" name="shipping_postal_code" value="{{ old('shipping_postal_code', $order->shipping_postal_code) }}" required>
                            @error('shipping_postal_code')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Metodo di Spedizione --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">Metodo di Spedizione *</label>
                            <input type="text" class="form-control" id="shipping_method" name="shipping_method" value="{{ old('shipping_method', $order->shipping_method) }}" required>
                            @error('shipping_method')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Nonce del Metodo di Pagamento --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nonce del Metodo di Pagamento *</label>
                            <input type="text" class="form-control" id="payment_method_nonce" name="payment_method_nonce" value="{{ old('payment_method_nonce', $order->payment_method_nonce) }}" required>
                            @error('payment_method_nonce')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Importo --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">Importo *</label>
                            <input type="number" step="0.01" class="form-control" id="amount" name="amount" value="{{ old('amount', $order->amount) }}" required>
                            @error('amount')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- ID della Transazione --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">ID della Transazione</label>
                            <input type="text" class="form-control" id="transaction_id" name="transaction_id" value="{{ old('transaction_id', $order->transaction_id) }}">
                            @error('transaction_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-3" style="color: gray">I campi contenenti <b style="color: black">*</b> sono obbligatori </div>

                        <button type="submit" id="submit" class="btn btn-primary mt-3 mb-5">Aggiorna Ordine</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/validate_authors_categories_editors_genres.js') }}"></script>
        @endsection

        <style scoped>
            html, body {
                height: 100%;
                margin: 0;
                overflow: hidden;
            }
        </style>
