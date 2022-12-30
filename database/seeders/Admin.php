<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class Admin extends Seeder
{
    /**
     * Run the database seedsph.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Akshai',
            'email'=>'akshai@gmail.com',
            'password' => Hash::make('akshai1998')

        ]);


    }
}

