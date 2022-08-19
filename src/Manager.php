<?php


namespace Leijunpeng\Demo;


use Leijunpeng\Demo\Support\CustomClaims;
use Leijunpeng\Demo\Support\RefreshFlow;
use Leijunpeng\Demo\Contracts\Providers\JWT as JWTContract;

class Manager
{
    use CustomClaims,RefreshFlow;

    /**
     * The provider.
     *
     * @var
     */
    protected $provider;

    /**
     *
     * @var
     */
    protected $payloadFactory;

    /**
     *
     * @var bool
     */
    protected $blacklistEnabled = true;

    /**
     * @var array
     */
    protected $persistentClaims = [];


    public function __construct(JWTContract $provider,)
    {
    }

}