<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layanans')->insert([

            ['jenis' => 'Konsultasi Gigi'],
            ['jenis' => 'Prostetik'],
            ['jenis' => 'Pencabutan Gigi'],
            ['jenis' => 'Pemasangan Behel'],
            ['jenis' => 'Scaling'],

        ]);

    }
}