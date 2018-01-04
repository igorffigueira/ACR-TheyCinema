<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@admin.admin',
            'password' => bcrypt('admin'),
            'usertype' => 'admin',
            'verifyToken' => 'null',
            'status' => '1'
        ]);
    }
}
