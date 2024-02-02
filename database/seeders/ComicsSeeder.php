<?php

namespace Database\Seeders;

use App\Models\ComicsModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = config('comicsdb');

        foreach ($datas as $data) {
            $comics = new ComicsModel();
            $comics->title = $data['title'];
            $comics->description = $data['description'];
            $comics->thumb = $data['thumb'];
            $comics->price = $data['price'];
            $comics->series = $data['series'];
            $comics->sale_date = $data['sale_date'];
            $comics->type = $data['type'];
            $comics->artists = $data['artists'];
            $comics->writers = $data['writers'];
            $comics->save();
        }
    }
}
