<?php
namespace Serializer;
require_once 'AbstractSerializer.php';

class Serializer extends AbstractSerializer
{
    public function toJSON($object)
    {
        return json_encode($object);
    }

    public function toYAML($object)
    {
        return yaml_emit($object);
    }
}