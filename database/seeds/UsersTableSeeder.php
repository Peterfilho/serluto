<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name'     => 'Peterson Medeiros',
            'email'    => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'is_admin' => true,
        ]);
        User::create([
            'name'     => 'Test User',
            'email'    => 'test@test.com',
            'password' => bcrypt('test'),
            'is_admin' => false,
        ]);
    }
}
