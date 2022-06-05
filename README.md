# Algeria Providers for FakerPHP
Algeria providers extension for [fakerphp/faker](https://fakerphp.github.io)

## Installation
```
composer require bilalbentoumi/fakerphp-dz
```

## Documentation
How to use each provider with examples

### Person (AR)
```php
$faker = Faker\Factory::create();
$faker->addProvider(new Faker\AlgeriaProvider\ar_DZ\Person($faker));

echo $faker->name();
// 'فريد شيباني'

echo $faker->firstName();
// 'أسامة'

echo $faker->firstName('female');
// 'نسرين'

echo $faker->lastName();
// 'بلحاج'
```

### Person (FR)
```php
$faker = Faker\Factory::create();
$faker->addProvider(new Faker\AlgeriaProvider\fr_DZ\Person($faker));

echo $faker->name();
// 'Yousra Kadi'

echo $faker->firstName();
// 'Mouloud'

echo $faker->firstName('female');
// 'Asma'

echo $faker->lastName();
// 'Boumediene'
```

## Resources
- [FakerPHP Docs](https://fakerphp.github.io)
