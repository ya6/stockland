<?php

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'category' => 'Броши',
            'name' => 'Брош 1',
            'image' => 'brooch_1.jpg',
            'filter' => 'brooch',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('portfolios')->insert([
            'category' => 'Броши',
            'name' => 'Броши 2',
            'image' => 'brooch_2.jpg',
            'filter' => 'brooch',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('portfolios')->insert([
            'category' => 'Закладки',
            'name' => 'Закладки 3',
            'image' => 'bookmarks_2.jpg',
            'filter' => 'bookmark',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('portfolios')->insert([
            'category' => 'Серьги',
            'name' => 'Серьги 4',
            'image' => 'brooch_2.jpg',
            'filter' => 'earring',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('portfolios')->insert([
            'category' => 'Заколки',
            'name' => 'Заколки 5',
            'image' => 'brooch_1.jpg',
            'filter' => 'pin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('portfolios')->insert([
            'category' => 'Подвески',
            'name' => 'Подвески 6',
            'image' => 'brooch_2.jpg',
            'filter' => 'suspension',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('portfolios')->insert([
            'category' => 'Браслеты',
            'name' => 'Браслеты 7',
            'image' => 'bookmarks_2.jpg',
            'filter' => 'bracelet',
            'created_at' => now(),
            'updated_at' => now(),
        ]);




    }
}
