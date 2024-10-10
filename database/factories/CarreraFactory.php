<?php

namespace Database\Factories;

use App\Models\Depto;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrera>
 */
class CarreraFactory extends Factory
{
    
    public function definition(): array
    {   $titulo=fake()->unique()->jobTitle();
        return [
            "idCarrera"=>fake()->bothify("????####"),
            'nombreCarrera'=>$titulo,
            'nombreMediano'=>fake()->lexify(str_repeat("?",15)),
            'nombreCorto'=>substr($titulo,0,5),
            'depto_id'=>Depto::factory(),

        ];
    }
}
