<?php

namespace Database\Seeders;

use App\Models\tweets;
use Illuminate\Database\Seeder;


class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tweets::factory(tweets::class, 15)-> create();
    }
}
