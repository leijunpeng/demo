<?php


namespace Leijunpeng\Demo\Claims;


use DateInterval;
use DateTimeInterface;
use Leijunpeng\Demo\Support\Utils;

trait DatetimeTrait
{
    protected $leeway = 0;

    public function setValue($value)
    {
        if ($value instanceof DateInterval) {
            $value = Utils::now()->add($value);
        }

        if ($value instanceof DateTimeInterface) {
            $value = $value->getTimestamp();
        }

        return parent::setValue($value);
    }

    public function validateCreate($value)
    {
        if (! is_numeric($value)) {
            throw new InvalidClaimException($this);
        }

        return $value;
    }

}