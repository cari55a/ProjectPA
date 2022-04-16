<?php

use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengguna = new \App\User;
 $pengguna->username = "admin";
 $pengguna->name = "Administrator";
 $pengguna->email = "colorgram@gmail.com";
 $pengguna->roles = json_encode(["ADMIN"]);
 $pengguna->password = \Hash::make( "admin");
 $pengguna->phone = "081851851851";
 $pengguna->address = "Jl.Pemograman Akuntansi 2";
 $pengguna->status = "ACTIVE";
 $pengguna->save();
 $this->command->info( "User Admin berhasil diinsert");
 }
}
