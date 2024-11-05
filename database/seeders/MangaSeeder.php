<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Manga;



class MangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $mangas = [

        [
            'title' => 'Oshi no Ko 1 ',
            'author' => 'Akasaka Aka', // Autore del manga
            'description' => 'Oshi no Ko è un manga che esplora il mondo dell\'intrattenimento e dei fan, seguendo le vite di un idol e dei suoi fan. La storia affronta temi di amore, ambizione e le complessità dell\'industria dell\'intrattenimento.',
            'cover_image' => 'https://www.animeclick.it/immagini/manga/Oshi_no_Ko/cover/Oshi_no_Ko-cover.jpg',
            'price' => 9.99, // Prezzo in formato decimal
            'availability' => true, // Disponibilità (true o false)
            'year' => '2020', // Anno di pubblicazione
            'genre' => [],
            'categorty' => [],
        ],
        [
            'title' => 'Attack on Titan',
            'author' => 'Hajime Isayama',
            'description' => 'In un mondo dove l\'umanità vive in città fortificate per proteggersi dai giganti, un gruppo di giovani combatte per la libertà.',
            'cover_image' => 'https://example.com/path/to/attack_on_titan_cover.jpg',
            'price' => 12.99,
            'availability' => true,
            'year' => '2009',
            'genre' => [],
        ],
        [
            'title' => 'My Hero Academia',
            'author' => 'Kohei Horikoshi',
            'description' => 'In un mondo dove la maggior parte delle persone ha superpoteri, un ragazzo senza poteri sogna di diventare un eroe.',
            'cover_image' => 'https://example.com/path/to/my_hero_academia_cover.jpg',
            'price' => 10.99,
            'availability' => true,
            'year' => '2014',
            'genre' => [],
        ],
        [
            'title' => 'Demon Slayer: Kimetsu no Yaiba',
            'author' => 'Koyoharu Gotouge',
            'description' => 'Un giovane ragazzo diventa un cacciatore di demoni per salvare sua sorella e vendicare la sua famiglia.',
            'cover_image' => 'https://example.com/path/to/demon_slayer_cover.jpg',
            'price' => 11.99,
            'availability' => true,
            'year' => '2016',
            'genre' => [],
        ],
        [
            'title' => 'One Piece',
            'author' => 'Eiichiro Oda',
            'description' => 'Le avventure di Monkey D. Luffy e il suo equipaggio nella loro ricerca del tesoro leggendario chiamato "One Piece".',
            'cover_image' => 'https://example.com/path/to/one_piece_cover.jpg',
            'price' => 8.99,
            'availability' => true,
            'year' => '1997',
            'genre' => [],
        ],
        [
            'title' => 'Death Note',
            'author' => 'Tsugumi Ohba',
            'description' => 'Un ragazzo trova un quaderno che gli permette di uccidere chiunque scriva il nome all\'interno. La sua vita cambia radicalmente.',
            'cover_image' => 'https://example.com/path/to/death_note_cover.jpg',
            'price' => 10.50,
            'availability' => true,
            'year' => '2003',
            'genre' => [],
        ],
        [
            'title' => 'Naruto',
            'author' => 'Masashi Kishimoto',
            'description' => 'Le avventure di Naruto Uzumaki, un giovane ninja che sogna di diventare Hokage e guadagnarsi il rispetto del suo villaggio.',
            'cover_image' => 'https://example.com/path/to/naruto_cover.jpg',
            'price' => 9.50,
            'availability' => true,
            'year' => '1999',
            'genre' => [],
        ],
        [
            'title' => 'Tokyo Ghoul',
            'author' => 'Sui Ishida',
            'description' => 'Un giovane studente diventa un ghoul dopo un incontro fatale e deve affrontare la sua nuova vita e identità.',
            'cover_image' => 'https://example.com/path/to/tokyo_ghoul_cover.jpg',
            'price' => 11.50,
            'availability' => true,
            'year' => '2011',
            'genre' => [],
        ],
        [
            'title' => 'Haikyuu!!',
            'author' => 'Haruichi Furudate',
            'description' => 'Un ragazzo si unisce al club di pallavolo della sua scuola e lavora per diventare il miglior giocatore del Giappone.',
            'cover_image' => 'https://example.com/path/to/haikyuu_cover.jpg',
            'price' => 8.50,
            'availability' => true,
            'year' => '2012',
            'genre' => [],
        ],
        [
            'title' => 'Blue Exorcist',
            'author' => 'Kazue Kato',
            'description' => 'Il figlio di Satana decide di diventare un esorcista per combattere i demoni e trovare la sua identità.',
            'cover_image' => 'https://example.com/path/to/blue_exorcist_cover.jpg',
            'price' => 10.99,
            'availability' => true,
            'year' => '2009',
            'genre' => [],
        ],

    ];

    foreach ($mangas as $data) {

        $manga = new Manga([

            'title' => $data['title'],

            'author' => $data['author'],

            'description' => $data['description'],

            'cover_image' => $data['cover_image'],

            'price' => $data['price'],

            'availability' => $data['availability'],

            'year' => $data['year'],

        ]);


        $manga->slug = Str::slug($data['title']); // Compila lo slug


        $manga->save();


        $manga->genre()->attach($data['genre']);

        $manga->save();


    }
}
}
