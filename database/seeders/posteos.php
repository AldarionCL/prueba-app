<?php

namespace Database\Seeders;

use App\Models\Coments;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class posteos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)
            ->has(Posts::factory()
                ->has(Coments::factory()->count(10)
                )->count(20)
            )->create();
    }
}
