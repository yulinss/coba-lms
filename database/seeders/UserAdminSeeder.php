<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'admin', 'email' => 'admin@example.com', 'password' => bcrypt('123'), 'remember_token' => '',],
            ['id' => 2, 'name' => 'Teacher', 'email' => 'rhena@gmail.com', 'password' => bcrypt('123'), 'remember_token' => '',],
            ['id' => 3, 'name' => 'Student', 'email' => 'yulin@gmail.com', 'password' => bcrypt('123'), 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            User::create($item);
        }
    }
}
