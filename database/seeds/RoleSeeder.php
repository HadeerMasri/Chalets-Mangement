<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('roles')->insert(
            ['name'=>'ادمن']
        );
        \Illuminate\Support\Facades\DB::table('roles')->insert(
            ['name'=>'مالك']
        );
        \Illuminate\Support\Facades\DB::table('roles')->insert(
            ['name'=>'مستأجر']
        );
    }
}
