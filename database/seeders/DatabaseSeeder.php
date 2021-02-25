<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(5)->create([
        //     'name' => Str::random(10),
        //     'email' => Str::random(3).'@gmail.com',
        //     'password' => Hash::make('password'),
        //  ]);

        //  \App\Models\Page::factory(10)->create([
        //     'title' => Str::random(10),
        //     'author_id' => $this->randomAuthorID,
        //     'slug' => $this->randomAuthorID,
        //     'email' => Str::random(3).'@gmail.com',
        //     'password' => Hash::make('password'),
        //  ]);


    }

    // private function randomAuthorID(){
    //     $user=\App\Models\User::inRandomOrder()->first();
    //     return $user->id;
    // }

    // private function randomTitle(){
    //     $page
    //     return $user->id;
    // }
}
