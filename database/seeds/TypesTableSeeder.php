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
                'title' => 'Словарь',
                'description' => 'Выберите один из 4 представленных ответов, который подходит под описание картинки',
                'template' => 'type-one',
            ],
            [
                'title' => 'Проверка правописания слов',
                'description' => 'В данном уроке требуется ввести ответ в поле для ввода. Введите правильный ответ в 
                соответствии с картинкой.',
                'template' => 'type-two',
            ]
        ]);
    }
}
