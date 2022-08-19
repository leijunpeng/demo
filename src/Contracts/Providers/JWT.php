<?php


namespace Leijunpeng\Demo\Contracts\Providers;


interface JWT
{
    public function encode(array $payload);


    public function decode($token);

}