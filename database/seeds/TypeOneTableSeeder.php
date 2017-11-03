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
                'lang_id' => '1',
                'image' => 'английский урок 1 тип 1',
                'sound' => 'music',
                'key_true' => 'while',
            ],
            [
                'lang_id' => '1',
                'image' => 'английский урок 2 тип 1',
                'sound' => 'music',
                'key_true' => 'while',
            ],
            [
                'lang_id' => '2',
                'image' => 'французский урок 1 тип 1',
                'sound' => 'music',
                'key_true' => 'while',
            ],
            [
                'lang_id' => '2',
                'image' => 'французский урок 2 тип 1',
                'sound' => 'music',
                'key_true' => 'while',
            ],
            [
                'lang_id' => '3',
                'image' => 'немецкий урок 1 тип 1',
                'sound' => 'music',
                'key_true' => 'while',
            ],
        ]);
    }
}
