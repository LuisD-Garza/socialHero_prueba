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

        // $professions = DB::select('SELECT id FROM professions LIMIT 0,1' );
        $professions= DB::table('professions')->select('id')->first();

        //dd($professions->id);

        DB::table('users')->insert([
            'name' => 'prueba',
            'email' => 'prueba@gmail.com',
            'password' => 'prueba123',
            'profession_id' => $professions->id,
        ]);
    }
}
