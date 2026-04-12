<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            "user-list",
            "user-create",
            "user-edit",
            "user-delete",

            "role-list",
            "role-create",
            "role-edit",
            "role-delete",

            "event-list",
            "event-create",
            "event-edit",
            "event-delete",

            "blog-list",
            "blog-create",
            "blog-edit",
            "blog-delete",

            "ticket_type-list",
            "ticket_type-create",
            "ticket_type-edit",
            "ticket_type-delete",

            "speakers_event-list",
            "speakers_event-create",
            "speakers_event-edit",
            "speakers_event-delete",

            "sponsors-list",
            "sponsors-create",
            "sponsors-edit",
            "sponsors-delete",

            "slider_slides-list",
            "slider_slides-create",
            "slider_slides-edit",
            "slider_slides-delete",

            "speakers-list",
            "speakers-create",
            "speakers-edit",
            "speakers-delete",


            "bookings-list",
            "bookings-create",
            "bookings-edit",
            "bookings-delete",
        ];

       
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

      
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

       
        $adminRole->syncPermissions($permissions);

        
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('12345678'),
            ]
        );

        $admin->assignRole($adminRole);
    }
}