<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
        "Masakazu Ishiguro",
        "Muneyuki Kaneshiro",
        "Shin'ichi Sakamoto",
        "Keigo Shinzo",
        "Akasaka Aka",
        "Jirō Taniguchi",
        "Masashi Kishimoto",
        "Eiichiro Oda",
        "Tite Kubo",
        "Hirohiko Araki",
        "Yoshihiro Togashi",
        "Hajime Isayama",
        "Kohei Horikoshi",
        "Yūki Tabata",
        "Gege Akutami",
        "Koyoharu Gotouge",
        "Junji Ito",
        "Naoki Urasawa",
        "Kentaro Miura",
        "Rumiko Takahashi",
        "Takeshi Obata",
        "Tsugumi Ohba",
        "Yoshihiro Togashi",
        "Hiroshi Ganba",
        "Osamu Tezuka",
        "Akira Toriyama",
        "Katsuhiro Otomo",
        "Hideki Matsuyama",
        "Fujiko F. Fujio",
        "Shotaro Ishinomori",
        "Go Nagai",
        "Mitsuru Adachi",
        "Kazuo Koike",
        "Gōshō Aoyama",
        "Hiroya Oku",
        "Sui Ishida",
        "Yasuhiro Nightow",
        "Akira Himekawa",
        "Yoshikazu Yasuhiko",
        "Ryōichi Ikegami",
        "Takashi Shiina",
        "Tsuyoshi Shibata",
        "Tatsuya Endō",
        "Yoshiaki Kawajiri",
        "Ken Akamatsu",
        "Masami Kurumada",
        "Kouji Miura",
        "Tatsuki Fujimoto",
    ];

        foreach ($authors as $authorName) {
            $newAuthor = new Author();
            $newAuthor->name = $authorName;
            $newAuthor->save();
        }
    }
}
