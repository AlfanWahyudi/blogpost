<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    private $table = 'posts';

    public function run(): void
    {
        DB::table($this->table)->insert([
            [
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'Lorem, ipsum Title 1',
                'slug' => 'lorem-1',
                'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis consequatur dolores molestiae rem, amet ratione.',
                'likes' => 10,
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ex distinctio explicabo mollitia recusandae nemo beatae totam neque odit corporis consectetur similique rem ratione, magnam, amet eos illum vero eveniet ut deserunt in quis veritatis quae! Quo cumque sed deserunt. Aut, laborum ex aliquam nam rerum at iusto doloribus explicabo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi tempore et aspernatur, delectus reiciendis quis vero commodi doloribus quos blanditiis nemo cupiditate explicabo perspiciatis, repudiandae veniam itaque praesentium mollitia molestiae odio pariatur eos atque. Accusantium corporis eligendi dicta maiores. Aliquam, quis! Reiciendis ex, quod distinctio ea esse nihil itaque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi tempore et aspernatur, delectus reiciendis quis vero commodi doloribus quos blanditiis nemo cupiditate explicabo perspiciatis, repudiandae veniam itaque praesentium mollitia molestiae odio pariatur eos atque. Accusantium corporis eligendi dicta maiores. Aliquam, quis! Reiciendis ex, quod distinctio ea esse nihil itaque.</p>',
            ],
            [
                'user_id' => 3,
                'category_id' => 3,
                'title' => 'Lorem, ipsum Title laborum ex aliquam nam rerum at',
                'slug' => 'lorem-5',
                'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis consequatur dolores molestiae rem, amet ratione.',
                'likes' => 30,
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ex distinctio explicabo mollitia recusandae nemo beatae totam neque odit corporis consectetur similique rem ratione, magnam, amet eos illum vero eveniet ut deserunt in quis veritatis quae! Quo cumque sed deserunt. Aut, laborum ex aliquam nam rerum at iusto doloribus explicabo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi tempore et aspernatur, delectus reiciendis quis vero commodi doloribus quos blanditiis nemo cupiditate explicabo perspiciatis, repudiandae veniam itaque praesentium mollitia molestiae odio pariatur eos atque. Accusantium corporis eligendi dicta maiores. Aliquam, quis! Reiciendis ex, quod distinctio ea esse nihil itaque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi tempore et aspernatur, delectus reiciendis quis vero commodi doloribus quos blanditiis nemo cupiditate explicabo perspiciatis, repudiandae veniam itaque praesentium mollitia molestiae odio pariatur eos atque. Accusantium corporis eligendi dicta maiores. Aliquam, quis! Reiciendis ex, quod distinctio ea esse nihil itaque.</p>',
            ],
        ]);


        DB::table($this->table)->insert([
            [
                'user_id' => 1,
                'category_id' => 2,
                'title' => 'Lorem ipsum Title Ullam excepturi tempore et aspernatur',
                'slug' => 'lorem-2',
                'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis consequatur dolores molestiae rem, amet ratione.',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ex distinctio explicabo mollitia recusandae nemo beatae totam neque odit corporis consectetur similique rem ratione, magnam, amet eos illum vero eveniet ut deserunt in quis veritatis quae! Quo cumque sed deserunt. Aut, laborum ex aliquam nam rerum at iusto doloribus explicabo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi tempore et aspernatur, delectus reiciendis quis vero commodi doloribus quos blanditiis nemo cupiditate explicabo perspiciatis, repudiandae veniam itaque praesentium mollitia molestiae odio pariatur eos atque. Accusantium corporis eligendi dicta maiores. Aliquam, quis! Reiciendis ex, quod distinctio ea esse nihil itaque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi tempore et aspernatur, delectus reiciendis quis vero commodi doloribus quos blanditiis nemo cupiditate explicabo perspiciatis, repudiandae veniam itaque praesentium mollitia molestiae odio pariatur eos atque. Accusantium corporis eligendi dicta maiores. Aliquam, quis! Reiciendis ex, quod distinctio ea esse nihil itaque.</p>',
            ],
            [
                'user_id' => 2,
                'category_id' => 3,
                'title' => 'Lorem Title ipsum laborum ex aliquam nam rerum at iusto doloribus explicabo',
                'slug' => 'lorem-3',
                'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis consequatur dolores molestiae rem, amet ratione.',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ex distinctio explicabo mollitia recusandae nemo beatae totam neque odit corporis consectetur similique rem ratione, magnam, amet eos illum vero eveniet ut deserunt in quis veritatis quae! Quo cumque sed deserunt. Aut, laborum ex aliquam nam rerum at iusto doloribus explicabo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi tempore et aspernatur, delectus reiciendis quis vero commodi doloribus quos blanditiis nemo cupiditate explicabo perspiciatis, repudiandae veniam itaque praesentium mollitia molestiae odio pariatur eos atque. Accusantium corporis eligendi dicta maiores. Aliquam, quis! Reiciendis ex, quod distinctio ea esse nihil itaque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi tempore et aspernatur, delectus reiciendis quis vero commodi doloribus quos blanditiis nemo cupiditate explicabo perspiciatis, repudiandae veniam itaque praesentium mollitia molestiae odio pariatur eos atque. Accusantium corporis eligendi dicta maiores. Aliquam, quis! Reiciendis ex, quod distinctio ea esse nihil itaque.</p>',
            ],
            [
                'user_id' => 2,
                'category_id' => 2,
                'title' => 'Lorem Title ipsum dolor Accusantium corporis eligendi dicta maiores',
                'slug' => 'lorem-4',
                'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis consequatur dolores molestiae rem, amet ratione.',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ex distinctio explicabo mollitia recusandae nemo beatae totam neque odit corporis consectetur similique rem ratione, magnam, amet eos illum vero eveniet ut deserunt in quis veritatis quae! Quo cumque sed deserunt. Aut, laborum ex aliquam nam rerum at iusto doloribus explicabo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi tempore et aspernatur, delectus reiciendis quis vero commodi doloribus quos blanditiis nemo cupiditate explicabo perspiciatis, repudiandae veniam itaque praesentium mollitia molestiae odio pariatur eos atque. Accusantium corporis eligendi dicta maiores. Aliquam, quis! Reiciendis ex, quod distinctio ea esse nihil itaque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi tempore et aspernatur, delectus reiciendis quis vero commodi doloribus quos blanditiis nemo cupiditate explicabo perspiciatis, repudiandae veniam itaque praesentium mollitia molestiae odio pariatur eos atque. Accusantium corporis eligendi dicta maiores. Aliquam, quis! Reiciendis ex, quod distinctio ea esse nihil itaque.</p>',
            ],
        ]);
    }
}
