<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [   

                    'doctor-list',
                    'doctor-create',
                    'doctor-edit',
                    'doctor-delete',

                ];
                foreach ($data as $permission) {
                Permission::firstOrCreate(['name' => $permission]);
            }
        }
    }