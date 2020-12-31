<?php

use App\Kesehatan;
use Illuminate\Database\Seeder;

class KesehatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kesehatan::create([
            'sehat' => 0,
            'sakit' => 0,
            'hamil' => 0,
        ]);
    }
}
