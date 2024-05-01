<?php

namespace App\ApiResource;

use ApiPlatform\Metadata\GetCollection;

#[GetCollection(
    outputFormats: ['json']
)]
class Test
{
    public string $foo = 'bar';
}
