<?php


namespace Leijunpeng\Demo\Contracts\Providers;


interface Storage
{
    /**
     * @param $key
     * @param $value
     * @param $minutes
     * @return mixed
     *
     */
    public function add($key, $value, $minutes);

    /**
     * @param $key
     * @param $value
     * @return mixed
     */
    public function forever($key, $value);

    /**
     * @param $key
     * @return mixed
     */
    public function get($key);

    /**
     * @param $key
     * @return mixed
     */
    public function destroy($key);

    /**
     * @return mixed
     */
    public function flush();

}