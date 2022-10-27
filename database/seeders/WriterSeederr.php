<?php

namespace Database\Seeders;

use App\Models\Writer;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\ErrorHandler\Error\FatalError;

class WriterSeederr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakerID = Factory::create("id_ID");
        $fakerFR = Factory::create("id_FR");
        $fakerIT = Factory::create("id_IT");
        $fakerRU = Factory::create("id_RU");
        $fakerUS = Factory::create("id_US");


        Writer::factory()->create([
            "contact"=> $fakerID->phoneNumber,
            "negara"=> $fakerID->country,
            "deskripsi" => $fakerID-> text,
            "image" => 'foto1.jpg'
        ]);

        Writer::factory()->create([
            "contact"=> $fakerFR->phoneNumber,
            "negara"=> $fakerFR->country,
            "deskripsi" => $fakerFR-> text,
            "image" => 'foto2.jpg'
        ]);

        Writer::factory()->create([
            "contact"=> $fakerIT->phoneNumber,
            "negara"=> $fakerIT->country,
            "deskripsi" => $fakerIT-> text,
            "image" => 'foto3.jpg'
        ]);

        Writer::factory()->create([
            "contact"=> $fakerRU->phoneNumber,
            "negara"=> $fakerRU->country,
            "deskripsi" => $fakerRU-> text,
            "image" => 'foto4.jpg'
        ]);

        Writer::factory()->create([
            "contact"=> $fakerUS->phoneNumber,
            "negara"=> $fakerUS->country,
            "deskripsi" => $fakerUS-> text,
            "image" => 'foto5.jpg'
        ]);
    }
}
