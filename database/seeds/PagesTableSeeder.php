<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
        [
            'parent_id' => NULL,
            'slug' => 'about',
            'url' => '/about',
            'status' => true,
            'page_title' => 'About Page',
            'page_h1' => 'About Page',
            'page_link' => 'About Page',
            'page_description' => 'About Page',

        ],
        [
            'parent_id' => NULL,
            'url' => '/info/contact',
            'slug' => 'contact',
            'status' => true,
            'page_title' => 'Contact Page',
            'page_h1' => 'Contact Page',
            'page_link' => 'Contact Page',
            'page_description' => 'Contact Page',
        ],
        [
            'parent_id' => NULL,
            'slug' => 'news',
            'url' => '/news',
            'status' => true,
            'page_title' => 'News Page',
            'page_h1' => 'News Page',
            'page_link' => 'News Page',
            'page_description' => 'News Page',
        ]
        ]);
    }
}
