<?php


namespace Leijunpeng\Demo\Support;


trait CustomClaims
{
    protected $customClaims = [];

    /**
     * @param array $customClaims
     *
     * @return $this
     */
    public function customClaims(array $customClaims)
    {
        $this->customClaims = $customClaims;

        return $this;
    }

    /**
     * @param array $customClaims
     *
     * @return CustomClaims
     */
    public function claims(array $customClaims)
    {
        return $this->customClaims($customClaims);
    }

    /**
     * @return array
     */
    public function getCustomClaims()
    {
        return $this->customClaims;
    }

}