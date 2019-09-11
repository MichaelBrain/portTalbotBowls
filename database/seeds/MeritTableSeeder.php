<?php

use Illuminate\Database\Seeder;

class MeritTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merit')->insert([
            'team' => 'Port Talbot',
            'gamesPlayed' => '8',
            'shotDifference' => '12',
            'points' => '100',
        ]);

        DB::table('merit')->insert([
            'team' => 'Llanelli',
            'gamesPlayed' => '9',
            'shotDifference' => '26',
            'points' => '96',
        ]);

        DB::table('merit')->insert([
            'team' => 'Merthyr Tydfil',
            'gamesPlayed' => '7',
            'shotDifference' => '60',
            'points' => '86',
        ]);

        DB::table('merit')->insert([
            'team' => 'Swansea',
            'gamesPlayed' => '7',
            'shotDifference' => '-4',
            'points' => '77',
        ]);

        DB::table('merit')->insert([
            'team' => 'Ogwr',
            'gamesPlayed' => '5',
            'shotDifference' => '90',
            'points' => '72',
        ]);

        DB::table('merit')->insert([
            'team' => 'Dinefwr',
            'gamesPlayed' => '6',
            'shotDifference' => '33',
            'points' => '71',
        ]);

        DB::table('merit')->insert([
            'team' => 'Earlswood',
            'gamesPlayed' => '8',
            'shotDifference' => '-218',
            'points' => '36',
        ]);
    }
}
