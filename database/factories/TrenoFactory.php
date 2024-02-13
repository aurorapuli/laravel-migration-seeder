<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Treno>
 */
class TrenoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake() -> company() ,
            'stazione_di_partenza' => fake() ->city(),
            'stazione_di_arrivo' => fake() ->city(),
            'orario_partenza' => fake() ->time(),
            'orario_arrivo' => fake() ->time(),
            'codice_treno' => fake() ->swiftBicNumber(),
            'numero_carrozze' => fake() ->randomFloat(0, 1, 30),
            'data' =>fake() -> date('Y_m_d'),
            'in_orario' => fake() -> boolean(),
            'in_ritardo' => fake() ->boolean(),


        ];
    }
}
