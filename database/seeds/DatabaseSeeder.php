<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Apply::class, 55)->create();
//         $this->call(UsersTableSeeder::class);
//        for ($i = 0; $i < 55; $i++)
//        {
//            $faker = new Faker();
//            DB::table('applies')->insert([
//                'firstname' => $faker->name,
//                'lastname' => $faker->lastName,
//                'email' => $faker->unique()->safeEmail,
//                'phone' => $faker->phoneNumber,
//                'region' => $faker->city,
//                'district' => $faker->streetAddress,
//                'message' => $faker->text(1000)
//            ]);
//        }
    }
}
