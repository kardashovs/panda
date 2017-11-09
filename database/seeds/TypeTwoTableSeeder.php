<?php

use Illuminate\Database\Seeder;

class TypeTwoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_twos')->insert([
            [
                'lang_id' => '1',
                'image' => 'английский урок 1 тип 2',
                'sound' => 'music',
                'key_true' => 'dog',
            ],
            [
                'lang_id' => '1',
                'image' => 'английский урок 2 тип 2',
                'sound' => 'music',
                'key_true' => 'cat',
            ],
            [
                'lang_id' => '2',
                'image' => 'французский урок 1 тип 2',
                'sound' => 'music',
                'key_true' => 'table',
            ],
            [
                'lang_id' => '2',
                'image' => 'французский урок 2 тип 2',
                'sound' => 'music',
                'key_true' => 'apple',
            ],
            [
                'lang_id' => '3',
                'image' => 'немецкий урок 1 тип 2',
                'sound' => 'music',
                'key_true' => 'dog',
            ],
        ]);
    }
}
