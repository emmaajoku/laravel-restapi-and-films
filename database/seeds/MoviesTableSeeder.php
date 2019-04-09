<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'name' => "Avengers Infinity War",
            'release_year'  => "2018",
             'image'     => 'https://upload.wikimedia.org/wikipedia/en/4/4d/Avengers_Infinity_War_poster.jpg',
            'description'         => 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.',
            'country'      => 'USA',
            'ticket_price' => '6000',
            'genre' => 'Action, Fiction, scientific',
            'films_id'      => 'tt4154756'
        ]);

        DB::table('movies')->insert([
            'name' => "The Incredible Hulk",
            'release_year'  => "2008",
            'ticket_price' => '6000',
            'image'     => 'https://m.media-amazon.com/images/M/MV5BMTUyNzk3MjA1OF5BMl5BanBnXkFtZTcwMTE1Njg2MQ@@._V1_UX182_CR0,0,182,268_AL__QL50.jpg',
            'description'  => 'Bruce Banner, a scientist on the run from the U.S. Government, must find a cure for the monster he turns into, whenever he loses his temper. ',
            'country'      => 'USA',
            'genre' => 'Action, Fiction',
            'films_id'      => 'tt0800080'
        ]);
    }
}
