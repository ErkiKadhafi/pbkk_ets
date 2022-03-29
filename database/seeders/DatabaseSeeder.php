<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Human;
use App\Models\Patient;
use App\Models\User;
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
       User::factory(10)->create();
        Human::create([
            'name' => "Hwang Yeji"
        ]);
        Human::create([
            'name' => "Timotius"
        ]);
        Human::create([
            'name' => "Budi Wirawan"
        ]);
        Human::create([
            'name' => "Roger"
        ]);
        Doctor::create([
            'name' => "Dr Tony Wirawan"
        ]);
        Doctor::create([
            'name' => "Dr Michael"
        ]);
        Doctor::create([
            'name' => "Dr Naeyon"
        ]);

        Patient::factory(10)->create();
    }
}
