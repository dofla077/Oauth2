<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $laas = ['dofla', 'doffy', 'joker', 'toto', 'mingo'];
        foreach ($laas as $key => $a) {
            DB::table('users')->insert([
                'name' => $a,
                'email' => $a . '@gmail.com',
                'password' => bcrypt('secret' . $key),
            ]);
        }
    }
}
