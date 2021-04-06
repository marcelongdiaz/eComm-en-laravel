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
            [
                'name'=>'Maricar Demesa',
                'email'=>'mari@yahoo.com',
                'address'=>'California'
            ],
            [
                'name'=>'Lucas Vermillion',
                'email'=>'lucas@yahoo.com',
                'address'=>'Mexico'
            ],
            [
                'name'=>'Abdul Muhhamed',
                'email'=>'abdulm@yahoo.com',
                'address'=>'India'
            ],
        ]);
    }
}
