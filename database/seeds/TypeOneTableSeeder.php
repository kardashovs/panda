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
                'image' => 'images/dog.jpg',
                'sound' => 'dog-music',
                'key_true' => 'dog',
            ],
            [
                'image' => 'английский урок 2 тип 1',
                'sound' => 'music',
                'key_true' => 'cat',
            ],
            [
                'image' => 'французский урок 1 тип 1',
                'sound' => 'music',
                'key_true' => 'table',
            ],
            [
                'image' => 'французский урок 2 тип 1',
                'sound' => 'music',
                'key_true' => 'apple',
            ],
            [
                'image' => 'немецкий урок 1 тип 1',
                'sound' => 'music',
                'key_true' => 'cat',
            ],
        ]);
    }
}
