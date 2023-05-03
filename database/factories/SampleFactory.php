<?php

namespace Database\Factories;

use App\Models\Sample;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SampleFactory extends Factory
{
    protected $model = Sample::class;

    public function definition()
    {

             return [
                'impianto' => $this->faker->randomElement(['100', '300', '700A', '3000', '200', '1800', '1600 visbracker',
                '1000', 'cr 27', 'cr 30', 'cr 40', 'cr 30/100', 'pr1', '600']),
                'nome_campione' => $this->faker->randomElement(['grezzo ingresso', 'grezzo uscita', 'prodotto', 'gofinato stabilizzato', 'feedstock',
                'asfalti', 'diesel vacum', 'hvgo', 'testa splitter', 'gol', 'gom', 'testa topping', 'blm', 'bls', 
                'kero', 'kel', 'kep', 'acqua ragia', 'bp', 'bptl', 'crc 27', 'crc 40']),
                'stato' => $this->faker->randomElement(['generato', 'convalidato', 'prelevato'])
            ];
    }
}
