<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Knjiga;
use App\Models\Pozajmica;
use App\Models\Clan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Clan::truncate();
        Knjiga::truncate();
        Pozajmica::truncate();

        Clan::factory()
            ->count(15)
            ->create();

        Knjiga::factory()
            ->count(15)
            ->create();

        Pozajmica::factory()
            ->count(15)
            ->create();



    }
}