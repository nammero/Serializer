<?php

namespace App\Serializer;

use Symfony\Component\Yaml\Yaml;

class Serializer extends AbstractSerializer
{
    const JSON = 'toJSON';
    const YAML = 'toYAML';


    public function serialize($object, $type)
    {
        if (!isset($type) || !isset($object))
            return \Symfony\Component\Console\Exception\InvalidOptionException::class;
        return $this->{$type}($object);
    }

    private function toJSON($object)
    {
        return json_encode($object);
    }

    private function toYAML($object)
    {
        $dumped = Yaml::dump($object, 2, 4, Yaml::DUMP_OBJECT);
        return Yaml::parse($dumped, Yaml::PARSE_OBJECT);
    }
}