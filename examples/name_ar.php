<?php

require '../vendor/autoload.php';

$faker = Faker\Factory::create();
$faker->addProvider(new BilalBentoumi\Faker\Provider\ar_DZ\Person($faker));

echo $faker->lastName() . ' ' . $faker->firstName() . PHP_EOL;