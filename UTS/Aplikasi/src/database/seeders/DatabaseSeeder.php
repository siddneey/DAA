<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kendaraan;
use App\Models\User;


class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->seedUsers();
        $this->callSeeders();
    }

    private function seedUsers(): void
    {
        if(!User::where('email', 'admin@admin.com')->exists())
        {
            $users = User::factory()->createMany([
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ]
        ]);

        foreach($users as $user){
            if($user->email =='admin@admin.com' ){
                $user->assignRole('super_admin');
                }
            }
        }
    }


    private function callSeeders(): void
    {
        $this->call([
            KendaraanSeeder::class, // Seeder data kendaraan// Seeder untuk permissions dan roles
        ]);
    }
}
