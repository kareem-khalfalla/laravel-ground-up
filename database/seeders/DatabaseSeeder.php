<?php

namespace Database\Seeders;

use App\Models\Role;
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
        Role::create([
            'name' => 'delete_user',
        ]);
        Role::create([
            'name' => 'add_user',
        ]);
        Role::create([
            'name' => 'modify_user',
        ]);
        Role::create([
            'name' => 'edit_comments',
        ]);
        Role::create([
            'name' => 'delete_comments',
        ]);
    }
}
