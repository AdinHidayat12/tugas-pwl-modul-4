<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Melangkah',
                'author' => 'J.S. Khairen',
                'year' => 2020,
                'publisher' => 'Gramedia',
                'city' => 'Jakarta',
                'cover' => null,
                'quantity' => 0,
                'bookshelf_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'Laut Bercerita',
                'author' => 'Leila S. Chudori',
                'year' => 2017,
                'publisher' => 'Gramedia',
                'city' => 'Bandung',
                'cover' => null,
                'quantity' => 0,
                'bookshelf_id' => 2,
                'created_at' => now(),
            ],
            [
                'title' => 'Semu (Fake)',
                'author' => 'Ele Fountain',
                'year' => 2018,
                'publisher' => 'Gramedia',
                'city' => 'Surabaya',
                'cover' => null,
                'quantity' => 0,
                'bookshelf_id' => 3,
                'created_at' => now(),
            ],
            [
                'title' => 'Orang Pertama Tunggal',
                'author' => 'Haruki Murakami',
                'year' => 2016,
                'publisher' => 'Gramedia',
                'city' => 'Jakarta',
                'cover' => null,
                'quantity' => 0,
                'bookshelf_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'Solo Leveling 3',
                'author' => 'Chugong None',
                'year' => 2015,
                'publisher' => 'Gramedia',
                'city' => 'Jakarta',
                'cover' => null,
                'quantity' => 0,
                'bookshelf_id' => 2,
                'created_at' => now(),
            ],
        ]);
    }
}
