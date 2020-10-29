<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new App\Admin();
        $admin->first_name = "Afruja";
        $admin->last_name = "Tanjum";
        $admin->email = "afruja.tanjum@gmail.com";
        $admin->password = Hash::make('pppppp');
        $admin->phone = "+8801738671782";
        $admin->address = "88 Lake city,Neharipara";
        $admin->area = "Akhaliya";
        $admin->city = "Sylhet";
        $admin->zip = "3100";
        $admin->avatar = "admin.jpg";
        $admin->save();

        $admin = new App\Admin();
        $admin->first_name = "Noyan Ahmed";
        $admin->last_name = "Chowdhury";
        $admin->email = "noyan@gmail.com";
        $admin->password = Hash::make('pppppp');
        $admin->phone = "+8801738671782";
        $admin->address = "65 Jhornar";
        $admin->area = "Kumarpara";
        $admin->city = "Sylhet";
        $admin->zip = "3100";
        $admin->avatar = "admin2.jpg";
        $admin->save();
    }
}
