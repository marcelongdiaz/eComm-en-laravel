<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customer_details')->insert([
            'name'=>'John Doe',
            'email'=>'jdoe@yahoo.com',
            'address'=>'California'
        ]);
    }
}
