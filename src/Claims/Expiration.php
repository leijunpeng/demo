<?php


namespace Leijunpeng\Demo\Claims;



use Leijunpeng\Demo\Exceptions\TokenExpiredException;

class Expiration extends Claim
{
    use DatetimeTrait;

    protected $name = 'exp';

    /**
     * {@inheritdoc}
     */
    public function validatePayload()
    {
        if ($this->isPast($this->getValue())) {
            throw new TokenExpiredException('Token has expired');
        }
    }

}