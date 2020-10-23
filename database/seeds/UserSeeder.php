<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname' => 'Miranda',
                'fname' =>  'Marlon',
                'address' => 'Car-Car City ,Cebu',
                'phone' => '0918.237.6219',
                'email' => 'marlon@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Villamor',
                'fname' => 'Jayson',
                'address' => 'Tagbiral City, Bohol',
                'phone' => '0936.173.4411',
                'email' => 'Jayson@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Rubio',
                'fname' => 'Harold',
                'address' => 'Calape, Bohol',
                'phone' => '0911.373.5856',
                'email' => 'harold@yahoo.com',
                'password' => bcrypt('password123')
            ],
        ];

        foreach($data as $user) {
            \App\User::create($user);
        }
    }
}
