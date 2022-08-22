<?php


namespace Leijunpeng\Demo;


use Leijunpeng\Demo\Support\CustomClaims;

class JWT
{
    use CustomClaims;

    protected $manager;


    protected $parser;

    protected $token;

    protected $lockSubject = true;

    public function __construct(Manager $manager, Parser $parser)
    {
        $this->manager = $manager;
        $this->parser = $parser;
    }


}