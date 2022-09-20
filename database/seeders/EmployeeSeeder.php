<?php

namespace Database\Seeders;

use App\Models\Employee;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i < 200; $i++) { 
            $employee = new Employee();
            $employee->first_name =$faker->firstName();
            $employee->last_name =$faker->lastName();
            $employee->birth_date =$faker->date('Y-m-d', '2002-01-01');
            $employee->email =$faker->email();
            $employee->phone_number =$faker->phoneNumber();
            $employee->gender = $i%3==0?'male':'female';
            $employee->title =$faker->jobTitle();
            $employee->designation =$employee->title;
            $employee->monthly_salary_kes =random_int(25, 300)*1000;
            $employee->save();
        }
    }
}
