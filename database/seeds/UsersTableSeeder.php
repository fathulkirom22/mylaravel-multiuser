<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "pasien";
        $user->email = "pasien@pasien.com";
        $user->password = crypt("pasien123","");
        $user->gender = "L";
        $user->date_of_birth = "1996-07-10";
        $user->no_hp = "098765432112";
        $user->save();
    }
}
