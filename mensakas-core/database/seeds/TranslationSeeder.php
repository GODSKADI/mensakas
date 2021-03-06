<?php

use Illuminate\Database\Seeder;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->language();
        $this->tag();
        $this->tagTranslation();
        $this->category();
        $this->categoryTranslation();
    }

    public function language()
    {
        DB::table('language')->insert([
            'id' => 1,
            'language' => 'es'
        ]);
        DB::table('language')->insert([
            'id' => 2,
            'language' => 'cat'
        ]);
        DB::table('language')->insert([
            'id' => 3,
            'language' => 'en'
        ]);
    }

    public function tag()
    {
        DB::table('tag')->insert([
            'id' => 1
        ]);
        DB::table('tag')->insert([
            'id' => 2
        ]);
        DB::table('tag')->insert([
            'id' => 3
        ]);
    }

    public function tagTranslation()
    {

        //Extra tag
        DB::table('tag_translation')->insert([
            'id' => 1,
            'language_id' => 1,
            'tag_id' => 1,
            'tag_name' => "extra"
        ]);

        //Menu tag
        DB::table('tag_translation')->insert([
            'id' => 2,
            'language_id' => 1,
            'tag_id' => 2,
            'tag_name' => "menu"
        ]);

        //Tag
        DB::table('tag_translation')->insert([
            'id' => 3,
            'language_id' => 1,
            'tag_id' => 3,
            'tag_name' => "comida rapida"
        ]);
        DB::table('tag_translation')->insert([
            'id' => 4,
            'language_id' => 2,
            'tag_id' => 3,
            'tag_name' => "menjar rapid"
        ]);
        DB::table('tag_translation')->insert([
            'id' => 5,
            'language_id' => 3,
            'tag_id' => 3,
            'tag_name' => "fast food"
        ]);
    }

    public function category()
    {
        DB::table('category')->insert([
            'id' => 1
        ]);
        DB::table('category')->insert([
            'id' => 2
        ]);
        DB::table('category')->insert([
            'id' => 3
        ]);
    }

    public function categoryTranslation()
    {
        DB::table('category_translation')->insert([
            'id' => 1,
            'language_id' => 1,
            'category_id' => 1,
            'category' => "italiano"
        ]);
        DB::table('category_translation')->insert([
            'id' => 2,
            'language_id' => 2,
            'category_id' => 1,
            'category' => "italia"
        ]);
        DB::table('category_translation')->insert([
            'id' => 3,
            'language_id' => 3,
            'category_id' => 1,
            'category' => "italian"
        ]);
    }
}
