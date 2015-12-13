<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->truncate();
        DB::table('berita')->truncate();

        $this->call(UserTableSeeder::class);
        $this->call(BeritaTableSeeder::class);

        Model::reguard();
    }
}
