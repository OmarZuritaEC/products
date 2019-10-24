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
                'password'           => '$2y$10$B0ONskJDcfPshEM9FZ2Y4e9HhQWslIr6Y8x79l2otul/5hSBiyoMW',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2019-10-24 21:35:17',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
