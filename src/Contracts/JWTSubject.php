<?php


namespace Leijunpeng\Demo\Contracts;


interface JWTSubject
{
    public function getJWTIdentifier();


    public function getJWTCustomClaims();

}