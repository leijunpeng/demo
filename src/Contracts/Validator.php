<?php


namespace Leijunpeng\Demo\Contracts;


interface Validator
{

    public function check($value);

    public function isValid($value);

}