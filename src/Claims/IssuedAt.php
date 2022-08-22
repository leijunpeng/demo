<?php


namespace Leijunpeng\Demo\Claims;


use Leijunpeng\Demo\Exceptions\InvalidClaimException;
use Leijunpeng\Demo\Exceptions\TokenExpiredException;
use Leijunpeng\Demo\Exceptions\TokenInvalidException;

class IssuedAt extends Claim
{
    use DatetimeTrait {
        validateCreate as commonValidateCreate;
    }

    protected $name = 'iat';


    public function validateCreate($value)
    {
        $this->commonValidateCreate($value);

        if ($this->isFuture($value)) {
            throw new InvalidClaimException($this);
        }

        return $value;
    }

    public function validatePayload()
    {
        if ($this->isFuture($this->getValue())) {
            throw new TokenInvalidException('Issued At (iat) timestamp cannot be in the future');
        }
    }

    public function validateRefresh($refreshTTL)
    {
        if ($this->isPast($this->getValue() + $refreshTTL * 60)) {
            throw new TokenExpiredException('Token has expired and can no longer be refreshed');
        }
    }

}