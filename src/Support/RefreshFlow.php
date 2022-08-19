<?php


namespace Leijunpeng\Demo\Support;


trait RefreshFlow
{
    protected $refreshFlow = false;

    public function setRefreshFlow($refreshFlow = true)
    {
        $this->refreshFlow = $refreshFlow;

        return $this;
    }

}