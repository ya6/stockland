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
            'name' => 'Главная',
            'alias' => 'hero_section',
            'title' => 'Бижутерия и аксессуары <br> ручной работы',
            'text' => '
           
            ',
            'logo' => 'logo2.png',
            'image' => 'necklace1.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pages')->insert([
            'name' => 'Обо мне',
            'alias' => 'aboutUs',
            'title' => 'Здравствуйте! Меня зовут Юлия.',
            'text' => 'Я занимаюсь изготовлением  различных  украшений и 
            аксессуаров, используя в работе бусины и бисер, натуральные 
            камни, стразы и пайетки.....<br>
            
            Большинство моих изделий существует в единственном экземпляре,
            точный повтор не возможен.<br>
             
            В галерее вы можете увидеть мои работы, выбрать из готового или заказать
            украшение на свой вкус.
           
            ',
            'logo' => '',
            'image' => 'about_img.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pages')->insert([
            'name' => 'Это интересно',
            'alias' => 'service',
            'title' => '',
            'text' => '',
            'logo' => '',
            'image' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pages')->insert([
            'name' => 'Галерея',
            'alias' => 'portfolio',
            'title' => '',
            'text' => '',
            'logo' => '',
            'image' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pages')->insert([
            'name' => 'Напишите мне',
            'alias' => 'contact',
            'title' => '',
            'text' => '',
            'logo' => '',
            'image' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
