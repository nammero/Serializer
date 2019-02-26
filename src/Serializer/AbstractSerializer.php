<?php

namespace App\Serializer;


abstract class AbstractSerializer
{
    abstract function serialize($object, $type);
}