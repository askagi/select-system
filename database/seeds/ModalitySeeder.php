<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class ModalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(\App\Modality::class, 10)->create();
    }
}
