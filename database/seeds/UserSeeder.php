<?php

use App\Models\Profession;
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

        // $professions = DB::select('SELECT id FROM professions LIMIT 0,1' );
        //$professions= DB::table('professions')->select('id')->first();
        $professions = Profession::where('title', 'Desarrollador back-end')->value('id');

        //dd($professions);

        User::create([
            'name' => 'prueba',
            'email' => 'prueba@gmail.com',
            'password' => 'prueba123',
            'professions_id' => $professions,
        ]);
    }
}
