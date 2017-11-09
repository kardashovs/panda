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
                'image' => 'images/dog.jpg',
                'sound' => 'music',
                'key_true' => 'dog',
            ],
            [
                'image' => 'images/cat.jpg',
                'sound' => 'music',
                'key_true' => 'cat',
            ],
            [
                'image' => 'images/table.jpg',
                'sound' => 'music',
                'key_true' => 'table',
            ],
            [
                'image' => 'images/apple.jpg',
                'sound' => 'music',
                'key_true' => 'apple',
            ],
            [
                'image' => 'images/dog.jpg',
                'sound' => 'music',
                'key_true' => 'dog',
            ],
        ]);
    }
}
