<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('membres')->insert(
        [
            [
                'nom' => 'cactus',
                'age' => 24,
                'email' => 'bgfreestyleXx__bg1000@gmail.com',
                'telephone' => '0487684795'
            ],
            [
                'nom' => 'fanny',
                'age' => 56,
                'email' => 'fanny@gmail.com',
                'telephone' => '0325723275'
            ],
            [
                'nom' => 'kadri',
                'age' => 78,
                'email' => 'bald@gmail.com',
                'telephone' => '0568687895'
            ],
            [
                'nom' => 'martin',
                'age' => 29,
                'email' => 'kifesh@gmail.com',
                'telephone' => '0875588545'
            ]
        ]);
    }
}
