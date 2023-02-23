<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        Employee::create(
            [
                'name' => 'Abhishek kumar',
                'email' => 'Abhishek@gmail.com',
                'address' => 'Moradbad,UP'



            ]
        );
    }
}