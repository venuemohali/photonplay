<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            'name' => 'Admin',
            'email' => 'admin@abc.com',
            'password' => Hash::make('admin@abc.com'),
            'role_as' => 'Admin',
        ]);
    }
}
