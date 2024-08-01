<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;
use Faker\Generator as Faker;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $animalData = $this->getCsv(__DIR__.'/../../resources/assets/animals.csv');

        foreach ($animalData as $singleAnimal) {
            $newAnimal = new Animal();
            $newAnimal->nome = $singleAnimal[0];
            $newAnimal->specie = $singleAnimal[1];
            $newAnimal->razza = $singleAnimal[2];
            $newAnimal->eta = $singleAnimal[3];
            $newAnimal->sesso = $singleAnimal[4];
            $newAnimal->colore = $singleAnimal[5];
            $newAnimal->peso = $singleAnimal[6];
            $newAnimal->altezza = $singleAnimal[7];
            $newAnimal->url_img = $faker->imageUrl(640, 480, 'animals', true);
            $newAnimal->note = $singleAnimal[9];
            $newAnimal->save();
        }
    }

    public function getCsv($filePath){
        $csvData = [];
        $fileData = fopen($filePath, 'r');

        if($fileData === false){
            throw new InvalidArgumentException('File non trovato');
        };

        fgetcsv($fileData);

        while(($csvRow = fgetcsv($fileData)) !== false){
            $csvData[] = $csvRow;
        };
        fclose($fileData);
        return $csvData;
    }
}
