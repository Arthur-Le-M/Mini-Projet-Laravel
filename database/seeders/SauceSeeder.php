<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SauceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insérer plusieurs sauces
        DB::table('sauces')->insert([
            'name' => 'Ketchup',
            'userID' => 1,
            'manufacturer' => 'Heinz',
            'description' => 'Ketchup is a sweet and tangy sauce that is a staple in many kitchens.',
            'mainPepper' => 'Tomato',
            'imgURL' => 'https://cdn.shopify.com/s/files/1/0020/9417/0167/products/heinz-sauce-ketchup-medium-01312403-33733864128675.jpg?crop=center&height=1200&v=1660369862&width=1200',
            'heat' => 0,
            'likes' => 0,
            'dislikes' => 0,
        ]);
        DB::table('sauces')->insert([
            'name' => 'Mayonnaise',
            'userID' => 1,
            'manufacturer' => 'Hellmann\'s',
            'description' => 'Mayonnaise is a creamy, tangy sauce that is made from eggs, oil, vinegar, and spices.',
            'mainPepper' => 'Egg',
            'imgURL' => 'https://media.carrefour.fr/medias/f4f1dc3ff37537e88ecc2b8a2c63fd2a/p_540x540/05000184321064-a1n1-s01.jpg',
            'heat' => 0,
            'likes' => 0,
            'dislikes' => 0,
        ]);
        DB::table('sauces')->insert([
            'name' => 'Sriracha',
            'userID' => 1,
            'manufacturer' => 'Huy Fong Foods',
            'description' => 'Sriracha is a spicy, tangy sauce that is made from chili peppers, garlic, vinegar, and sugar.',
            'mainPepper' => 'Chili Pepper',
            'imgURL' => 'https://produits.bienmanger.com/22589-0w470h470_Sauce_Piquante_Sriracha_Huy_Fong.jpg',
            'heat' => 5,
            'likes' => 0,
            'dislikes' => 0,
        ]);
        DB::table('sauces')->insert([
            'name' => 'Tabasco',
            'userID' => 1,
            'manufacturer' => 'McIlhenny Company',
            'description' => 'Tabasco is a spicy, tangy sauce that is made from chili peppers, vinegar, and salt.',
            'mainPepper' => 'Chili Pepper',
            'imgURL' => 'https://www.sauce-piquante.fr/213-large_default/tabasco-garlic-pepper.jpg',
            'heat' => 5,
            'likes' => 0,
            'dislikes' => 0,
        ]);
        DB::table('sauces')->insert([
            'name' => 'Salsa',
            'userID' => 1,
            'manufacturer' => 'La Victoria',
            'description' => 'Salsa is a spicy, tangy sauce that is made from tomatoes, chili peppers, onions, and garlic.',
            'mainPepper' => 'Chili Pepper',
            'imgURL' => 'https://www.salsas.com/la-victoria/wp-content/uploads/sites/3/2021/03/lavictoria-salsavictoria-hot600x600.png',
            'heat' => 5,
            'likes' => 0,
            'dislikes' => 0,
        ]);
        DB::table('sauces')->insert([
            'name' => 'BBQ Sauce',
            'userID' => 1,
            'manufacturer' => 'Sweet Baby Ray\'s',
            'description' => 'BBQ Sauce is a sweet, tangy sauce that is made from tomatoes, vinegar, and spices.',
            'mainPepper' => 'Tomato',
            'imgURL' => 'https://www.myamericanmarket.com/30289/sweet-baby-rays-bbq-sauce-original.jpg',
            'heat' => 0,
            'likes' => 0,
            'dislikes' => 0,
        ]);
        DB::table('sauces')->insert([
            'name' => 'Hot Sauce',
            'userID' => 1,
            'manufacturer' => 'Frank\'s RedHot',
            'description' => 'Hot Sauce is a spicy, tangy sauce that is made from chili peppers, vinegar, and spices.',
            'mainPepper' => 'Chili Pepper',
            'imgURL' => 'https://embed.widencdn.net/img/mccormick/q9cadt0e6z/400x600px/franks_redhot_original_united_states.png?crop=true&u=1o4a15',
            'heat' => 5,
            'likes' => 0,
            'dislikes' => 0,
        ]);
        DB::table('sauces')->insert([
            'name' => 'Ranch Dressing',
            'userID' => 1,
            'manufacturer' => 'Hidden Valley',
            'description' => 'Ranch Dressing is a creamy, tangy sauce that is made from buttermilk, sour cream, and spices.',
            'mainPepper' => 'Buttermilk',
            'imgURL' => 'https://www.myamericanmarket.com/27683-thickbox_default/hidden-valley-ranch-salad-dressing.jpg',
            'heat' => 0,
            'likes' => 0,
            'dislikes' => 0,
        ]);
        DB::table('sauces')->insert([
            'name' => 'Buffalo Sauce',
            'userID' => 1,
            'manufacturer' => 'Frank\'s RedHot',
            'description' => 'Buffalo Sauce is a spicy, tangy sauce that is made from chili peppers, vinegar, and spices.',
            'mainPepper' => 'Chili Pepper',
            'imgURL' => 'https://www.sauce-piquante.fr/2651-large_default/sauce-frank-s-wings-buffalo.jpg',
            'heat' => 5,
            'likes' => 0,
            'dislikes' => 0,
        ]);
        DB::table('sauces')->insert([
            'name' => 'Teriyaki Sauce',
            'userID' => 1,
            'manufacturer' => 'Kikkoman',
            'description' => 'Teriyaki Sauce is a sweet, tangy sauce that is made from soy sauce, sugar, and spices.',
            'mainPepper' => 'Soy Sauce',
            'imgURL' => 'https://media.carrefour.fr/medias/8265283bb5e9347dabafedcbf79029f8/p_540x540/08715035210301-c1n1-s01.jpg',
            'heat' => 0,
            'likes' => 0,
            'dislikes' => 0,
        ]);
    }
}
