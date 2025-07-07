<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::insert([
            [
                'name' => 'Nasi Bento Fav 1',
                'slug' => 'nasi-bento-fav-1',
                'thumbnail' => 'img/bentofav1.png',
                'description' => 'Spicy Chicken, 2 Egg Roll',
                'price' => '15000'    
            ],
            [
                'name' => 'Nasi Bento Fav 2',
                'slug' => 'nasi-bento-fav-2',
                'thumbnail' => 'img/bentofav2.png',
                'description' => 'Shrimp Roll, Chicken Stick, Egg Roll',
                'price' => '17000'   
            ],
            [
                'name' => 'Nasi Bento Fav 3',
                'slug' => 'nasi-bento-fav-3',
                'thumbnail' => 'img/bentofav3.png',
                'description' => 'Shrimp Roll, Spicy Chix, Egg Roll',
                'price' => '20000'   
            ],
            [
                'name' => 'Nasi Bento Fav 4',
                'slug' => 'nasi-bento-fav-4',
                'thumbnail' => 'img/bentofav4.png',
                'description' => 'Ebi Furay, Shrimp Roll, Spicy Chix, Egg Roll',
                'price' => '23000'
            ],
            [
                'name' => 'Nasi Bento Fav 5',
                'slug' => 'nasi-bento-fav-5',
                'thumbnail' => 'img/bentofav5.png',
                'description' => 'Ebi Furay, Shrimp Roll, Egg Roll',
                'price' => '20000'
            ],
            [
                'name' => 'Nasi Bento Fav 6',
                'slug' => 'nasi-bento-fav-6',
                'thumbnail' => 'img/bentofav6.png',
                'description' => 'Shrimp Roll, Chicken Stik, Chicken Spicy',
                'price' => '18000'
            ],
            [
                'name' => 'Nasi Bento Chicken Katsu Geprek',
                'slug' => 'nasi-bento-chicken-katsu-geprek',
                'thumbnail' => 'img/katsugeprek.png',
                'description' => 'Nasi Bento dengan Chicken Katsu yang Digeprek',
                'price' => '15000'
            ],
            [
                'name' => 'Nasi Bento Chicken Katsu Saus Teriyaki',
                'slug' => 'nasi-bento-chicken-katsu-saus-teriyaki',
                'thumbnail' => 'img/katsuteriyaki.png',
                'description' => 'Nasi Bento dengan Chicken Katsu dan Saus Teriyaki',
                'price' => '18000'
            ],
            [
                'name' => 'Nasi Bento Chicken Teriyaki',
                'slug' => 'nasi-bento-chicken-teriyaki',
                'thumbnail' => 'img/chickenteriyaki.png',
                'description' => 'Nasi Bento dengan Chicken Teriyaki',
                'price' => '20000'
            ],
            [
                'name' => 'Aneka Mie Instan',
                'slug' => 'mie-instan',
                'thumbnail' => 'img/mieinstan.png',
                'description' => 'Beragam Mie Instan Seduh, Dengan Telur dan Sawi',
                'price' => '6000'
            ]
        ]);
    }
}
