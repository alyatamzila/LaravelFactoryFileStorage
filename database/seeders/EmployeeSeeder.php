<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('employees')->insert([
        //     [
        //         'firstName' => 'Alya',
        //         'lastName' => 'Selvia',
        //         'email'=> 'alyaselvia@gmail.com',
        //         'age' => 20,
        //         'position_id' => 1
        //     ],
        //     [
        //         'firstName' => 'Selvia',
        //         'lastName' => 'Tamzila',
        //         'email'=> 'selviatamzila@gmail.com',
        //         'age' => 19,
        //         'position_id' => 2
        //     ],
        //     [
        //         'firstName' => 'Alya',
        //         'lastName' => 'Tamzila',
        //         'email'=> 'alyatamzila@gmail.com',
        //         'age' => 20,
        //         'position_id' => 3
        //     ],
        // ]);
        Employee::factory()->count(10)->create();
    }
}

