<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'username'          =>      'opal',
            'email'             =>      'opal@test.com',
            'password'          =>      Hash::make('1234'),
            'remember_token'    =>      'this_is_token_remember',
            'created_at'        =>      date("Y-m-d H:i:s")
        ]);
    }
}
