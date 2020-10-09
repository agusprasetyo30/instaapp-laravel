<?php

use App\User;
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
        echo "[-] Menambahkan data seeder dummy user";

        $user = new User();

        $user->nama = "Dummy";
        $user->username = "dummy123";
        $user->email = "dummy123@gmail.com";
        $user->password = "dummy123";
        $user->avatar = "NO IMAGE";

        $user->save();

        echo "[+] Penambahan Data Sukses";
    }
}
