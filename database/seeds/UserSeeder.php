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
        $user = new App\User();
        $user->first_name = "Afruja";
        $user->last_name = "Tanjum";
        $user->email = "afruja.tanjum@gmail.com";
        $user->password = Hash::make('pppppp');
        $user->phone = "+8801738671782";
        $user->address = "75 Pollobi Ponitula";
        $user->area = "Modina Market";
        $user->city = "Sylhet";
        $user->zip = "3100";
        $user->avatar = "afruja.jpg";
        $user->save();

        $user = new App\User();
        $user->first_name = "Noyan";
        $user->last_name = "Ahmed";
        $user->email = "noyan@gmail.com";
        $user->password = Hash::make('pppppp');
        $user->phone = "+8801738671782";
        $user->address = "9 Block H";
        $user->area = "Uposhohor";
        $user->city = "Sylhet";
        $user->zip = "3100";
        $user->avatar = "null.jpg";
        $user->save();

    }
}
