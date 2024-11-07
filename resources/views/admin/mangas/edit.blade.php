@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pb-5 pt-3">
            <div class="col-12">
                <h1 class="text-center">Modifica un Manga</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-10 col-12">
                <form method="POST" action="{{ route('admin.mangas.update', $manga->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- Titolo --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Titolo del Manga *</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $manga->title) }}" required>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Immagine di Copertura --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Immagine: *</label>
                        <input type="file" class="form-control" id="cover_image" name="cover_image">
                        @error('cover_image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <small>Immagine attuale:</small><br>
                        @if (Str::startsWith($manga->cover_image, 'http'))
                            <img src="{{ $manga->cover_image }}" alt="" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                        @else
                            <img src="{{ asset('storage/' . $manga->cover_image) }}" alt="" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                        @endif
                    </div>

                    {{-- Descrizione --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Descrizione *</label>
                        <textarea class="form-control" id="description" name="description" required>{{ old('description', $manga->description) }}</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Prezzo --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Prezzo *</label>
                        <input type="number" step="0.01" id="price" class="form-control" name="price" value="{{ old('price', $manga->price) }}" required>
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Disponibilità --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Disponibilità *</label>
                        <select class="form-control" id="availability" name="availability" required>
                            <option value="1" @if (old('availability', $manga->availability) == 1) selected @endif>Disponibile</option>
                            <option value="0" @if (old('availability', $manga->availability) == 0) selected @endif>Non Disponibile</option>
                        </select>
                        @error('availability')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Volume --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Volume *</label>
                        <input type="number" class="form-control" id="volume" name="volume" value="{{ old('volume', $manga->volume) }}" required>
                        @error('volume')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Anno --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Anno *</label>
                        <input type="number" class="form-control" id="year" name="year" value="{{ old('year', $manga->year) }}" required>
                        @error('year')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- In Corso --}}
                    <div class="mb-3">
                        <label class=" form-label fw-bold">In Corso *</label>
                        <select class="form-control" id="in_progress" name="in_progress" required>
                            <option value="1" @if (old('in_progress', $manga->in_progress) == 1) selected @endif>Sì</option>
                            <option value="0" @if (old('in_progress', $manga->in_progress) == 0) selected @endif>No</option>
                        </select>
                        @error('in_progress')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Autore --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Autore *</label>
                        <select class="form-control select2" id="author_id" name="author_id" required>
                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}" @if (old('author_id', $manga->author_id) == $author->id) selected @endif>{{ $author->name }}</option>
                            @endforeach
                        </select>
                        @error('author_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Categoria --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Categoria *</label>
                        <select class="form-control select2" id="category_id" name="category_id" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if (old('category_id', $manga->category_id) == $category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Editore --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Editore *</label>
                        <select class="form-control select2" id="editor_id" name="editor_id" required>
                            @foreach ($editors as $editor)
                                <option value="{{ $editor->id }}" @if (old('editor_id', $manga->editor_id) == $editor->id) selected @endif>{{ $editor->name }}</option>
                            @endforeach
                        </select>
                        @error('editor_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Generi --}}
                    <div class="form-group">
                        <label for="genres" id="genres" class="form-label fw-bold">Generi: *</label>
                        <div class="check-box d-flex flex-wrap" id="genres-checkbox">
                            @foreach ($genres as $genre)
                                <span class="col-md-3 col-sm-4 col-6">
                                    <input type="checkbox" name="genres[]" value="{{ $genre->id }}"
                                        @if (in_array($genre->id, old('genres', $manga->genres->pluck('id')->toArray())) ) checked @endif>
                                    <label>{{ $genre->name }}</label>
                                </span>
                            @endforeach
                        </div>
                        @error('genres')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-3" style="color: gray">I campi contenenti <b style="color: black">*</b> sono obbligatori </div>

                    <button type="submit" id="submit" class="btn btn-primary mt-3 mb-5">Aggiorna Manga</button>
                </form>
            </div>
        </div>
    </div>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="{{ asset('js/search.js')}}"></script>
    <script src="{{ asset('js/validate_mangas_edit.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endsection
