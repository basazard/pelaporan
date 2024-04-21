<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScreenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $q = [
            [
                'screen_id' => 'dashboard',
                'screengroup_id' => 'menu',
                'description' => 'Dashboard',
                'order' => 1
            ],
            [
                'screen_id' => 'pengajuan',
                'screengroup_id' => 'menu',
                'description' => 'Pengajuan',
                'order' => 2
            ],
            [
                'screen_id' => 'tunjangan',
                'screengroup_id' => 'menu',
                'description' => 'Tunjangan',
                'order' => 3
            ],
            [
                'screen_id' => 'profil',
                'screengroup_id' => 'akun',
                'description' => 'Profil',
                'order' => 1
            ],
            [
                'screen_id' => 'password',
                'screengroup_id' => 'akun',
                'description' => 'Password',
                'order' => 2
            ],
        ];

        DB::table('screens')->insert($q);
    }
}
