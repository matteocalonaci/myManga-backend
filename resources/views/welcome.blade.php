@extends('layouts.app')

@section('content')
<div class="jumbotron full-height bg-light text-dark">
    <div class="text-center">
        <h2 class="display-4">Benvenuto nel Mondo dei Manga!</h2>
        <p class="lead">Esplora una vasta collezione di manga, dai classici ai più recenti.</p>
        <a href="{{ route('admin.mangas.index') }}" class="btn btn-primary btn-lg">Inizia a esplorare</a>
    </div>
</div>

<div class="container mt-5">
    <h3 class="text-center">Le Nostre Ultime Novità</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="https://mangayo.it/41589-large_default/oshi-no-ko-15-my-star.jpg" class="card-img-top" alt="Manga 1">
                <div class="card-body">
                    <h5 class="card-title">Oshi No Ko 15 - My Star</h5>
                    <p class="card-text description">La sedicenne Ai Hoshino è una bellissima idol, molto amata dai suoi fan. Ai sembra la personificazione della ragazza perfetta, ma non è tutto oro ciò che luccica...</p>
                    <a href="http://localhost:8000/admin/mangas/15" class="btn btn-primary btn-sm">Scopri di più</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="https://mangayo.it/41156-large_default/hirayasumi-7.jpg" class="card-img-top" alt="Manga 2">
                <div class="card-body">
                    <h5 class="card-title">Hirayasumi 7</h5>
                    <p class="card-text description">Hiroto Ikuta, ventinove anni, non ha un lavoro fisso, vita amorosa, né alcuna preoccupazione per il futuro...</p>
                    <a href="http://localhost:8000/admin/mangas/22" class="btn btn-primary btn-sm">Scopri di più</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="https://mangayo.it/22716-large_default/quartieri-lontani.jpg" class="card-img-top" alt="Manga 3">
                <div class="card-body">
                    <h5 class="card-title">Quartieri Lontani</h5>
                    <p class="card-text description">Kazuhiro, un padre di famiglia 42enne, e il giovane motociclista Takuya si scontrano in un incidente stradale in una notte d’estate...</p>
                    <a href="http://localhost:8000/admin/mangas/75" class="btn btn-primary btn-sm">Scopri di più</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const maxLength = 100; // Imposta il numero massimo di caratteri
    const descriptionElements = document.querySelectorAll('.description');

    descriptionElements.forEach(element => {
        if (element.innerText.length > maxLength) {
            element.innerText = element.innerText.slice(0, maxLength) + '...';
        }
    });
</script>
@endsection


<style scoped>
    .full-height {
        height: calc(100vh - 6rem);
        display: flex;
        justify-content: center;
        align-items: center;
       background-size: cover;
        background-position: center;
        color: white; /* Testo bianco per contrasto */
    }
</style>
