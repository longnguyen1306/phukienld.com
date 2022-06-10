<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Long Nguyễn',
            'email' => 'ldc.longnd@gmail.com',
            'password' => bcrypt('123123123'),
            'phone' => '0934072724',
            'address' => '965/102/3 Quang Trung, p14, Gò Vấp',
            'is_admin' => 1,
        ]);
    }
}
