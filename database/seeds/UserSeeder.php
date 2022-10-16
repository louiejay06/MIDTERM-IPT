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
                'lname'=>'Encina',
                'fname'=>'Altair',
                'address'=>'Potohan, Tubigon, Bohol.',
                'phone'=>'0934524429',
                'email'=>'altair_enc@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Aurestila',
                'fname'=>'Louie Jay',
                'address'=>'Cawayanan, Tubigon, Bohol.',
                'phone'=>'0936434459',
                'email'=>'louie.j@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Balili',
                'fname'=>'Louise Demean',
                'address'=>'Ilijan, Tubigon, Bohol.',
                'phone'=>'0935648394',
                'email'=>'dmean_louie@gmail.com',
                'password'=>bcrypt('password123')
            ],
        ];

        foreach($data as $user) {
            \App\User::create($user);
        }
    }
}
