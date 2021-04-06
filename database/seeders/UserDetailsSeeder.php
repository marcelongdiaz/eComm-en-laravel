<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_details')->insert([
            'user_id'=>1,
            'last_name'=>'Diaz',
            'first_name'=>'Marcelo',
            'middle_name'=>'Valenzuela',
            'address'=>'San Pedro Laguna',
            'contact'=>'0929015272',
            'role'=>'admin',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
