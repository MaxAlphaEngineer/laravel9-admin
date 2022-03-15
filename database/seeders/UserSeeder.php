<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        $users = [
//          SUPER ADMIN
            "Super Admin" => [
                'name' => 'Super Admin',
                'dob' => '1995-01-01',
                'email' => 'admin@admin.com',
                'password' => Hash::make('123456'),
                'email_verified_at' => now(),
                'avatar' => 'images/avatar-1.jpg',
                'created_at' => now()
            ],

            "Moderator" => [
                'name' => 'Moderator',
                'dob' => '1996-01-01',
                'email' => 'moderator@moderator.com',
                'password' => Hash::make('123456'),
                'email_verified_at' => now(),
                'avatar' => 'images/avatar-1.jpg',
                'created_at' => now()
            ]


        ];

        foreach ($users as $role => $user) {
            if (User::where('email', $user['email'])->first() == null) {
                $user = User::create($user);
                $user->assignRole($role);
                $user->syncPermissions();

            }
        }
//        $user = User::where('name','Moderator')->first();
//        dd($user->getRoleNames());
//        dd($user->getAllPermissions()->toArray());
    }
}
