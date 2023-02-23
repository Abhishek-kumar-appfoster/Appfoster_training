<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Project;
use App\Models\Employee;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $employees = Employee::all();

        foreach ($employees as $employee) {
            for ($i = 0; $i < 3; $i++) {
                $project = new Project;
                $project->name = $faker->sentence(3);
                $project->description = $faker->paragraph(2);
                $project->employee_id = $employee->id;
                $project->save();
            }
        }
    }
}
