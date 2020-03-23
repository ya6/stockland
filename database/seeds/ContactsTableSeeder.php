<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'adress' => 'Это адрес',
            'phone' => '12-12-12',
            'email' => 'mail@mail.ru',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
