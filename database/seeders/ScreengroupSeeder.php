<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScreengroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $q = [
            [
                'screengroup_id' => 'menu',
                'description' => 'Menu',
                'order' => 1
            ],
            [
                'screengroup_id' => 'akun',
                'description' => 'Akun Saya',
                'order' => 2
            ],
        ];

        DB::table('screengroups')->insert($q);
    }
}
