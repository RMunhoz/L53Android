<?php

use Illuminate\Database\Seeder;
use SON\Models\BillPay;

class BillPaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(BillPay::class, 20)->create();
    }
}
