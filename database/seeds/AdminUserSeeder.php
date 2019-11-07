<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'هدير حسن المصري',
            'email' => 'haderhasan904@gmail.com',
            'password' => bcrypt('hader1234##'),
            'role_id' => 1,
            'IsAdmin' =>1,
            'phone' => '+972594329731',
            'address'=>'فلسطين - قطاع غزة - دير البلح'

        ]);
    }
}
