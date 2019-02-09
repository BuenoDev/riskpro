<?php

use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $f) {
    return [
        //
        'name' => $f->name,
        'title' => $f->name,
        'description' => $f->text,
        'location' => $f->city,
    ];
});
