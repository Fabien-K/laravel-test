<?php

use App\Article;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 30; $i++) { 
            $article = new Article();
            $article->title= 'Data SeeD numéro '. $i;
            $article->content= 'Contenu Data';
            $article->save();
        }
    }
}
