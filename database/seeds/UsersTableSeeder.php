<?php

use Illuminate\Database\Seeder;
use SON\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,1)->create([
            'name' => 'Rogerio',
            'email' => 'rogerio@email.com'
        ]);
        factory(User::class, 19)->create();
    }
}
