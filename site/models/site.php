<?php

class SitePage extends Page
{
    public function logo()
    {
        return $this->content()->logo()->toFile() ?? $this->image();
    }
}
