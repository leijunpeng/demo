<?php


namespace Leijunpeng\Demo\Exceptions;


use Exception;
use Leijunpeng\Demo\Claims\Claim;

class InvalidClaimException extends JWTException
{
    public function __construct(Claim $claim, $code = 0, Exception $previous = null)
    {
        parent::__construct('Invalid value provided for claim ['.$claim->getName().']', $code, $previous);
    }

}