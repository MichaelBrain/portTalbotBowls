<?php

use Illuminate\Database\Seeder;

class ChampionshipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run() {
        DB::table('championship')->insert([
            'team' => 'Pontardawe',
            'gamesPlayed' => '10',
            'shotDifference' => '321',
            'points' => '175',
        ]);

        DB::table('championship')->insert([
            'team' => 'Port Talbot',
            'gamesPlayed' => '10',
            'shotDifference' => '576',
            'points' => '171',
        ]);

        DB::table('championship')->insert([
            'team' => 'Earlswood',
            'gamesPlayed' => '9',
            'shotDifference' => '60',
            'points' => '107',
        ]);

        DB::table('championship')->insert([
            'team' => 'Dinefwr',
            'gamesPlayed' => '9',
            'shotDifference' => '-146',
            'points' => '86',
        ]);

        DB::table('championship')->insert([
            'team' => 'Pembroke',
            'gamesPlayed' => '9',
            'shotDifference' => '-262',
            'points' => '53',
        ]);

        DB::table('championship')->insert([
            'team' => 'Bro Myddin',
            'gamesPlayed' => '9',
            'shotDifference' => '-429',
            'points' => '24',
        ]);
    }
}
