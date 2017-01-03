<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* DB::table('users')->insert([
            'name' => 'Codesolutions',
            'email' => 'codesolutions@gmail.com',
            'password' => bcrypt('Codesolutions123.'),
            'type' => 'admin',
        ]);*/

        factory(App\User::class, 10)->create();
    }
}
