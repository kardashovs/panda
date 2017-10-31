<?php

use Illuminate\Database\Seeder;

class TypeOneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_ones')->insert([
            [
                'section_id' => '1',
                'lang_id' => '1',
                'image' => 'http://bazarpnz.ru/photos/bazar/d7/19929347/19929347_0.jpg',
                'sound' => 'music',
                'key_true' => 'while',
                'text_body' => '{"keys":{"0": "home","1": "while","2": "apple","3": "sun"}}',
                'type' => 'test1'
            ],
        ]);
    }
}
