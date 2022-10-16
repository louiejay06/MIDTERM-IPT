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
                'acct_name' => 'E. A. Savings Account',
                'init_invest' => 750000,
                'start_date' => '2018-10-14',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'LJA Barber Trust Fund',
                'init_invest' => 215000,
                'start_date' => '2020-04-22',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Balili L.D. Regular Account',
                'init_invest' => 50000,
                'start_date' => '2019-02-13',
                'remarks' => 'Done with normal transaction'
            ],
        ];

        foreach($data as $acc) {
            \App\Account::create($acc);
        }
    }
}
