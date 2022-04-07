<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Event;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Department::create([
            'name' => '技術'
        ]);

        Department::create([
            'name' => '設計'
        ]);

        Department::create([
            'name' => 'PM'
        ]);

        Event::factory(3)->create();
    }
}
