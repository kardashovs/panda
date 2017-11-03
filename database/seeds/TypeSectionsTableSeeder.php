<?php

use Illuminate\Database\Seeder;

class TypeSectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_sections')->insert([
            [
                'typeable_id' => '1',
                'typeable_type' => 'App\Models\TypeOne',
                'section_id' => '1',
            ],
            [
                'typeable_id' => '2',
                'typeable_type' => 'App\Models\TypeOne',
                'section_id' => '2',
            ],
            [
                'typeable_id' => '1',
                'typeable_type' => 'App\Models\TypeTwo',
                'section_id' => '1',
            ],
            [
                'typeable_id' => '2',
                'typeable_type' => 'App\Models\TypeTwo',
                'section_id' => '2',
            ],
            [
                'typeable_id' => '3',
                'typeable_type' => 'App\Models\TypeOne',
                'section_id' => '3',
            ],
            [
                'typeable_id' => '4',
                'typeable_type' => 'App\Models\TypeOne',
                'section_id' => '4',
            ],
            [
                'typeable_id' => '3',
                'typeable_type' => 'App\Models\TypeTwo',
                'section_id' => '3',
            ],
            [
                'typeable_id' => '4',
                'typeable_type' => 'App\Models\TypeTwo',
                'section_id' => '4',
            ],
            [
                'typeable_id' => '5',
                'typeable_type' => 'App\Models\TypeTwo',
                'section_id' => '5',
            ],
            [
                'typeable_id' => '5',
                'typeable_type' => 'App\Models\TypeOne',
                'section_id' => '5',
            ],
        ]);
    }
}
