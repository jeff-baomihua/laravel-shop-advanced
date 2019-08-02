<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    $image = $faker->randomElement([
        'https://gd1.alicdn.com/imgextra/i4/1083917756/TB2oEZoc4rI8KJjy0FpXXb5hVXa_!!1083917756.jpg_400x400.jpg',
        'https://gd4.alicdn.com/imgextra/i1/551372554/TB2M6fLsNxmpuFjSZFNXXXrRXXa_!!551372554.jpg_400x400.jpg',
        'https://gd3.alicdn.com/imgextra/i3/70848396/TB2QoXUo9FmpuFjSZFrXXayOXXa_!!70848396.jpg_400x400.jpg',
        'https://gd4.alicdn.com/imgextra/i4/2386655078/O1CN011nNlhBSctpCJY0k_!!2386655078.jpg_400x400.jpg',
        'https://gd4.alicdn.com/imgextra/i2/0/TB1KeVlGFXXXXcHXFXXXXXXXXXX_!!0-item_pic.jpg_400x400.jpg',
        'https://gd3.alicdn.com/imgextra/i2/1827387249/TB20Dg9cH3nBKNjSZFMXXaUSFXa_!!1827387249.jpg_400x400.jpg',
    ]);

    return [
        'title'        => $faker->word,
        'long_title'        => $faker->sentence,
        'description'  => $faker->sentence,
        'image'        => $image,
        'on_sale'      => true,
        'rating'       => $faker->numberBetween(0, 5),
        'sold_count'   => 0,
        'review_count' => 0,
        'price'        => 0,
    ];
});
