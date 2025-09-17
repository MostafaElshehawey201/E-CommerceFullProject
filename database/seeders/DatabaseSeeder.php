<?php

namespace Database\Seeders;

use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class
        ]);
        User::factory()->create([
            'name' => 'Mostafa M Elshehwey',
            'email' => 'mostafamhmoud@gmail.com',
            "email_verified_at" => now(),
            'password'=>bcrypt("123654789"),
            'role_id'=>Role::where('name','SuperAdmin')->first(),
        ]);
    }
}
