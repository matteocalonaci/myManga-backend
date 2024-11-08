@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column" style="height: calc(100vh - 6rem);">
        <div class="row pb-3 pt-3 flex-grow-0">
            <div class="col-12">
                <h1 class="text-center">Modifica un Genere</h1>
            </div>
        </div>

        <div class="row justify-content-center flex-grow-1" style="margin-top: 5rem">
            <div class="col-md-8 col-sm-10 col-12">
                <form method="POST" action="{{ route('admin.genres.update', $genre->id) }}">
                    @csrf
                    @method('PUT')

                    {{-- Nome Editore --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nome del Genere *</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $genre->name) }}" required>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-3" style="color: gray">I campi contenenti <b style="color: black">*</b> sono obbligatori </div>

                    <button type="submit" id="submit" class="btn btn-primary mt-3 mb-5">Aggiorna Genere</button>
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
