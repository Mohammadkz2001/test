<?php

namespace EsfahanAhan\Sms\Facades;

use EsfahanAhan\Sms\SmsIrService;
use Illuminate\Support\Facades\Facade;

class SmsIrFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SmsIr';
    }
}
