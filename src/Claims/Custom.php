<?php


namespace Leijunpeng\Demo\Claims;


class Custom extends Claim
{
    public function __construct($name, $value)
    {
        parent::__construct($value);
        $this->setName($name);
    }

}