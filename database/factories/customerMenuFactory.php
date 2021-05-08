<?php

namespace Database\Factories;

use App\Models\customerMenu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class customerMenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = customerMenu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // $table->string('Item Name');
            // $table->integer('quantity');
            // $table->integer('OrderID');
            // $table->double('unitPrice');

            'Item Name' => Str::random(12),
            'quantity' => '10',
            'OrderID' =>4,
            'unitPrice' =>rand(500,5000)
        ];
    }
}