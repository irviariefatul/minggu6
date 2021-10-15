<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710036',
            'name' => 'Irvi Ariefatul Julia Putri',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '081335098272',
        ]);

        DB::table('students')->insert([
            'nim' => '2031710044',
            'name' => 'Luvi Anggraini',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '085806259859',
        ]);

        DB::table('students')->insert([
            'nim' => '2031710006',
            'name' => 'Mareta Rosa Anjellina',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '085806259859',
        ]);
    }
}
