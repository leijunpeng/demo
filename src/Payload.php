<?php


namespace Leijunpeng\Demo;


use ArrayAccess;
use Countable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use JsonSerializable;

class Payload implements ArrayAccess, Arrayable, Countable, Jsonable, JsonSerializable
{

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    public function count()
    {
        // TODO: Implement count() method.
    }

    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }

    public function toArray()
    {
        // TODO: Implement toArray() method.
    }

    public function toJson($options = 0)
    {
        // TODO: Implement toJson() method.
    }
}