<?php

use Illuminate\Database\Seeder;

class LangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('langs')->insert([
            [
                'name' => 'en',
                'title' => 'English',
            ],
            [
                'name' => 'fr',
                'title' => 'Franch',
            ],
            [
                'name' => 'de',
                'title' => 'Deutch',
            ],
        ]);
    }
}
