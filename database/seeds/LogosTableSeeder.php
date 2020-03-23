<?php

use Illuminate\Database\Seeder;

class LogosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logos')->insert([
            'logo' => 'logo1.png',
            'width' => 250,
            
            
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
