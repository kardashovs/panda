<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            [
                'title' => 'Название первого типа уроков',
                'description' => 'Описание второго типа уроков',
                'template' => 'type-one',
            ],[
                'title' => 'Название первого типа уроков',
                'description' => 'Описание второго типа уроков',
                'template' => 'type-two',
            ],

        ]);
    }
}
