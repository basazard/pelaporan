<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscreenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $q = [
            [
                'subscreen_id' => 'list_pengajuan',
                'screen_id' => 'pengajuan',
                'description' => 'List Pengajuan',
                'order' => 1
            ],
            [
                'subscreen_id' => 'approval_pengajuan',
                'screen_id' => 'pengajuan',
                'description' => 'Approval Pengajuan',
                'order' => 2
            ],
            [
                'subscreen_id' => 'buat_tunjangan',
                'screen_id' => 'tunjangan',
                'description' => 'Buat Tunjangan',
                'order' => 1
            ],
            [
                'subscreen_id' => 'list_tunjangan',
                'screen_id' => 'tunjangan',
                'description' => 'List Tunjangan',
                'order' => 2
            ],
            [
                'subscreen_id' => 'bukti_tunjangan',
                'screen_id' => 'tunjangan',
                'description' => 'Bukti Tunjangan',
                'order' => 3
            ],
        ];

        DB::table('subscreens')->insert($q);
    }
}
