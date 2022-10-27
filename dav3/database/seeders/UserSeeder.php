<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('yt')->insert([
            'link' => "https://www.youtube.com/watch?v=g1wr0DfV73E",
            'title' => "God of War Ragnarök - Launch Trailer | PS5 & PS4 Games",
            'likes' => 22000,
        ]);
        DB::table('yt')->insert([
            'link' => "https://www.youtube.com/watch?v=FO3wwxmaPkc",
            'title' => "BREAKING NEWS: House of the Dragon Season 2 Coming Soon | House of the Dragon Release Date!",
            'likes' => 8200,
        ]);
        DB::table('yt')->insert([
            'link' => "https://www.youtube.com/watch?v=ujSHspJSErA",
            'title' => "Robert Baratheon Being a Meme for 4 Minutes Straight",
            'likes' => 68000,
        ]);
        DB::table('yt')->insert([
            'link' => "https://www.youtube.com/watch?v=oh1BAsRfVxE",
            'title' => "GoT Season 8 BUT It's Full of Memes",
            'likes' => 59000,
        ]);
        DB::table('yt')->insert([
            'link' => "https://www.youtube.com/watch?v=XZaJ59qtct8",
            'title' => "GoT Season 8 BUT It's Full of Memes 2",
            'likes' => 24000,
        ]);


    }
}
