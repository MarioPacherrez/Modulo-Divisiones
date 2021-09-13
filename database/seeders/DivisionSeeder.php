<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            [
                'name'              => 'División General',
                'level'             => '1',
                'collaborators'     => '',
                'ambassador'        => '',
                'id_upper_division' => '',
                'id_subdivision'    => '',
                'created_at'        => Carbon::now()
            ],
            [
                'name'              => 'División A',
                'level'             => '2',
                'collaborators'     => '',
                'ambassador'        => '',
                'id_upper_division' => '',
                'id_subdivision'    => '',
                'created_at'        => Carbon::now()
            ],
            [
                'name'              => 'División B',
                'level'             => '2',
                'collaborators'     => '',
                'ambassador'        => '',
                'id_upper_division' => '',
                'id_subdivision'    => '',
                'created_at'        => Carbon::now()
            ],
            [
                'name'              => 'División C',
                'level'             => '2',
                'collaborators'     => '',
                'ambassador'        => '',
                'id_upper_division' => '',
                'id_subdivision'    => '',
                'created_at'        => Carbon::now()
            ],
            [
                'name'              => 'División A-1',
                'level'             => '3',
                'collaborators'     => '',
                'ambassador'        => '',
                'id_upper_division' => '',
                'id_subdivision'    => '',
                'created_at'        => Carbon::now()
            ],
            [
                'name'              => 'División A-2',
                'level'             => '3',
                'collaborators'     => '',
                'ambassador'        => '',
                'id_upper_division' => '',
                'id_subdivision'    => '',
                'created_at'        => Carbon::now()
            ],
            [
                'name'              => 'División A-3',
                'level'             => '3',
                'collaborators'     => '',
                'ambassador'        => '',
                'id_upper_division' => '',
                'id_subdivision'    => '',
                'created_at'        => Carbon::now()
            ],
            [
                'name'              => 'División B-1',
                'level'             => '3',
                'collaborators'     => '',
                'ambassador'        => '',
                'id_upper_division' => '',
                'id_subdivision'    => '',
                'created_at'        => Carbon::now()
            ],
            [
                'name'              => 'División B-2',
                'level'             => '3',
                'collaborators'     => '',
                'ambassador'        => '',
                'id_upper_division' => '',
                'id_subdivision'    => '',
                'created_at'        => Carbon::now()
            ],
            [
                'name'              => 'División C-1',
                'level'             => '3',
                'collaborators'     => '',
                'ambassador'        => '',
                'id_upper_division' => '',
                'id_subdivision'    => '',
                'created_at'        => Carbon::now()
            ],
            [
                'name'              => 'División C-2',
                'level'             => '3',
                'collaborators'     => '',
                'ambassador'        => '',
                'id_upper_division' => '',
                'id_subdivision'    => '',
                'created_at'        => Carbon::now()
            ]
        ]);
    }
}