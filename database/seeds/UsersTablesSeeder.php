<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                'cat'    => 'CLIENT',
                'nom'    => 'John',
                'prenom'    => 'Smith',
                'num_gsm'    => '14704101',
                'email'    => 'john_smith@gmail.com',
                'password'   =>  Hash::make('password'),
                'remember_token' =>  Str::random(10),
            ),
            array(
                'cat'    => 'GERANT',
                'nom'    => 'Conor',
                'prenom'    => 'Velasquez',
                'num_gsm'    => '25137298',
                'email'    => 'conor_velasquez@gmail.com',
                'password'   =>  Hash::make('password'),
                'remember_token' =>  Str::random(10),
            ),
            array(
                'cat'    => 'MAGASINIER',
                'nom'    => 'Angelina',
                'prenom'    => 'Riggs',
                'num_gsm'    => '50862185',
                'email'    => 'angelina_riggs@gmail.com',
                'password'   =>  Hash::make('password'),
                'remember_token' =>  Str::random(10),
            ),
            array(
                'cat'    => 'SECRETAIRE',
                'nom'    => 'Clarissa',
                'prenom'    => 'Bernard',
                'num_gsm'    => '53538653',
                'email'    => 'clarissa_bernard@gmail.com',
                'password'   =>  Hash::make('password'),
                'remember_token' =>  Str::random(10),
            ),
          ));
        /*User::insert(
            [
                'cat'    => 'CLIENT',
                'nom'    => 'John',
                'prenom'    => 'Smith',
                'num_gsm'    => '14704101',
                'email'    => 'john_smith@gmail.com',
                'password'   =>  Hash::make('password'),
                'remember_token' =>  Str::random(10),
            ],
            [
                'cat'    => 'GERANT',
                'nom'    => 'Conor',
                'prenom'    => 'Velasquez',
                'num_gsm'    => '25137298',
                'email'    => 'conor_velasquez@gmail.com',
                'password'   =>  Hash::make('password'),
                'remember_token' =>  Str::random(10),
            ],
            [
                'cat'    => 'MAGASINIER',
                'nom'    => 'Angelina',
                'prenom'    => 'Riggs',
                'num_gsm'    => '50862185',
                'email'    => 'angelina_riggs@gmail.com',
                'password'   =>  Hash::make('password'),
                'remember_token' =>  Str::random(10),
            ],
            [
                'cat'    => 'SECRETAIRE',
                'nom'    => 'Clarissa',
                'prenom'    => 'Bernard',
                'num_gsm'    => '53538653',
                'email'    => 'clarissa_bernard@gmail.com',
                'password'   =>  Hash::make('password'),
                'remember_token' =>  Str::random(10),
            ]
        );*/
    }
}
