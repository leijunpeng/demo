<?php


namespace Leijunpeng\Demo\Support;


use Carbon\Carbon;

trait Utils
{
    /**
     * @return Carbon
     */
    public static function now()
    {
        return Carbon::now('UTC');
    }

    /**
     * @param $timestamp
     * @return Carbon
     */
    public static function timestamp($timestamp)
    {
        return Carbon::createFromTimestampUTC($timestamp)->timezone('UTC');
    }

    /**
     * @param $timestamp
     * @param int $leeway
     * @return bool
     */
    public static function isPast($timestamp, $leeway = 0)
    {
        $timestamp = static::timestamp($timestamp);

        return $leeway > 0
            ? $timestamp->addSeconds($leeway)->isPast()
            : $timestamp->isPast();
    }

    /**
     * @param $timestamp
     * @param int $leeway
     * @return bool
     */
    public static function isFuture($timestamp, $leeway = 0)
    {
        $timestamp = static::timestamp($timestamp);

        return $leeway > 0
            ? $timestamp->subSeconds($leeway)->isFuture()
            : $timestamp->isFuture();
    }

}