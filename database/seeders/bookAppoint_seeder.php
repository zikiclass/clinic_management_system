<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bookAppoint_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('medical_booking')->insert([
            'user_id' => '1',
            'doc_id' => '12',
            'appointment_date' => '24/January/2004',
            'appointment_time' => '12:00PM',
            'appointment_reason' => 'All is cool',
        ]);
    }
}