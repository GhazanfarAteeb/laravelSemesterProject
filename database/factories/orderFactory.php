<?php

namespace Database\Factories;

use App\Models\order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class orderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // $table->string('CustomerName');
            // $table->string('ContactNo');
            // $table->integer('EventID');
            // $table->double('Bill');
            // $table->integer('menuID');
            'CustomerName' =>Str::random(10),
            'ContactNo' => Str::random(10),
            'EventType' =>'Special Eves',
            'EventState' => 'Cancelled',
            'Bill' =>rand(1,1000),
            'menuID'=>1
        ];
    }
}