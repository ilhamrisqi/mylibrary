<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Writer;
use Faker\Factory;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        $fakerID = Factory::create("id_ID");
        $fakerFR = Factory::create("id_FR");
        $fakerIT = Factory::create("id_IT");
        $fakerRU = Factory::create("id_RU");
        $fakerUS = Factory::create("id_US");






        $index =0;
        foreach(Writer::all() as $writer){

            if($index ==0){
                Book::factory()-> create([
                    'title'=>$fakerID->text,
                    'synopsis'=>'Synopsis Buku Penulis 1',
                    'writer_name'=> $writer->nama,
                ]);
            }else if($index==1){
                Book::factory()-> create([
                    'title'=>$fakerID->text,
                    'synopsis'=>'Synopsis Buku Penulis 2',
                    'writer_name'=> $writer->nama,
                ]);
            }else if($index==2){
                Book::factory()-> create([
                    'title'=>$fakerID->text,
                    'synopsis'=>'Synopsis Buku Penulis 3',
                    'writer_name'=> $writer->nama,
                ]);
            }else if($index==3){
                Book::factory()-> create([
                    'title'=>$fakerID->text,
                    'synopsis'=>'Synopsis Buku Penulis 4',
                    'writer_name'=> $writer->nama,
                ]);
            }else if($index==4){
                Book::factory()-> create([
                    'title'=>$fakerID->text,
                    'synopsis'=>'Synopsis Buku Penulis 5',
                    'writer_name'=> $writer->nama,
                ]);
            }
            $index++;

        }

    }
}
