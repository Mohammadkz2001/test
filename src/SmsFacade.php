<?php

namespace EsfahanAhan\Sms;

use Illuminate\Support\Facades\Facade;

class SmsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {

        return 'sms';
    }
}
