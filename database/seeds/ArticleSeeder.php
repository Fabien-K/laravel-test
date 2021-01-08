<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
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
            $article->title= 'mon titre SeeD numéro '. $i;
            $article->content= 'Contenu test';
            $article->save();
        }

    }
}
