<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20 ; $i++) { 

            $newStudent = new Student();

            $newStudent->name = $faker->name();
            $newStudent->lastname = $faker->lastName();
            $newStudent->born = $faker->date();
            $newStudent->city = $faker->city();
            $newStudent->address = $faker->address();
            $newStudent->phone = $faker->phoneNumber();

            $newStudent->save();

        }
    }
}
