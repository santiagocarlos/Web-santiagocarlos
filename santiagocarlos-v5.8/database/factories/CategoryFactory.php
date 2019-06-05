<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
		
	//Creating slug based in title
	$name = $faker->sentence;
    $slug = str_slug($name, '-');
    
    return [
        'name' => $name,
        'slug' => $slug,
        'description' => $faker->paragraph,
        'image' => 'http://placehold.it/787x392'
    ];
});
