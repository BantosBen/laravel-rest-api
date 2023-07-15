<?php

namespace Database\Seeders;

use App\Models\Person;
use Database\Factories\PersonFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Person::factory()
            ->count(50)
            ->create();
    }
}