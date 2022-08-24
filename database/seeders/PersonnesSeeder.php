<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Personnes')->insert([[
            'nom' => 'Faisal',
            'age' => '26',
            'email' => 'test@example.com',
            'tel' => '0486246589',
        ],
        [
            'nom' => 'Kevin',
            'age' => '26',
            'email' => 'test@example.com',
            'tel' => '0486246589',
        ],
        [
            'nom' => 'Khadri',
            'age' => '26',
            'email' => 'test@example.com',
            'tel' => '0486246589',
        ],[
            'nom' => 'Faisal',
            'age' => '26',
            'email' => 'test@example.com',
            'tel' => '0486246589',
        ],
        [
            'nom' => 'Kevin',
            'age' => '26',
            'email' => 'test@example.com',
            'tel' => '0486246589',
        ],
        [
            'nom' => 'Khadri',
            'age' => '26',
            'email' => 'test@example.com',
            'tel' => '0486246589',
        ]]);
    }
}
