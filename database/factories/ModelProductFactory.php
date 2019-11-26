<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'details'=>$faker->paragraph,
        'price'=>$faker->numberBetween(100,1000),
        'discount'=>$faker->numberBetween(5,20),
        'stock'=>$faker->randomDigit
    ];
});
