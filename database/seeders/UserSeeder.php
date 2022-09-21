<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        $gender = $faker->randomElements(['L', 'P'])[0];
        $noInduk = mt_rand(100880000, mt_getrandmax());
        foreach(range(1,10) as $item){
            User::create([
                'users_employe_id' => 'KRG_DSS02'.$item,
                'users_first_name' => 'KRG_DSS02'.$item,
                'users_last_name' => 'Bapak/Ibu',
                'users_users_name' => 'KRG_DSS02'.$item,
                'users_role' => 'Distribution Rep',
                'users_status' =>  'Active',
                'users_type' => 'Mobility',
                'users_free_field_1' => 'Depo Karangampel',
                'users_free_field_2' => 'Asmo Indramayu',
                'users_free_text_field_2' => '20-09-2022',
                'users_email' => 'krg_dss02'.$item.'@samara.com',
                'users_address' => 'Indramayu',
                'users_phone' => '085341223'.$item,
                'users_login_status' => '1',
                'password' => Hash::make('password'),
            ]);
        }
    }
}
