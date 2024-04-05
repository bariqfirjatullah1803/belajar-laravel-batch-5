<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = Role::all();
        $roleNames = $roles->pluck('name')->toArray();

        User::factory(100)->create()->each(function ($user) use ($roleNames) {
            $roleIndex = array_rand($roleNames, 1);
            $user->assignRole($roleNames[$roleIndex]);
        });
    }
}
