<?php


namespace Leijunpeng\Demo\Exceptions;

use Exception;

class JWTException extends Exception
{
    /**
     * {@inheritdoc}
     */
    protected $message = 'An lei demo error occurred';

}