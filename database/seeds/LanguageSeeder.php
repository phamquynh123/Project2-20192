<?php

use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            [ 'name' => 'Tiếng Việt', 'acronym' => 'vi' ],
            [ 'name' => 'English', 'acronym' => 'en' ],
            [ 'name' => 'Japan', 'acronym' => 'jp' ]
        ]);
    }
}
