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
                'name' => 'section-one',
                'lang_id' => '1',
                'title' => 'Block One',
                'sort' => 1
            ],
            [
                'name' => 'section-two',
                'lang_id' => '1',
                'title' => 'Block Two',
                'sort' => 2
            ],
            [
                'name' => 'franch-one',
                'lang_id' => '2',
                'title' => 'Block Franch One',
                'sort' => 1
            ],
            [
                'name' => 'franch-two',
                'lang_id' => '2',
                'title' => 'Block Franch Two',
                'sort' => 1
            ],
            [
                'name' => 'deugch-one',
                'lang_id' => '3',
                'title' => 'Block Deutch One',
                'sort' => 1
            ],

        ]);
    }
}
