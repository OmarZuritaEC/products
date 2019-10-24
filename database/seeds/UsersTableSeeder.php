<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => '$2y$10$j4OK8ZwHQa638HsqsVx1GeTDokMg11j72Xe.7CH6zt47Gz5fUQW/6',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2019-10-24 21:25:57',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
