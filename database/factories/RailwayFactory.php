<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Railway>
 */
class RailwayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake() -> sentence(),
            'stazione_di_partenza' => fake() -> city(),
            'stazione_di_arrivo' => fake() -> city(),
            'orario_di_partenza' => fake() -> datetime(),
            'orario_di_arrivo' => fake() -> datetime(),
            'codice_treno' => fake() -> bothify('??-#####'),
            'numero_carrozze' => fake() -> randomDigit(),
            'in_orario' => fake() -> boolean(),
            'cancellato' => fake() -> boolean()
        ];
    }
}


// $table->string('azienda'); 
// $table->string('stazione_di_partenza');
// $table->string('stazione_di_arrivo');
// $table->time('orario_di_partenza');
// $table->time('orario_di_arrivo');
// $table->string('codice_treno')->unique();
// $table->integer('numero_carrozze');
// $table->boolean('in_orario');
// $table->boolean('cancellato');