<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Models\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {

            $employee = new Employee;
            $employee->name = $faker->name;
            $employee->email = $faker->email;
            $employee->address = $faker->address;

            $employee->save();
        }

    }
}