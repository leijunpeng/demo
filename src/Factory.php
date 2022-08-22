<?php


namespace Leijunpeng\Demo;


use Leijunpeng\Demo\Support\CustomClaims;
use Leijunpeng\Demo\Support\RefreshFlow;

class Factory
{
    use CustomClaims, RefreshFlow;

    protected $claimFactory;

    protected $validator;

    protected $defaultClaims = [
        'iss',
        'iat',
        'exp',
        'nbf',
        'jti',
    ];

    protected $claims;

    public function __construct(ClaimFactory $claimFactory, PayloadValidator $validator)
    {
        $this->claimFactory = $claimFactory;
        $this->validator = $validator;
        $this->claims = new Collection;
    }

}