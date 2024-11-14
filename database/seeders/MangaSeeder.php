<?php

namespace Database\Seeders;

use App\Models\Editor;
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

        // $editor = Editor::all();

        $mangas = [
            //OSHI NO KO
            [
                'title' => 'Oshi No Ko 1 - My Star',
                'author_id' => 5, // Autore del manga
                'description' => "Goro Honda è un ginecologo che vive in un'area rurale ed è un grande fan di Ai. Per questo non può che rimanere a bocca aperta quando la giovane idol arriva alla porta del suo studio con il suo tutore, incinta di due gemelli. Goro aiuta la giovane ad avere un parto sicuro. Tuttavia, l'incontro con una misteriosa figura causa l'improvvisa morte del dottore.
                O almeno è quello che Goro pensava. Dopo essersi risvegliato in grembo alla sua amata idol, Goro scopre di essere rinato come uno dei figli di Ai Hoshino!
                Goro inizierà a scoprire le verità che si celano all'interno dell'industria dell'intrattenimento, dove non sempre avere talento basta per ottenere successo. Riuscirà Goro a proteggere l'amato sorriso di Ai con l'aiuto di un'inaspettata alleata?",
                'cover_image' => 'https://mangayo.it/25841-large_default/oshi-no-ko-1-my-star.jpg',
                'volume' => 1,
                'price' => 6.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2020', // Anno di pubblicazione
                'genre' => [4, 7, 25, 26],
                'category_id' => 3,
                'editor_id' => 1


            ],
            [
                'title' => 'Oshi No Ko 2 - My Star',
                'author_id' => 5, // Autore del manga
                'description' => "La sedicenne Ai Hoshino è una talentuosa e bellissima idol, molto amata dai suoi fan. A prima vista, Ai sembra la personificazione della ragazza perfetta, ma non è tutto oro ciò che luccica.

                                    Goro Honda è un ginecologo che vive in un'area rurale ed è un grande fan di Ai. Per questo non può che rimanere a bocca aperta quando la giovane idol arriva alla porta del suo studio con il suo tutore, incinta di due gemelli. Goro aiuta la giovane ad avere un parto sicuro. Tuttavia, l'incontro con una misteriosa figura causa l'improvvisa morte del dottore.

                                    O almeno è quello che Goro pensava. Dopo essersi risvegliato in grembo alla sua amata idol, Goro scopre di essere rinato come uno dei figli di Ai Hoshino!

                                    Goro inizierà a scoprire le verità che si celano all'interno dell'industria dell'intrattenimento, dove non sempre avere talento basta per ottenere successo. Riuscirà Goro a proteggere l'amato sorriso di Ai con l'aiuto di un'inaspettata alleata?",

                'cover_image' => 'https://mangayo.it/11769-large_default/oshi-no-ko-2-my-star.jpg',
                'volume' => 2,
                'price' => 6.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2020', // Anno di pubblicazione
                'genre' => [4, 7, 25, 26],
                'category_id' => 3,
                'editor_id' => 1



            ],

            [
                'title' => 'Oshi No Ko 3 - My Star',
                'author_id' => 5, // Autore del manga
                'description' => "La sedicenne Ai Hoshino è una talentuosa e bellissima idol, molto amata dai suoi fan. A prima vista, Ai sembra la personificazione della ragazza perfetta, ma non è tutto oro ciò che luccica.

                                    Goro Honda è un ginecologo che vive in un'area rurale ed è un grande fan di Ai. Per questo non può che rimanere a bocca aperta quando la giovane idol arriva alla porta del suo studio con il suo tutore, incinta di due gemelli. Goro aiuta la giovane ad avere un parto sicuro. Tuttavia, l'incontro con una misteriosa figura causa l'improvvisa morte del dottore.

                                    O almeno è quello che Goro pensava. Dopo essersi risvegliato in grembo alla sua amata idol, Goro scopre di essere rinato come uno dei figli di Ai Hoshino!

                                    Goro inizierà a scoprire le verità che si celano all'interno dell'industria dell'intrattenimento, dove non sempre avere talento basta per ottenere successo. Riuscirà Goro a proteggere l'amato sorriso di Ai con l'aiuto di un'inaspettata alleata?",

                'cover_image' => 'https://mangayo.it/13546-large_default/oshi-no-ko-3-my-star.jpg',
                'volume' => 3,
                'price' => 6.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2020', // Anno di pubblicazione
                'genre' => [4, 7, 25, 26],
                'category_id' => 3,
                'editor_id' => 1



            ],

            [
                'title' => 'Oshi No Ko 4 - My Star',
                'author_id' => 5, // Autore del manga
                'description' => "La sedicenne Ai Hoshino è una talentuosa e bellissima idol, molto amata dai suoi fan. A prima vista, Ai sembra la personificazione della ragazza perfetta, ma non è tutto oro ciò che luccica.

                                    Goro Honda è un ginecologo che vive in un'area rurale ed è un grande fan di Ai. Per questo non può che rimanere a bocca aperta quando la giovane idol arriva alla porta del suo studio con il suo tutore, incinta di due gemelli. Goro aiuta la giovane ad avere un parto sicuro. Tuttavia, l'incontro con una misteriosa figura causa l'improvvisa morte del dottore.

                                    O almeno è quello che Goro pensava. Dopo essersi risvegliato in grembo alla sua amata idol, Goro scopre di essere rinato come uno dei figli di Ai Hoshino!

                                    Goro inizierà a scoprire le verità che si celano all'interno dell'industria dell'intrattenimento, dove non sempre avere talento basta per ottenere successo. Riuscirà Goro a proteggere l'amato sorriso di Ai con l'aiuto di un'inaspettata alleata?",

                'cover_image' => 'https://mangayo.it/15247-large_default/oshi-no-ko-4-my-star.jpg',
                'volume' => 4,
                'price' => 6.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2020', // Anno di pubblicazione
                'genre' => [4, 7, 25, 26],
                'category_id' => 3,
                'editor_id' => 1



            ],

            [
                'title' => 'Oshi No Ko 5 - My Star',
                'author_id' => 5, // Autore del manga
                'description' => "La sedicenne Ai Hoshino è una talentuosa e bellissima idol, molto amata dai suoi fan. A prima vista, Ai sembra la personificazione della ragazza perfetta, ma non è tutto oro ciò che luccica.

                                    Goro Honda è un ginecologo che vive in un'area rurale ed è un grande fan di Ai. Per questo non può che rimanere a bocca aperta quando la giovane idol arriva alla porta del suo studio con il suo tutore, incinta di due gemelli. Goro aiuta la giovane ad avere un parto sicuro. Tuttavia, l'incontro con una misteriosa figura causa l'improvvisa morte del dottore.

                                    O almeno è quello che Goro pensava. Dopo essersi risvegliato in grembo alla sua amata idol, Goro scopre di essere rinato come uno dei figli di Ai Hoshino!

                                    Goro inizierà a scoprire le verità che si celano all'interno dell'industria dell'intrattenimento, dove non sempre avere talento basta per ottenere successo. Riuscirà Goro a proteggere l'amato sorriso di Ai con l'aiuto di un'inaspettata alleata?",

                'cover_image' => 'https://mangayo.it/17073-large_default/oshi-no-ko-5-my-star.jpg',
                'volume' => 5,
                'price' => 6.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)

                'year' => '2020', // Anno di pubblicazione
                'genre' => [4, 7, 25, 26],
                'category_id' => 3,
                'editor_id' => 1



            ],

            [
                'title' => 'Oshi No Ko 6 - My Star',
                'author_id' => 5, // Autore del manga
                'description' => "La sedicenne Ai Hoshino è una talentuosa e bellissima idol, molto amata dai suoi fan. A prima vista, Ai sembra la personificazione della ragazza perfetta, ma non è tutto oro ciò che luccica.

                                    Goro Honda è un ginecologo che vive in un'area rurale ed è un grande fan di Ai. Per questo non può che rimanere a bocca aperta quando la giovane idol arriva alla porta del suo studio con il suo tutore, incinta di due gemelli. Goro aiuta la giovane ad avere un parto sicuro. Tuttavia, l'incontro con una misteriosa figura causa l'improvvisa morte del dottore.

                                    O almeno è quello che Goro pensava. Dopo essersi risvegliato in grembo alla sua amata idol, Goro scopre di essere rinato come uno dei figli di Ai Hoshino!

                                    Goro inizierà a scoprire le verità che si celano all'interno dell'industria dell'intrattenimento, dove non sempre avere talento basta per ottenere successo. Riuscirà Goro a proteggere l'amato sorriso di Ai con l'aiuto di un'inaspettata alleata?",

                'cover_image' => 'https://mangayo.it/19814-large_default/oshi-no-ko-6-my-star.jpg',
                'volume' => 6,
                'price' => 6.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2020', // Anno di pubblicazione
                'genre' => [4, 7, 25, 26],
                'category_id' => 3,
                'editor_id' => 1



            ],

            [
                'title' => 'Oshi No Ko 7 - My Star',
                'author_id' => 5, // Autore del manga
                'description' => "La sedicenne Ai Hoshino è una talentuosa e bellissima idol, molto amata dai suoi fan. A prima vista, Ai sembra la personificazione della ragazza perfetta, ma non è tutto oro ciò che luccica.

                                    Goro Honda è un ginecologo che vive in un'area rurale ed è un grande fan di Ai. Per questo non può che rimanere a bocca aperta quando la giovane idol arriva alla porta del suo studio con il suo tutore, incinta di due gemelli. Goro aiuta la giovane ad avere un parto sicuro. Tuttavia, l'incontro con una misteriosa figura causa l'improvvisa morte del dottore.

                                    O almeno è quello che Goro pensava. Dopo essersi risvegliato in grembo alla sua amata idol, Goro scopre di essere rinato come uno dei figli di Ai Hoshino!

                                    Goro inizierà a scoprire le verità che si celano all'interno dell'industria dell'intrattenimento, dove non sempre avere talento basta per ottenere successo. Riuscirà Goro a proteggere l'amato sorriso di Ai con l'aiuto di un'inaspettata alleata?",

                'cover_image' => 'https://mangayo.it/22707-large_default/oshi-no-ko-7-my-star.jpg',
                'volume' => 7,
                'price' => 6.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2020', // Anno di pubblicazione
                'genre' => [4, 7, 25, 26],
                'category_id' => 3,
                'editor_id' => 1



            ],

            [
                'title' => 'Oshi No Ko 8 - My Star',
                'author_id' => 5, // Autore del manga
                'description' => "La sedicenne Ai Hoshino è una talentuosa e bellissima idol, molto amata dai suoi fan. A prima vista, Ai sembra la personificazione della ragazza perfetta, ma non è tutto oro ciò che luccica.

                                    Goro Honda è un ginecologo che vive in un'area rurale ed è un grande fan di Ai. Per questo non può che rimanere a bocca aperta quando la giovane idol arriva alla porta del suo studio con il suo tutore, incinta di due gemelli. Goro aiuta la giovane ad avere un parto sicuro. Tuttavia, l'incontro con una misteriosa figura causa l'improvvisa morte del dottore.

                                    O almeno è quello che Goro pensava. Dopo essersi risvegliato in grembo alla sua amata idol, Goro scopre di essere rinato come uno dei figli di Ai Hoshino!

                                    Goro inizierà a scoprire le verità che si celano all'interno dell'industria dell'intrattenimento, dove non sempre avere talento basta per ottenere successo. Riuscirà Goro a proteggere l'amato sorriso di Ai con l'aiuto di un'inaspettata alleata?",

                'cover_image' => 'https://mangayo.it/26050-large_default/oshi-no-ko-8-my-star.jpg',
                'volume' => 8,
                'price' => 6.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2020', // Anno di pubblicazione
                'genre' => [4, 7, 25, 26],
                'category_id' => 3,
                'editor_id' => 1



            ],

            [
                'title' => 'Oshi No Ko 9 - My Star',
                'author_id' => 5, // Autore del manga
                'description' => "La sedicenne Ai Hoshino è una talentuosa e bellissima idol, molto amata dai suoi fan. A prima vista, Ai sembra la personificazione della ragazza perfetta, ma non è tutto oro ciò che luccica.

                                    Goro Honda è un ginecologo che vive in un'area rurale ed è un grande fan di Ai. Per questo non può che rimanere a bocca aperta quando la giovane idol arriva alla porta del suo studio con il suo tutore, incinta di due gemelli. Goro aiuta la giovane ad avere un parto sicuro. Tuttavia, l'incontro con una misteriosa figura causa l'improvvisa morte del dottore.

                                    O almeno è quello che Goro pensava. Dopo essersi risvegliato in grembo alla sua amata idol, Goro scopre di essere rinato come uno dei figli di Ai Hoshino!

                                    Goro inizierà a scoprire le verità che si celano all'interno dell'industria dell'intrattenimento, dove non sempre avere talento basta per ottenere successo. Riuscirà Goro a proteggere l'amato sorriso di Ai con l'aiuto di un'inaspettata alleata?",

                'cover_image' => 'https://mangayo.it/27171-large_default/oshi-no-ko-9-my-star.jpg',
                'volume' => 9,
                'price' => 6.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2020', // Anno di pubblicazione
                'genre' => [4, 7, 25, 26],
                'category_id' => 3,
                'editor_id' => 1



            ],

            [
                'title' => 'Oshi No Ko 10 - My Star',
                'author_id' => 5, // Autore del manga
                'description' => "La sedicenne Ai Hoshino è una talentuosa e bellissima idol, molto amata dai suoi fan. A prima vista, Ai sembra la personificazione della ragazza perfetta, ma non è tutto oro ciò che luccica.

                                    Goro Honda è un ginecologo che vive in un'area rurale ed è un grande fan di Ai. Per questo non può che rimanere a bocca aperta quando la giovane idol arriva alla porta del suo studio con il suo tutore, incinta di due gemelli. Goro aiuta la giovane ad avere un parto sicuro. Tuttavia, l'incontro con una misteriosa figura causa l'improvvisa morte del dottore.

                                    O almeno è quello che Goro pensava. Dopo essersi risvegliato in grembo alla sua amata idol, Goro scopre di essere rinato come uno dei figli di Ai Hoshino!

                                    Goro inizierà a scoprire le verità che si celano all'interno dell'industria dell'intrattenimento, dove non sempre avere talento basta per ottenere successo. Riuscirà Goro a proteggere l'amato sorriso di Ai con l'aiuto di un'inaspettata alleata?",

                'cover_image' => 'https://mangayo.it/29186-large_default/oshi-no-ko-10-my-star.jpg',
                'volume' => 10,
                'price' => 6.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2020', // Anno di pubblicazione
                'genre' => [4, 7, 25, 26],
                'category_id' => 3,
                'editor_id' => 1



            ],

            [
                'title' => 'Oshi No Ko 11 - My Star',
                'author_id' => 5, // Autore del manga
                'description' => "La sedicenne Ai Hoshino è una talentuosa e bellissima idol, molto amata dai suoi fan. A prima vista, Ai sembra la personificazione della ragazza perfetta, ma non è tutto oro ciò che luccica.

                                    Goro Honda è un ginecologo che vive in un'area rurale ed è un grande fan di Ai. Per questo non può che rimanere a bocca aperta quando la giovane idol arriva alla porta del suo studio con il suo tutore, incinta di due gemelli. Goro aiuta la giovane ad avere un parto sicuro. Tuttavia, l'incontro con una misteriosa figura causa l'improvvisa morte del dottore.

                                    O almeno è quello che Goro pensava. Dopo essersi risvegliato in grembo alla sua amata idol, Goro scopre di essere rinato come uno dei figli di Ai Hoshino!

                                    Goro inizierà a scoprire le verità che si celano all'interno dell'industria dell'intrattenimento, dove non sempre avere talento basta per ottenere successo. Riuscirà Goro a proteggere l'amato sorriso di Ai con l'aiuto di un'inaspettata alleata?",

                'cover_image' => 'https://mangayo.it/31162-large_default/oshi-no-ko-11-my-star.jpg',
                'volume' => 11,
                'price' => 6.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2020', // Anno di pubblicazione
                'genre' => [4, 7, 25, 26],
                'category_id' => 3,
                'editor_id' => 1



            ],

            [
                'title' => 'Oshi No Ko 12 - My Star',
                'author_id' => 5, // Autore del manga
                'description' => "La sedicenne Ai Hoshino è una talentuosa e bellissima idol, molto amata dai suoi fan. A prima vista, Ai sembra la personificazione della ragazza perfetta, ma non è tutto oro ciò che luccica.

                                    Goro Honda è un ginecologo che vive in un'area rurale ed è un grande fan di Ai. Per questo non può che rimanere a bocca aperta quando la giovane idol arriva alla porta del suo studio con il suo tutore, incinta di due gemelli. Goro aiuta la giovane ad avere un parto sicuro. Tuttavia, l'incontro con una misteriosa figura causa l'improvvisa morte del dottore.

                                    O almeno è quello che Goro pensava. Dopo essersi risvegliato in grembo alla sua amata idol, Goro scopre di essere rinato come uno dei figli di Ai Hoshino!

                                    Goro inizierà a scoprire le verità che si celano all'interno dell'industria dell'intrattenimento, dove non sempre avere talento basta per ottenere successo. Riuscirà Goro a proteggere l'amato sorriso di Ai con l'aiuto di un'inaspettata alleata?",

                'cover_image' => 'https://mangayo.it/33561-large_default/oshi-no-ko-12-my-star.jpg',
                'volume' => 12,
                'price' => 6.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2020', // Anno di pubblicazione
                'genre' => [4, 7, 25, 26],
                'category_id' => 3,
                'editor_id' => 1



            ],

            [
                'title' => 'Oshi No Ko 13 - My Star',
                'author_id' => 5, // Autore del manga
                'description' => "La sedicenne Ai Hoshino è una talentuosa e bellissima idol, molto amata dai suoi fan. A prima vista, Ai sembra la personificazione della ragazza perfetta, ma non è tutto oro ciò che luccica.

                                    Goro Honda è un ginecologo che vive in un'area rurale ed è un grande fan di Ai. Per questo non può che rimanere a bocca aperta quando la giovane idol arriva alla porta del suo studio con il suo tutore, incinta di due gemelli. Goro aiuta la giovane ad avere un parto sicuro. Tuttavia, l'incontro con una misteriosa figura causa l'improvvisa morte del dottore.

                                    O almeno è quello che Goro pensava. Dopo essersi risvegliato in grembo alla sua amata idol, Goro scopre di essere rinato come uno dei figli di Ai Hoshino!

                                    Goro inizierà a scoprire le verità che si celano all'interno dell'industria dell'intrattenimento, dove non sempre avere talento basta per ottenere successo. Riuscirà Goro a proteggere l'amato sorriso di Ai con l'aiuto di un'inaspettata alleata?",

                'cover_image' => 'https://mangayo.it/37098-large_default/oshi-no-ko-13-my-star.jpg',
                'volume' => 13,
                'price' => 6.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2020', // Anno di pubblicazione
                'genre' => [4, 7, 25, 26],
                'category_id' => 3,
                'editor_id' => 1


            ],

            [
                'title' => 'Oshi No Ko 14 - My Star',
                'author_id' => 5, // Autore del manga
                'description' => "La sedicenne Ai Hoshino è una talentuosa e bellissima idol, molto amata dai suoi fan. A prima vista, Ai sembra la personificazione della ragazza perfetta, ma non è tutto oro ciò che luccica.

                                    Goro Honda è un ginecologo che vive in un'area rurale ed è un grande fan di Ai. Per questo non può che rimanere a bocca aperta quando la giovane idol arriva alla porta del suo studio con il suo tutore, incinta di due gemelli. Goro aiuta la giovane ad avere un parto sicuro. Tuttavia, l'incontro con una misteriosa figura causa l'improvvisa morte del dottore.

                                    O almeno è quello che Goro pensava. Dopo essersi risvegliato in grembo alla sua amata idol, Goro scopre di essere rinato come uno dei figli di Ai Hoshino!

                                    Goro inizierà a scoprire le verità che si celano all'interno dell'industria dell'intrattenimento, dove non sempre avere talento basta per ottenere successo. Riuscirà Goro a proteggere l'amato sorriso di Ai con l'aiuto di un'inaspettata alleata?",

                'cover_image' => 'https://mangayo.it/39737-large_default/oshi-no-ko-14-my-star.jpg',
                'volume' => 14,
                'price' => 6.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2020', // Anno di pubblicazione
                'genre' => [4, 7, 25, 26],
                'category_id' => 3,
                'editor_id' => 1

            ],

            [
                'title' => 'Oshi No Ko 15 - My Star',
                'author_id' => 5, // Autore del manga
                'description' => "La sedicenne Ai Hoshino è una talentuosa e bellissima idol, molto amata dai suoi fan. A prima vista, Ai sembra la personificazione della ragazza perfetta, ma non è tutto oro ciò che luccica.

                                    Goro Honda è un ginecologo che vive in un'area rurale ed è un grande fan di Ai. Per questo non può che rimanere a bocca aperta quando la giovane idol arriva alla porta del suo studio con il suo tutore, incinta di due gemelli. Goro aiuta la giovane ad avere un parto sicuro. Tuttavia, l'incontro con una misteriosa figura causa l'improvvisa morte del dottore.

                                    O almeno è quello che Goro pensava. Dopo essersi risvegliato in grembo alla sua amata idol, Goro scopre di essere rinato come uno dei figli di Ai Hoshino!

                                    Goro inizierà a scoprire le verità che si celano all'interno dell'industria dell'intrattenimento, dove non sempre avere talento basta per ottenere successo. Riuscirà Goro a proteggere l'amato sorriso di Ai con l'aiuto di un'inaspettata alleata?",

                'cover_image' => 'https://mangayo.it/41589-large_default/oshi-no-ko-15-my-star.jpg',
                'volume' => 15,
                'price' => 6.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2020', // Anno di pubblicazione
                'genre' => [4, 7, 25, 26],
                'category_id' => 3,
                'editor_id' => 1

            ],

            //HIRAYASUMI
            [
                'title' => 'Hirayasumi 1',
                'author_id' => 4, // Autore del manga
                'description' => "Hiroto Ikuta, ventinove anni, non ha un lavoro fisso, vita amorosa, né alcuna preoccupazione per il futuro. È un “freeter”, uno di quei giovani che, terminati gli studi, si mantengono saltando da un part-time breve all'altro, per non smarrire il proprio senso di libertà. In seguito alla morte di un'anziana signora alla quale faceva compagnia, Hiroto eredita una casa a Tokyo, nella quale si trasferisce con la cuginetta Natsumi, diciottenne, che intende studiare arte all’università. Giorno dopo giorno, le vite dei due si intrecceranno sempre più con quelle delle persone attorno a loro, ognuno alle prese con i propri problemi e le proprie difficoltà quotidiane...",

                'cover_image' => 'https://mangayo.it/30702-large_default/hirayasumi-1.jpg',
                'volume' => 1,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2021', // Anno di pubblicazione
                'genre' => [3, 10],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'Hirayasumi 2',
                'author_id' => 4, // Autore del manga
                'description' => "Hiroto Ikuta, ventinove anni, non ha un lavoro fisso, vita amorosa, né alcuna preoccupazione per il futuro. È un “freeter”, uno di quei giovani che, terminati gli studi, si mantengono saltando da un part-time breve all'altro, per non smarrire il proprio senso di libertà. In seguito alla morte di un'anziana signora alla quale faceva compagnia, Hiroto eredita una casa a Tokyo, nella quale si trasferisce con la cuginetta Natsumi, diciottenne, che intende studiare arte all’università. Giorno dopo giorno, le vite dei due si intrecceranno sempre più con quelle delle persone attorno a loro, ognuno alle prese con i propri problemi e le proprie difficoltà quotidiane...",

                'cover_image' => 'https://mangayo.it/31988-large_default/hirayasumi-2.jpg',
                'volume' => 2,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2021', // Anno di pubblicazione
                'genre' => [3, 10],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'Hirayasumi 3',
                'author_id' => 4, // Autore del manga
                'description' => "Hiroto Ikuta, ventinove anni, non ha un lavoro fisso, vita amorosa, né alcuna preoccupazione per il futuro. È un “freeter”, uno di quei giovani che, terminati gli studi, si mantengono saltando da un part-time breve all'altro, per non smarrire il proprio senso di libertà. In seguito alla morte di un'anziana signora alla quale faceva compagnia, Hiroto eredita una casa a Tokyo, nella quale si trasferisce con la cuginetta Natsumi, diciottenne, che intende studiare arte all’università. Giorno dopo giorno, le vite dei due si intrecceranno sempre più con quelle delle persone attorno a loro, ognuno alle prese con i propri problemi e le proprie difficoltà quotidiane...",

                'cover_image' => 'https://mangayo.it/33560-large_default/hirayasumi-3.jpg',
                'volume' => 3,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2021', // Anno di pubblicazione
                'genre' => [3, 10],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'Hirayasumi 4',
                'author_id' => 4, // Autore del manga
                'description' => "Hiroto Ikuta, ventinove anni, non ha un lavoro fisso, vita amorosa, né alcuna preoccupazione per il futuro. È un “freeter”, uno di quei giovani che, terminati gli studi, si mantengono saltando da un part-time breve all'altro, per non smarrire il proprio senso di libertà. In seguito alla morte di un'anziana signora alla quale faceva compagnia, Hiroto eredita una casa a Tokyo, nella quale si trasferisce con la cuginetta Natsumi, diciottenne, che intende studiare arte all’università. Giorno dopo giorno, le vite dei due si intrecceranno sempre più con quelle delle persone attorno a loro, ognuno alle prese con i propri problemi e le proprie difficoltà quotidiane...",

                'cover_image' => 'https://mangayo.it/35441-large_default/hirayasumi-4.jpg',
                'volume' => 4,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2021', // Anno di pubblicazione
                'genre' => [3, 10],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'Hirayasumi 5',
                'author_id' => 4, // Autore del manga
                'description' => "Hiroto Ikuta, ventinove anni, non ha un lavoro fisso, vita amorosa, né alcuna preoccupazione per il futuro. È un “freeter”, uno di quei giovani che, terminati gli studi, si mantengono saltando da un part-time breve all'altro, per non smarrire il proprio senso di libertà. In seguito alla morte di un'anziana signora alla quale faceva compagnia, Hiroto eredita una casa a Tokyo, nella quale si trasferisce con la cuginetta Natsumi, diciottenne, che intende studiare arte all’università. Giorno dopo giorno, le vite dei due si intrecceranno sempre più con quelle delle persone attorno a loro, ognuno alle prese con i propri problemi e le proprie difficoltà quotidiane...",

                'cover_image' => 'https://mangayo.it/37340-large_default/hirayasumi-5.jpg',
                'volume' => 5,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2021', // Anno di pubblicazione
                'genre' => [3, 10],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'Hirayasumi 6',
                'author_id' => 4, // Autore del manga
                'description' => "Hiroto Ikuta, ventinove anni, non ha un lavoro fisso, vita amorosa, né alcuna preoccupazione per il futuro. È un “freeter”, uno di quei giovani che, terminati gli studi, si mantengono saltando da un part-time breve all'altro, per non smarrire il proprio senso di libertà. In seguito alla morte di un'anziana signora alla quale faceva compagnia, Hiroto eredita una casa a Tokyo, nella quale si trasferisce con la cuginetta Natsumi, diciottenne, che intende studiare arte all’università. Giorno dopo giorno, le vite dei due si intrecceranno sempre più con quelle delle persone attorno a loro, ognuno alle prese con i propri problemi e le proprie difficoltà quotidiane...",

                'cover_image' => 'https://mangayo.it/39317-large_default/hirayasumi-6.jpg',
                'volume' => 6,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => false, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2021', // Anno di pubblicazione
                'genre' => [3, 10],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'Hirayasumi 7',
                'author_id' => 4, // Autore del manga
                'description' => "Hiroto Ikuta, ventinove anni, non ha un lavoro fisso, vita amorosa, né alcuna preoccupazione per il futuro. È un “freeter”, uno di quei giovani che, terminati gli studi, si mantengono saltando da un part-time breve all'altro, per non smarrire il proprio senso di libertà. In seguito alla morte di un'anziana signora alla quale faceva compagnia, Hiroto eredita una casa a Tokyo, nella quale si trasferisce con la cuginetta Natsumi, diciottenne, che intende studiare arte all’università. Giorno dopo giorno, le vite dei due si intrecceranno sempre più con quelle delle persone attorno a loro, ognuno alle prese con i propri problemi e le proprie difficoltà quotidiane...",

                'cover_image' => 'https://mangayo.it/41156-large_default/hirayasumi-7.jpg',
                'volume' => 7,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2021', // Anno di pubblicazione
                'genre' => [3, 10],
                'category_id' => 3,
                'editor_id' => 1

            ],

            //THE CLIMBER

            [
                'title' => 'The Climber 1',
                'author_id' => 3, // Autore del manga
                'description' => "Forte è il richiamo della montagna per il giovane Buntaro Mori, uno studente delle superiori che, grazie ai suoi nuovi amici di scuola, scopre di provare una forte attrazione per il climbing. Ma la montagna non perdona errori o distrazioni…
                Kokou no hito (“L’Uomo Solitario”) è tratto da un omonimo romanzo del 1969 di Jiro Nitta. ",

                'cover_image' => 'https://mangayo.it/8958-large_default/the-climber-1.jpg',
                'volume' => 1,
                'price' => 6.90, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => false, // Disponibilità (true o false)
                'year' => '2007', // Anno di pubblicazione
                'genre' => [1, 2, 14],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'The Climber 2',
                'author_id' => 3, // Autore del manga
                'description' => "Forte è il richiamo della montagna per il giovane Buntaro Mori, uno studente delle superiori che, grazie ai suoi nuovi amici di scuola, scopre di provare una forte attrazione per il climbing. Ma la montagna non perdona errori o distrazioni…
                Kokou no hito (“L’Uomo Solitario”) è tratto da un omonimo romanzo del 1969 di Jiro Nitta. ",

                'cover_image' => 'https://mangayo.it/8941-large_default/the-climber-2.jpg',
                'volume' => 2,
                'price' => 6.90, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => false, // Disponibilità (true o false)
                'year' => '2007', // Anno di pubblicazione
                'genre' => [1, 2, 14],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'The Climber 3',
                'author_id' => 3, // Autore del manga
                'description' => "Forte è il richiamo della montagna per il giovane Buntaro Mori, uno studente delle superiori che, grazie ai suoi nuovi amici di scuola, scopre di provare una forte attrazione per il climbing. Ma la montagna non perdona errori o distrazioni…
                Kokou no hito (“L’Uomo Solitario”) è tratto da un omonimo romanzo del 1969 di Jiro Nitta. ",

                'cover_image' => 'https://mangayo.it/8942-large_default/the-climber-3.jpg',
                'volume' => 3,
                'price' => 6.90, // Prezzo in formato decimal
                'availability' => false, // Disponibilità (true o false)
                'in_progress' => false, // Disponibilità (true o false)
                'year' => '2007', // Anno di pubblicazione
                'genre' => [1, 2, 14],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'The Climber 4',
                'author_id' => 3, // Autore del manga
                'description' => "Forte è il richiamo della montagna per il giovane Buntaro Mori, uno studente delle superiori che, grazie ai suoi nuovi amici di scuola, scopre di provare una forte attrazione per il climbing. Ma la montagna non perdona errori o distrazioni…
                Kokou no hito (“L’Uomo Solitario”) è tratto da un omonimo romanzo del 1969 di Jiro Nitta. ",

                'cover_image' => 'https://mangayo.it/8943-large_default/the-climber-4.jpg',
                'volume' => 4,
                'price' => 6.90, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => false, // Disponibilità (true o false)
                'year' => '2007', // Anno di pubblicazione
                'genre' => [1, 2, 14],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'The Climber 5',
                'author_id' => 3, // Autore del manga
                'description' => "Forte è il richiamo della montagna per il giovane Buntaro Mori, uno studente delle superiori che, grazie ai suoi nuovi amici di scuola, scopre di provare una forte attrazione per il climbing. Ma la montagna non perdona errori o distrazioni…
                Kokou no hito (“L’Uomo Solitario”) è tratto da un omonimo romanzo del 1969 di Jiro Nitta. ",

                'cover_image' => 'https://mangayo.it/8944-large_default/the-climber-5.jpg',
                'volume' => 5,
                'price' => 6.90, // Prezzo in formato decimal
                'availability' => false, // Disponibilità (true o false)
                'in_progress' => false, // Disponibilità (true o false)
                'year' => '2007', // Anno di pubblicazione
                'genre' => [1, 2, 14],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'The Climber 6',
                'author_id' => 3, // Autore del manga
                'description' => "Forte è il richiamo della montagna per il giovane Buntaro Mori, uno studente delle superiori che, grazie ai suoi nuovi amici di scuola, scopre di provare una forte attrazione per il climbing. Ma la montagna non perdona errori o distrazioni…
                Kokou no hito (“L’Uomo Solitario”) è tratto da un omonimo romanzo del 1969 di Jiro Nitta. ",

                'cover_image' => 'https://mangayo.it/8945-large_default/the-climber-6.jpg',
                'volume' => 6,
                'price' => 6.90, // Prezzo in formato decimal
                'availability' => false, // Disponibilità (true o false)
                'in_progress' => false, // Disponibilità (true o false)
                'year' => '2007', // Anno di pubblicazione
                'genre' => [1, 2, 14],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'The Climber 7',
                'author_id' => 3, // Autore del manga
                'description' => "Forte è il richiamo della montagna per il giovane Buntaro Mori, uno studente delle superiori che, grazie ai suoi nuovi amici di scuola, scopre di provare una forte attrazione per il climbing. Ma la montagna non perdona errori o distrazioni…
                Kokou no hito (“L’Uomo Solitario”) è tratto da un omonimo romanzo del 1969 di Jiro Nitta. ",

                'cover_image' => 'https://mangayo.it/8946-large_default/the-climber-7.jpg',
                'volume' => 7,
                'price' => 6.90, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => false, // Disponibilità (true o false)
                'year' => '2007', // Anno di pubblicazione
                'genre' => [1, 2, 14],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'The Climber 8',
                'author_id' => 3, // Autore del manga
                'description' => "Forte è il richiamo della montagna per il giovane Buntaro Mori, uno studente delle superiori che, grazie ai suoi nuovi amici di scuola, scopre di provare una forte attrazione per il climbing. Ma la montagna non perdona errori o distrazioni…
                Kokou no hito (“L’Uomo Solitario”) è tratto da un omonimo romanzo del 1969 di Jiro Nitta. ",

                'cover_image' => 'https://mangayo.it/8947-large_default/the-climber-8.jpg',
                'volume' => 8,
                'price' => 6.90, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => false, // Disponibilità (true o false)
                'year' => '2007', // Anno di pubblicazione
                'genre' => [1, 2, 14],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'The Climber 9',
                'author_id' => 3, // Autore del manga
                'description' => "Forte è il richiamo della montagna per il giovane Buntaro Mori, uno studente delle superiori che, grazie ai suoi nuovi amici di scuola, scopre di provare una forte attrazione per il climbing. Ma la montagna non perdona errori o distrazioni…
                Kokou no hito (“L’Uomo Solitario”) è tratto da un omonimo romanzo del 1969 di Jiro Nitta. ",

                'cover_image' => 'https://mangayo.it/8948-large_default/the-climber-9.jpg',
                'volume' => 9,
                'price' => 6.90, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => false, // Disponibilità (true o false)
                'year' => '2007', // Anno di pubblicazione
                'genre' => [1, 2, 14],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'The Climber 10',
                'author_id' => 3, // Autore del manga
                'description' => "Forte è il richiamo della montagna per il giovane Buntaro Mori, uno studente delle superiori che, grazie ai suoi nuovi amici di scuola, scopre di provare una forte attrazione per il climbing. Ma la montagna non perdona errori o distrazioni…
                Kokou no hito (“L’Uomo Solitario”) è tratto da un omonimo romanzo del 1969 di Jiro Nitta. ",

                'cover_image' => 'https://mangayo.it/8949-large_default/the-climber-10.jpg',
                'volume' => 10,
                'price' => 6.90, // Prezzo in formato decimal
                'availability' => false, // Disponibilità (true o false)
                'in_progress' => false, // Disponibilità (true o false)
                'year' => '2007', // Anno di pubblicazione
                'genre' => [1, 2, 14],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'The Climber 11',
                'author_id' => 3, // Autore del manga
                'description' => "Forte è il richiamo della montagna per il giovane Buntaro Mori, uno studente delle superiori che, grazie ai suoi nuovi amici di scuola, scopre di provare una forte attrazione per il climbing. Ma la montagna non perdona errori o distrazioni…
                Kokou no hito (“L’Uomo Solitario”) è tratto da un omonimo romanzo del 1969 di Jiro Nitta. ",

                'cover_image' => 'https://mangayo.it/8950-large_default/the-climber-11.jpg',
                'volume' => 11,
                'price' => 6.90, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => false, // Disponibilità (true o false)
                'year' => '2007', // Anno di pubblicazione
                'genre' => [1, 2, 14],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'The Climber 12',
                'author_id' => 3, // Autore del manga
                'description' => "Forte è il richiamo della montagna per il giovane Buntaro Mori, uno studente delle superiori che, grazie ai suoi nuovi amici di scuola, scopre di provare una forte attrazione per il climbing. Ma la montagna non perdona errori o distrazioni…
                Kokou no hito (“L’Uomo Solitario”) è tratto da un omonimo romanzo del 1969 di Jiro Nitta. ",

                'cover_image' => 'https://mangayo.it/8951-large_default/the-climber-12.jpg',
                'volume' => 12,
                'price' => 6.90, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => false, // Disponibilità (true o false)
                'year' => '2007', // Anno di pubblicazione
                'genre' => [1, 2, 14],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'The Climber 13',
                'author_id' => 3, // Autore del manga
                'description' => "Forte è il richiamo della montagna per il giovane Buntaro Mori, uno studente delle superiori che, grazie ai suoi nuovi amici di scuola, scopre di provare una forte attrazione per il climbing. Ma la montagna non perdona errori o distrazioni…
                Kokou no hito (“L’Uomo Solitario”) è tratto da un omonimo romanzo del 1969 di Jiro Nitta. ",

                'cover_image' => 'https://mangayo.it/8952-large_default/the-climber-13.jpg',
                'volume' => 13,
                'price' => 6.90, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => false, // Disponibilità (true o false)
                'year' => '2007', // Anno di pubblicazione
                'genre' => [1, 2, 14],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'The Climber 14',
                'author_id' => 3, // Autore del manga
                'description' => "Forte è il richiamo della montagna per il giovane Buntaro Mori, uno studente delle superiori che, grazie ai suoi nuovi amici di scuola, scopre di provare una forte attrazione per il climbing. Ma la montagna non perdona errori o distrazioni…
                Kokou no hito (“L’Uomo Solitario”) è tratto da un omonimo romanzo del 1969 di Jiro Nitta. ",

                'cover_image' => 'https://mangayo.it/8953-large_default/the-climber-14.jpg',
                'volume' => 14,
                'price' => 6.90, // Prezzo in formato decimal
                'availability' => false, // Disponibilità (true o false)
                'in_progress' => false, // Disponibilità (true o false)
                'year' => '2007', // Anno di pubblicazione
                'genre' => [1, 2, 14],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'The Climber 15',
                'author_id' => 3, // Autore del manga
                'description' => "Forte è il richiamo della montagna per il giovane Buntaro Mori, uno studente delle superiori che, grazie ai suoi nuovi amici di scuola, scopre di provare una forte attrazione per il climbing. Ma la montagna non perdona errori o distrazioni…
                Kokou no hito (“L’Uomo Solitario”) è tratto da un omonimo romanzo del 1969 di Jiro Nitta. ",

                'cover_image' => 'https://mangayo.it/8954-large_default/the-climber-15.jpg',
                'volume' => 15,
                'price' => 6.90, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => false, // Disponibilità (true o false)
                'year' => '2007', // Anno di pubblicazione
                'genre' => [1, 2, 14],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'The Climber 16',
                'author_id' => 3, // Autore del manga
                'description' => "Forte è il richiamo della montagna per il giovane Buntaro Mori, uno studente delle superiori che, grazie ai suoi nuovi amici di scuola, scopre di provare una forte attrazione per il climbing. Ma la montagna non perdona errori o distrazioni…
                Kokou no hito (“L’Uomo Solitario”) è tratto da un omonimo romanzo del 1969 di Jiro Nitta. ",

                'cover_image' => 'https://mangayo.it/8955-large_default/the-climber-16.jpg',
                'volume' => 16,
                'price' => 6.90, // Prezzo in formato decimal
                'availability' => false, // Disponibilità (true o false)
                'in_progress' => false, // Disponibilità (true o false)
                'year' => '2007', // Anno di pubblicazione
                'genre' => [1, 2, 14],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'The Climber 17',
                'author_id' => 3, // Autore del manga
                'description' => "Forte è il richiamo della montagna per il giovane Buntaro Mori, uno studente delle superiori che, grazie ai suoi nuovi amici di scuola, scopre di provare una forte attrazione per il climbing. Ma la montagna non perdona errori o distrazioni…
                Kokou no hito (“L’Uomo Solitario”) è tratto da un omonimo romanzo del 1969 di Jiro Nitta. ",
                'cover_image' => 'https://mangayo.it/8956-large_default/the-climber-17.jpg',
                'volume' => 17,
                'price' => 6.90, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => false, // Disponibilità (true o false)
                'year' => '2007', // Anno di pubblicazione
                'genre' => [1, 2, 14],
                'category_id' => 3,
                'editor_id' => 1
            ],

            //BLUE LOCK
            [
                'title' => 'Blue Lock 1',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/4415-large_default/blue-lock-1.jpg',
                'volume' => 1,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 2',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/4935-large_default/blue-lock-2.jpg',
                'volume' => 2,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 3',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/6136-large_default/blue-lock-3.jpg',
                'volume' => 3,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 4',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/6904-large_default/blue-lock-4.jpg',
                'volume' => 4,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 5',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/7753-large_default/blue-lock-5.jpg',
                'volume' => 5,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 6',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/8761-large_default/blue-lock-6.jpg',
                'volume' => 6,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 7',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/9958-large_default/blue-lock-7.jpg',
                'volume' => 7,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 8',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/10766-large_default/blue-lock-8.jpg',
                'volume' => 8,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 9',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/11568-large_default/blue-lock-9.jpg',
                'volume' => 9,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 10',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/12433-large_default/blue-lock-10.jpg',
                'volume' => 10,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 11',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/12727-large_default/blue-lock-11.jpg',
                'volume' => 11,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 12',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/13742-large_default/blue-lock-12.jpg',
                'volume' => 12,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 13',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/14641-large_default/blue-lock-13.jpg',
                'volume' => 13,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 14',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/15795-large_default/blue-lock-14.jpg',
                'volume' => 14,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 15',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/16403-large_default/blue-lock-15.jpg',
                'volume' => 15,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 16',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/17519-large_default/blue-lock-16.jpg',
                'volume' => 16,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 17',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/18585-large_default/blue-lock-17.jpg',
                'volume' => 17,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 18',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/19671-large_default/blue-lock-18.jpg',
                'volume' => 18,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 19',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/21364-large_default/blue-lock-19.jpg',
                'volume' => 19,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 20',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/23726-large_default/blue-lock-20.jpg',
                'volume' => 20,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 21',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/25660-large_default/blue-lock-21.jpg',
                'volume' => 21,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 22',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/28713-large_default/blue-lock-22.jpg',
                'volume' => 22,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 23',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/31408-large_default/blue-lock-23.jpg',
                'volume' => 23,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 24',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/34947-large_default/blue-lock-24.jpg',
                'volume' => 24,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 25',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/38810-large_default/blue-lock-25.jpg',
                'volume' => 25,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => false, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],
            [
                'title' => 'Blue Lock 26',
                'author_id' => 2, // Autore del manga
                'description' => "NE RESTERÀ SOLO UNO! CHI SOPRAVVIVRÀ ALL’INFERNO DEL BLUE LOCK?

                L’eliminazione ai Mondiali di calcio del 2018 ha confermato i limiti della Nazionale nipponica. Lo spirito di squadra non basta: per vincere bisogna far gol! Ha così inizio il folle progetto di selezione dell’attaccante più egoista, colui che realizzerà il sogno calcistico del Giappone…",

                'cover_image' => 'https://mangayo.it/40607-large_default/blue-lock-26.jpg',
                'volume' => 26,
                'price' => 7.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [1, 14],
                'category_id' => 1,
                'editor_id' => 3

            ],

            //HEAVENLY DELUSION

            [
                'title' => 'Heavenly Delusion 1',
                'author_id' => 1, // Autore del manga
                'description' => "Dentro a una struttura dotata di un'area verde e completamente cinta da mura sono ospitati dei ragazzini. Durante una verifica, Tokio riceve un fugace messaggio che recita: 'Vorresti andare all'esterno dell'esterno?', e da quel momento comincia a chiedersi come sia quel mondo sconosciuto che inizia appena oltre i confini della struttura. Dall'altra parte, fuori, Maru e Kiruko, impegnati in una quotidiana lotta per la sopravvivenza in ciò che resta del Giappone, sono alla ricerca del 'paradiso'. Tokio e Maru sono identici nell'aspetto, eppure sembrano non conoscersi affatto. Quale sarà il loro legame? I loro destini saranno destinati a incrociarsi? E cosa nasconde l'avvenente ma mascolina Kiruko?",

                'cover_image' => 'https://mangayo.it/40607-large_default/blue-lock-26.jpg',
                'volume' => 1,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => false, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [2, 7, 12],
                'category_id' => 1,
                'editor_id' => 2

            ],
            [
                'title' => 'Heavenly Delusion 2',
                'author_id' => 1, // Autore del manga
                'description' => "Dentro a una struttura dotata di un'area verde e completamente cinta da mura sono ospitati dei ragazzini. Durante una verifica, Tokio riceve un fugace messaggio che recita: 'Vorresti andare all'esterno dell'esterno?', e da quel momento comincia a chiedersi come sia quel mondo sconosciuto che inizia appena oltre i confini della struttura. Dall'altra parte, fuori, Maru e Kiruko, impegnati in una quotidiana lotta per la sopravvivenza in ciò che resta del Giappone, sono alla ricerca del 'paradiso'. Tokio e Maru sono identici nell'aspetto, eppure sembrano non conoscersi affatto. Quale sarà il loro legame? I loro destini saranno destinati a incrociarsi? E cosa nasconde l'avvenente ma mascolina Kiruko?",

                'cover_image' => 'https://mangayo.it/652-large_default/heavenly-delusion-2.jpg',
                'volume' => 2,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [2, 7, 12],
                'category_id' => 1,
                'editor_id' => 2

            ],
            [
                'title' => 'Heavenly Delusion 3',
                'author_id' => 1, // Autore del manga
                'description' => "Dentro a una struttura dotata di un'area verde e completamente cinta da mura sono ospitati dei ragazzini. Durante una verifica, Tokio riceve un fugace messaggio che recita: 'Vorresti andare all'esterno dell'esterno?', e da quel momento comincia a chiedersi come sia quel mondo sconosciuto che inizia appena oltre i confini della struttura. Dall'altra parte, fuori, Maru e Kiruko, impegnati in una quotidiana lotta per la sopravvivenza in ciò che resta del Giappone, sono alla ricerca del 'paradiso'. Tokio e Maru sono identici nell'aspetto, eppure sembrano non conoscersi affatto. Quale sarà il loro legame? I loro destini saranno destinati a incrociarsi? E cosa nasconde l'avvenente ma mascolina Kiruko?",

                'cover_image' => 'https://mangayo.it/654-large_default/heavenly-delusion-3.jpg',
                'volume' => 3,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [2, 7, 12],
                'category_id' => 1,
                'editor_id' => 2

            ],
            [
                'title' => 'Heavenly Delusion 4',
                'author_id' => 1, // Autore del manga
                'description' => "Dentro a una struttura dotata di un'area verde e completamente cinta da mura sono ospitati dei ragazzini. Durante una verifica, Tokio riceve un fugace messaggio che recita: 'Vorresti andare all'esterno dell'esterno?', e da quel momento comincia a chiedersi come sia quel mondo sconosciuto che inizia appena oltre i confini della struttura. Dall'altra parte, fuori, Maru e Kiruko, impegnati in una quotidiana lotta per la sopravvivenza in ciò che resta del Giappone, sono alla ricerca del 'paradiso'. Tokio e Maru sono identici nell'aspetto, eppure sembrano non conoscersi affatto. Quale sarà il loro legame? I loro destini saranno destinati a incrociarsi? E cosa nasconde l'avvenente ma mascolina Kiruko?",

                'cover_image' => 'https://mangayo.it/656-large_default/heavenly-delusion-4.jpg',
                'volume' => 4,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [2, 7, 12],
                'category_id' => 1,
                'editor_id' => 2

            ],
            [
                'title' => 'Heavenly Delusion 5',
                'author_id' => 1, // Autore del manga
                'description' => "Dentro a una struttura dotata di un'area verde e completamente cinta da mura sono ospitati dei ragazzini. Durante una verifica, Tokio riceve un fugace messaggio che recita: 'Vorresti andare all'esterno dell'esterno?', e da quel momento comincia a chiedersi come sia quel mondo sconosciuto che inizia appena oltre i confini della struttura. Dall'altra parte, fuori, Maru e Kiruko, impegnati in una quotidiana lotta per la sopravvivenza in ciò che resta del Giappone, sono alla ricerca del 'paradiso'. Tokio e Maru sono identici nell'aspetto, eppure sembrano non conoscersi affatto. Quale sarà il loro legame? I loro destini saranno destinati a incrociarsi? E cosa nasconde l'avvenente ma mascolina Kiruko?",

                'cover_image' => 'https://mangayo.it/4731-large_default/heavenly-delusion-5.jpg',
                'volume' => 5,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => false, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [2, 7, 12],
                'category_id' => 1,
                'editor_id' => 2

            ],
            [
                'title' => 'Heavenly Delusion 6',
                'author_id' => 1, // Autore del manga
                'description' => "Dentro a una struttura dotata di un'area verde e completamente cinta da mura sono ospitati dei ragazzini. Durante una verifica, Tokio riceve un fugace messaggio che recita: 'Vorresti andare all'esterno dell'esterno?', e da quel momento comincia a chiedersi come sia quel mondo sconosciuto che inizia appena oltre i confini della struttura. Dall'altra parte, fuori, Maru e Kiruko, impegnati in una quotidiana lotta per la sopravvivenza in ciò che resta del Giappone, sono alla ricerca del 'paradiso'. Tokio e Maru sono identici nell'aspetto, eppure sembrano non conoscersi affatto. Quale sarà il loro legame? I loro destini saranno destinati a incrociarsi? E cosa nasconde l'avvenente ma mascolina Kiruko?",

                'cover_image' => 'https://mangayo.it/10966-large_default/heavenly-delusion-6.jpg',
                'volume' => 6,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [2, 7, 12],
                'category_id' => 1,
                'editor_id' => 2

            ],
            [
                'title' => 'Heavenly Delusion 8',
                'author_id' => 1, // Autore del manga
                'description' => "Dentro a una struttura dotata di un'area verde e completamente cinta da mura sono ospitati dei ragazzini. Durante una verifica, Tokio riceve un fugace messaggio che recita: 'Vorresti andare all'esterno dell'esterno?', e da quel momento comincia a chiedersi come sia quel mondo sconosciuto che inizia appena oltre i confini della struttura. Dall'altra parte, fuori, Maru e Kiruko, impegnati in una quotidiana lotta per la sopravvivenza in ciò che resta del Giappone, sono alla ricerca del 'paradiso'. Tokio e Maru sono identici nell'aspetto, eppure sembrano non conoscersi affatto. Quale sarà il loro legame? I loro destini saranno destinati a incrociarsi? E cosa nasconde l'avvenente ma mascolina Kiruko?",

                'cover_image' => 'https://mangayo.it/25412-large_default/heavenly-delusion-8.jpg',
                'volume' => 8,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [2, 7, 12],
                'category_id' => 1,
                'editor_id' => 2

            ],
            [
                'title' => 'Heavenly Delusion 9',
                'author_id' => 1, // Autore del manga
                'description' => "Dentro a una struttura dotata di un'area verde e completamente cinta da mura sono ospitati dei ragazzini. Durante una verifica, Tokio riceve un fugace messaggio che recita: 'Vorresti andare all'esterno dell'esterno?', e da quel momento comincia a chiedersi come sia quel mondo sconosciuto che inizia appena oltre i confini della struttura. Dall'altra parte, fuori, Maru e Kiruko, impegnati in una quotidiana lotta per la sopravvivenza in ciò che resta del Giappone, sono alla ricerca del 'paradiso'. Tokio e Maru sono identici nell'aspetto, eppure sembrano non conoscersi affatto. Quale sarà il loro legame? I loro destini saranno destinati a incrociarsi? E cosa nasconde l'avvenente ma mascolina Kiruko?",

                'cover_image' => 'https://mangayo.it/32944-large_default/heavenly-delusion-9.jpg',
                'volume' => 9,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => false, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [2, 7, 12],
                'category_id' => 1,
                'editor_id' => 2

            ],
            [
                'title' => 'Heavenly Delusion 10',
                'author_id' => 1, // Autore del manga
                'description' => "Dentro a una struttura dotata di un'area verde e completamente cinta da mura sono ospitati dei ragazzini. Durante una verifica, Tokio riceve un fugace messaggio che recita: 'Vorresti andare all'esterno dell'esterno?', e da quel momento comincia a chiedersi come sia quel mondo sconosciuto che inizia appena oltre i confini della struttura. Dall'altra parte, fuori, Maru e Kiruko, impegnati in una quotidiana lotta per la sopravvivenza in ciò che resta del Giappone, sono alla ricerca del 'paradiso'. Tokio e Maru sono identici nell'aspetto, eppure sembrano non conoscersi affatto. Quale sarà il loro legame? I loro destini saranno destinati a incrociarsi? E cosa nasconde l'avvenente ma mascolina Kiruko?",

                'cover_image' => 'https://mangayo.it/40585-large_default/heavenly-delusion-10.jpg',
                'volume' => 10,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [2, 7, 12],
                'category_id' => 1,
                'editor_id' => 2

            ],

            //QUARTIERI LONTANI

            [
                'title' => 'Quartieri Lontani',
                'author_id' => 6, // Autore del manga
                'description' => "A 48 anni Hiroshi Nakahara si ritrova misteriosamente catapultato nella sua adolescenza, nella città dove è nato, con il corpo di un 14enne e la mente di un adulto. È l’occasione per rivivere un periodo cruciale della sua vita, e forse per cambiare gli eventi del passato che hanno segnato indelebilmente il suo destino… Taniguchi narra il rito di passaggio dall'infanzia alla maturità. Un romanzo a fumetti delicato, commovente e poetico: il vertice più lirico e introspettivo della sua opera. Dopo un viaggio di lavoro, Hiroshi Nakahara capita sul treno sbagliato e finisce nel suo paese d'origine. Mentre visita la tomba di famiglia improvvisamente accade qualcosa di strano e Hiroshi si ritrova nel passato, nel corpo di se stesso a 14 anni. Una seconda possibilità per rivivere la propria adolescenza con la consapevolezza e la memoria di un adulto, ma anche un'occasione per indagare sui nodi irrisolti della propria esistenza e sulla misteriosa scomparsa del padre. ",

                'cover_image' => 'https://mangayo.it/22716-large_default/quartieri-lontani.jpg',
                'volume' => 1,
                'price' => 23.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '1998', // Anno di pubblicazione
                'genre' => [4, 10],
                'category_id' => 3,
                'editor_id' => 6

            ],

            // UN CIELO RADIOSO

            [
                'title' => 'Un Cielo Radioso',
                'author_id' => 6, // Autore del manga
                'description' => "Torna in una nuova edizione uno dei capolavori del “poeta del manga”: il più europeo tra i grandi maestri del fumetto giapponese.   Il graphic novel che racchiude tutti i temi più cari a Taniguchi: la nostalgia, la possibilità di cambiare vita, la riflessione sul tempo che corre troppo veloce, il recupero dei sentimenti e dell’amore per le piccole cose.  Kazuhiro, un padre di famiglia 42enne, e il giovane motociclista Takuya si scontrano in un incidente stradale in una notte d’estate. L’uomo muore ma, per uno strano scherzo del destino, la sua coscienza si ritrova a prendere possesso del corpo del ragazzo sopravvissuto e a vivere una nuova vita nei suoi panni. Come una seconda possibilità offerta dalla sorte per rimediare ai suoi passati errori. Pian piano Kazuhiro si rende conto che questa trasmigrazione di anima è un dono, una seconda chance da non sprecare nei confronti della moglie e della figlia. Ma deve fare presto, perché la coscienza-memoria di Takuya sta lentamente riaffiorando…",

                'cover_image' => 'https://mangayo.it/22945-large_default/un-cielo-radioso.jpg',
                'volume' => 'unico',
                'price' => 19.00, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2005', // Anno di pubblicazione
                'genre' => [4, 5, 7, 10],
                'category_id' => 3,
                'editor_id' => 6

            ],

            //RANDAGI
            [
                'title' => 'Randagi 1',
                'author_id' => 4, // Autore del manga
                'description' => "La vita dell'ispettore Hajime Yamada, specializzato in crimini sui minori, non ha più senso dopo la morte precoce della figlia. Una luce si riaccende nella sua oscura esistenza però quando si imbatte in una giovane ragazza scappata di casa, che si prostituisce per sopravvivere e che... somiglia spaventosamente alla sua figlia scomparsa. L'incontro fra un uomo che ha perso la speranza e una ragazza che non l'ha mai conosciuta darà origine a un rapporto profondo, in questa miniserie di Keigo Shinzo che non nasconde la durezza della realtà.",

                'cover_image' => 'https://mangayo.it/3245-large_default/randagi-nora-to-zassou-1.jpg',
                'volume' => 1,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [3, 10],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'Randagi 2',
                'author_id' => 4, // Autore del manga
                'description' => "La vita dell'ispettore Hajime Yamada, specializzato in crimini sui minori, non ha più senso dopo la morte precoce della figlia. Una luce si riaccende nella sua oscura esistenza però quando si imbatte in una giovane ragazza scappata di casa, che si prostituisce per sopravvivere e che... somiglia spaventosamente alla sua figlia scomparsa. L'incontro fra un uomo che ha perso la speranza e una ragazza che non l'ha mai conosciuta darà origine a un rapporto profondo, in questa miniserie di Keigo Shinzo che non nasconde la durezza della realtà.",

                'cover_image' => 'https://mangayo.it/3632-large_default/randagi-nora-to-zassou-2.jpg',
                'volume' => 2,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [3, 10],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'Randagi 3',
                'author_id' => 4, // Autore del manga
                'description' => "La vita dell'ispettore Hajime Yamada, specializzato in crimini sui minori, non ha più senso dopo la morte precoce della figlia. Una luce si riaccende nella sua oscura esistenza però quando si imbatte in una giovane ragazza scappata di casa, che si prostituisce per sopravvivere e che... somiglia spaventosamente alla sua figlia scomparsa. L'incontro fra un uomo che ha perso la speranza e una ragazza che non l'ha mai conosciuta darà origine a un rapporto profondo, in questa miniserie di Keigo Shinzo che non nasconde la durezza della realtà.",

                'cover_image' => 'https://mangayo.it/3942-large_default/randagi-nora-to-zassou-3.jpg',
                'volume' => 3,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [3, 10],
                'category_id' => 3,
                'editor_id' => 1

            ],
            [
                'title' => 'Randagi 4',
                'author_id' => 4, // Autore del manga
                'description' => "La vita dell'ispettore Hajime Yamada, specializzato in crimini sui minori, non ha più senso dopo la morte precoce della figlia. Una luce si riaccende nella sua oscura esistenza però quando si imbatte in una giovane ragazza scappata di casa, che si prostituisce per sopravvivere e che... somiglia spaventosamente alla sua figlia scomparsa. L'incontro fra un uomo che ha perso la speranza e una ragazza che non l'ha mai conosciuta darà origine a un rapporto profondo, in questa miniserie di Keigo Shinzo che non nasconde la durezza della realtà.",

                'cover_image' => 'https://mangayo.it/4788-large_default/randagi-nora-to-zassou-4.jpg',
                'volume' => 4,
                'price' => 7.50, // Prezzo in formato decimal
                'availability' => true, // Disponibilità (true o false)
                'in_progress' => true, // Disponibilità (true o false)
                'year' => '2018', // Anno di pubblicazione
                'genre' => [3, 10],
                'category_id' => 3,
                'editor_id' => 1

            ],



        ];

        foreach ($mangas as $data) {

            $manga = new Manga([

                'title' => $data['title'],

                'description' => $data['description'],

                'cover_image' => $data['cover_image'],

                'volume' => $data['volume'],

                'price' => $data['price'],

                'availability' => $data['availability'],

                'year' => $data['year'],

                'in_progress' => $data['in_progress'],

                'category_id' => $data['category_id'],

                'editor_id' => $data['editor_id'],

                'author_id' => $data['author_id'],
            ]);


            $manga->slug = Str::slug($data['title']); // Compila lo slug


            $manga->save();
            $manga->genres()->attach($data['genre']);
        }
    }
}
