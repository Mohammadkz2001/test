<?php

namespace EsfahanAhan\Sms\Facades;

use Illuminate\Support\Facades\Facade;

class SmsSenderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'smsSender';
    }
}
