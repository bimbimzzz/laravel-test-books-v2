<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory(10)->create();
        Book::create([
            'title'=>'Book sukses',
            'serial number'=>'0045454',
            'published at'=>now(),
            'author_id'=> 5,


        ]);

        Book::create([
            'title'=>'Motivation Book',
            'serial number'=>'0048454',
            'published at'=>now(),
            'author_id'=> 5,


        ]);

        Book::create([
            'title'=>'Book sukses Nice',
            'serial number'=>'0045454',
            'published at'=>now(),
            'author_id'=> 5,

        ]);

        Book::create([
            'title'=>'Book Milyarder',
            'serial number'=>'0043454',
            'published at'=>now(),
            'author_id'=> 5,


        ]);

        Book::create([
            'title'=>'Arti kesuksesan',
            'serial number'=>'0095454',
            'published at'=>now(),
            'author_id'=> 5,

        ]);
    }
}
