<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


## Creare un modello e una tabella seeder
```bash
    php artisan make:model -sm 'nome-modello'
```

## Realizzare tabella in database/migration
```php
    public function up()
    {
        Schema::create('offerts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('people');
            $table->string('departure');
            $table->string('arrival');
            $table->tinyInteger('day');
            $table->text('description');
            $table->string('price');
            $table->timestamps();
        });
    }
```

## Realizzare Seeder in database/seeds includendo il model creato
```php
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $offert = new Offert();
            $offert->name = $faker->state();
            $offert->img = $faker->imageUrl(400, 400, 'state', true);
            $offert->people = $faker->randomDigit();
            $offert->departure = $faker->city();
            $offert->arrival = $offert->name;
            $offert->day = $faker->randomDigit();
            $offert->description = $faker->paragraph();
            $offert->price = $faker->numberBetween(2000, 10000);
            $offert->save();
        }
    }
```
## Collegare il database dove si vuole inserire la tabella
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=travel
DB_USERNAME=root
DB_PASSWORD=root
```

## Migrare la tabella e il contenuto del seeder
```bash
php artisan migrate --seed

php artisan db:seed --class='nome-seeder'
```

