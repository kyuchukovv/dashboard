<?php

/**
 * Created by PhpStorm.
 * User: kyuchukovv_lenovo
 * Date: 2/21/2016
 * Time: 2:09 PM
 */

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run() {
//        DB::table('users')->delete();
        User::create(array(
            'name'   => 'Vladimir Kyuchukov',
            'email'    => 'kyuchukovv@gmail.com',
            'password' => Hash::make('awesome')
        ));
    }

}