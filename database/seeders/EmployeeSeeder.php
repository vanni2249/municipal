<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Employee;
use App\Traits\AdminNumber;
use App\Traits\AdminUlid;
use App\Traits\EmployeeNumber;
use App\Traits\EmployeeUlid;
use App\Traits\StatusTypeId;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    use EmployeeUlid, EmployeeNumber,AdminUlid, AdminNumber, StatusTypeId;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Employee Geovanni and Admin
        $employee = Employee::create([
            'ulid' => $this->createEmployeeUlid(),
            'number' => $this->createEmployeeNumber(),
            'name' => 'Geovanni',
            'last_name' => 'Colon Barrios',
            'email' => 'vanni2249@gmail.com',
            'phone' => '123-456-7890',
            'birth_date' => '1980-10-26',
            'hired_at' => '2020-01-01',
        ]);

        $admin = $employee->admin()->create([
            'ulid' => $this->createAdminUlid(),
            'number' => $this->createAdminNumber(),
            'username' => 'colong1',
            'password' => bcrypt('password'),
        ]);

        $admin->status()->create([
            'status_type_id' => $this->getStatusTypeId('active'),
        ]);
        
        $admin->positions()->attach(1, ['assigned_at' => now(), 'is_default' => true]); // Attach position with ID 1 to the admin

        // Employee Angel and Admin
        $employee = Employee::create([
            'ulid' => $this->createEmployeeUlid(),
            'number' => $this->createEmployeeNumber(),
            'name' => 'Angel',
            'last_name' => 'Colon Barrios',
            'email' => 'colon.angel1@gmail.com',
            'phone' => '123-456-7890',
            'birth_date' => '1977-05-29',
            'hired_at' => '2020-01-01',
        ]);

        $admin = $employee->admin()->create([
            'ulid' => $this->createAdminUlid(),
            'number' => $this->createAdminNumber(),
            'username' => 'colona1',
            'password' => bcrypt('password'),
        ]);

        $admin->status()->create([
            'status_type_id' => $this->getStatusTypeId('active'),
        ]);

        $admin->positions()->attach(4, ['assigned_at' => now(), 'is_default' => true]); // Attach position with ID 1 to the admin
        
        // Employee Angel F and Admin
        $employee = Employee::create([
            'ulid' => $this->createEmployeeUlid(),
            'number' => $this->createEmployeeNumber(),
            'name' => 'Angel F',
            'last_name' => 'Colon Barrios',
            'email' => 'fabian4126@gmail.com',
            'phone' => '123-456-7890',
            'birth_date' => '1998-04-28',
            'hired_at' => '2020-01-01',
        ]);

        $admin = $employee->admin()->create([
            'ulid' => $this->createAdminUlid(),
            'number' => $this->createAdminNumber(),
            'username' => 'colona2',
            'password' => bcrypt('password'),
        ]);
        
        $admin->status()->create([
            'status_type_id' => $this->getStatusTypeId('active'),
        ]);

        $admin->positions()->attach(6, ['assigned_at' => now(), 'is_default' => true]); // Attach position with ID 1 to the admin
        $admin->positions()->attach(8, ['assigned_at' => now()]); // Attach position with ID 1 to the admin
        
        // Employee without Admin
        Employee::create([
            'ulid' => $this->createEmployeeUlid(),
            'number' => $this->createEmployeeNumber(),
            'name' => 'Employee',
            'last_name' => 'Without Admin',
            'email' => 'employee.without.admin@example.com',
            'phone' => '123-456-7890',
            'birth_date' => '1990-01-01',
            'hired_at' => '2020-01-01',
        ]);

        // Admin without Employee
        $admin = Admin::create([
            'ulid' => $this->createAdminUlid(),
            'number' => $this->createAdminNumber(),
            'username' => 'colong2',
            'password' => bcrypt('password'),
        ]);

        $admin->status()->create([
            'status_type_id' => $this->getStatusTypeId('active'),
        ]);
    }
}