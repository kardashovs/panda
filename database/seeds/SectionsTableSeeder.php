<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            [
                'name' => 'level-1',
                'lang_id' => '1',
                'title' => 'Level 1',
                'sort' => 1
            ],
            [
                'name' => 'level-2',
                'lang_id' => '1',
                'title' => 'Level 2',
                'sort' => 2
            ],
            [
                'name' => 'niveau-1',
                'lang_id' => '2',
                'title' => 'niveau 1',
                'sort' => 1
            ],
            [
                'name' => 'niveau-2',
                'lang_id' => '2',
                'title' => 'niveau 2',
                'sort' => 2
            ],
            [
                'name' => 'stufe-1',
                'lang_id' => '3',
                'title' => 'Stufe 1',
                'sort' => 1
            ],

        ]);
    }
}
