<?php


namespace Leijunpeng\Demo;


use Leijunpeng\Demo\Contracts\Providers\Storage;

class Blacklist
{

    protected $storage;

    protected $gracePeriod = 0;

    protected $refreshTTL = 20160;

    protected $key = 'jti';

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

}