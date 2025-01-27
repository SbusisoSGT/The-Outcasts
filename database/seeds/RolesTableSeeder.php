<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => 'Author',
        ]);

        DB::table('roles')->insert([
            'role' => 'Publisher'
        ]);

        DB::table('roles')->insert([
            'role' => 'Admin'
        ]);

    }
}
