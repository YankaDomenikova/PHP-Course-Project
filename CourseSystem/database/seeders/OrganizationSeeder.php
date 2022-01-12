<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("organizations")->insert([
                'organization_name' => 'Dev',
                'city' => 'Veliko Tarnovo'
            ]
        );
    }
}
