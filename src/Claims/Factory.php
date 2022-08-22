<?php


namespace Leijunpeng\Demo\Claims;


class Factory
{

    protected $request;

    protected $ttl = 60;

    protected $leeway = 0;

    private $classMap = [
        'aud' => Audience::class,
        'exp' => Expiration::class,
        'iat' => IssuedAt::class,
        'iss' => Issuer::class,
        'jti' => JwtId::class,
        'nbf' => NotBefore::class,
        'sub' => Subject::class,
    ];

}