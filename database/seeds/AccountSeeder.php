<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id' => 1,
                'acct_name' => 'Miranda B. Regular Account',
                'init_invest' => 60000,
                'start_date' => '2020-01-05',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' =>  2,
                'acct_name' => 'Villamor B. Regular Account',
                'init_invest' => 100000,
                'start_date' => '2020-02-11',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Rubio B. Regular Account',
                'init_invest' => 120000,
                'start_date' => '2020-05-21',
                'remarks' => 'Done with normal transaction'
            ],
        ];

        foreach($data as $acct) {
            \App\Account::create($acct);
        }
    }
}