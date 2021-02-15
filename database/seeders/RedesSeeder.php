<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RedesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<5; $i++)
            DB::table('links')->insert([
                'label'   => $faker->catchPhrase(),
                'url'     => $faker->url(),
                'user_id' => 1,
            ]);
    }
}
