<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

$faker = Faker\Factory::create();

echo $faker->name . "\n\n";
echo $faker->address . "\n\n";
echo $faker->text . "\n\n";