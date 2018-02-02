<?php

use Faker\Generator as Faker;

$factory->define(App\Link::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'slug' => $faker->url,
        'url_path' => $faker->url_path,
        'path' => $faker->path,
        'request_method' => $faker->request_method,
        'status' => $faker->status,
        'show_in_menu' => $faker->show_in_menu,
        'description' => $faker->paragraph,
    ];
});



//$table->string('title');
//$table->string('slug')->unique();
//$table->string('url_path')->unique();
//$table->string('path')->unique();
//$table->string('request_method');
//$table->boolean('status');
//$table->boolean('show_in_menu');
//$table->text('description');
