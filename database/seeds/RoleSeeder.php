<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * php artisan db:seed --class=RoleSeeder
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            ['role' => 'admin'],
            ['role' => 'user']
        ]);
    }
}
