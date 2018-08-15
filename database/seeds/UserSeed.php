<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

use App\User;
class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach (range(	1, 100)	 as $a) {
        	User::create([
        			'name' => $faker->name,
        			'email' => $faker->email,
        			'password' => $faker->password
        	]);
        }
    }
}
