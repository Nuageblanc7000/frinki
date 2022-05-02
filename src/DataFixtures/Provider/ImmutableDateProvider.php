<?php
namespace App\DataFixtures\Provider;

use \DateTimeImmutable;
use Faker\Provider\Base;
    class ImmutableDateProvider extends Base
{
 
    public function createDateImmutable() : ?DateTimeImmutable
    {
        return new \DateTimeImmutable();
    }

}