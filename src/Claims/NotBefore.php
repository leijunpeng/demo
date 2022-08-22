<?php


namespace Leijunpeng\Demo\Claims;


use Leijunpeng\Demo\Exceptions\TokenInvalidException;

class NotBefore extends Claim
{
    use DatetimeTrait;

    protected $name = 'nbf';

    public function validatePayload()
    {
        if ($this->isFuture($this->getValue())) {
            throw new TokenInvalidException('Not Before (nbf) timestamp cannot be in the future');
        }
    }

}