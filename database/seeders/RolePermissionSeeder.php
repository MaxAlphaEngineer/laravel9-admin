<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user' => [
                'view' => 'User view',
                'create' => 'User create',
                'update' => 'User update',
                'delete' => 'User delete',
            ],

            'permission' => [
                'view' => 'Permission view',
                'create' => 'Permission create',
                'update' => 'Permission update',
                'delete' => 'Permission delete',
            ],

            'role' => [
                'view' => 'Role view',
                'create' => 'Role create',
                'update' => 'Role update',
                'delete' => 'Role delete',
            ],

            'settings' => [
                'view' => 'Settings view',
                'create' => 'Settings create',
                'update' => 'Settings update',
                'delete' => 'Settings delete',
            ],

            'statistics' => [
                'view' => 'Statistics view'
            ]
        ];


        $roles = [
            'Super Admin' => [
                "title" => "Super admin has all rights",
                "models" => []
            ],
            'Moderator' => [
                "title" => "Moderator has limited rights",
                "models" => [
                    "user", 'settings'
                ]
            ],
        ];


        foreach ($permissions as $model => $permits) {
            foreach ($permits as $action => $title) {
                $permit = $model . "." . $action;
                if (Permission::where('name', $permit)->first() == null)
                    Permission::create(['name' => "$permit", 'title' => $title]);

            }
        }

        foreach ($roles as $name => $configs) {
            if (Role::where('name', $name)->first() == null) {
                $role = Role::create(['name' => $name, 'title' => $configs["title"]]);
                foreach ($configs['models'] as $model) {
                    $permits = Permission::where('name', 'like', "$model%")->get();
                    $role->givePermissionTo($permits);
                }
            }

        }
    }
}
