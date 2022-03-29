<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Human;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $condition = ["very bad","bad", "good", "very good"];
        $items = array_rand($condition);
        return [
            'doctor_id' => Doctor::inRandomOrder()->first()->id,
            'human_id' => Human::inRandomOrder()->first()->id,
            'temperature' => rand(35, 45.5),
            'img' => 'yeji.jpg',
            'condition' => $condition[$items]
        ];
    }
}
