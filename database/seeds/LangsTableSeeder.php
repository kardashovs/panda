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
                'image' => 'assets/images/flags/en.png'
            ],
            [
                'name' => 'fr',
                'title' => 'Franch',
                'image' => 'assets/images/flags/fr.png'
            ],
            [
                'name' => 'de',
                'title' => 'Deutch',
                'image' => 'assets/images/flags/de.png'
            ],
        ]);
    }
}
