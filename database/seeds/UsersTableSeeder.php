<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\SON\User::class)->create([
            'name' => 'Rogerio',
            'email' => 'rogerio@email.com'
        ]);
        factory(\SON\User::class, 19)->create();
    }
}
