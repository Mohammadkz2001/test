<?php

namespace EsfahanAhan\Sms\Facades;

use Illuminate\Support\Facades\Facade;

class SepahanSmsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sepahanSms';
    }
}
