<?php


namespace Leijunpeng\Demo\Claims;

use Illuminate\Support\Collection as IlluminateCollection;
use Illuminate\Support\Str;

class Collection extends IlluminateCollection
{

    public function __construct($items = [])
    {
        parent::__construct($items);
    }

    /**
     * 获取集合内的唯一的名字
     * @param $name
     * @param callable|null $callback
     * @param null $default
     * @return mixed
     */
    public function getByClaimName($name, callable $callback = null, $default = null)
    {
        return $this->filter(function (Claim $claim) use ($name) {
            return $claim->getName() === $name;
        })->first($callback, $default);
    }

    public function validate($context = 'payload')
    {
        $args = func_get_args();
        array_shift($args);

        $this->each(function ($claim) use ($context, $args) {
            call_user_func_array(
                [$claim, 'validate'.Str::ucfirst($context)],
                $args
            );
        });

        return $this;
    }

    public function hasAllClaims($claims)
    {
        return count($claims) && (new static($claims))->diff($this->keys())->isEmpty();
    }

    public function toPlainArray()
    {
        return $this->map(function (Claim $claim) {
            return $claim->getValue();
        })->toArray();
    }

    protected function getArrayableItems($items)
    {
        return $this->sanitizeClaims($items);
    }

    private function sanitizeClaims($items)
    {
        $claims = [];
        foreach ($items as $key => $value) {
            if (! is_string($key) && $value instanceof Claim) {
                $key = $value->getName();
            }

            $claims[$key] = $value;
        }

        return $claims;
    }
}