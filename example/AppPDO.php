<?php

namespace ExampleApp;

use AG\WebApp\BasePDO;
use AG\WebApp\Config;

class AppPDO extends BasePDO
{
    public function __construct(Config $config = null)
    {
        parent::__construct(
            $config ?? new AppConfig()
        );
    }
}