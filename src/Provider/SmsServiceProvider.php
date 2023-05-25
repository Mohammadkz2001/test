<?php

namespace EsfahanAhan\Sms\Provider;

use EsfahanAhan\Sms\Interface\SmsServiceInterface;
use EsfahanAhan\Sms\SepahanSmsService;
use EsfahanAhan\Sms\SmsIrService;
use EsfahanAhan\Sms\SmsSender;
use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    public function register()
    {

        $this->mergeConfigFrom(dirname(__DIR__, 1) . '/Configs/sms.php', 'sms');

        $this->app->bind('sepahanSms', function () {
            return new SepahanSmsService();
        });
        $this->app->bind('SmsIr', function () {
            return new SmsIrService();
        });
        $this->app->bind('smsSender', function () {
            return new SmsSender();
        });

        $driver = config('app.sms_driver');

        if ($driver == 'Sepahan') {
            $this->app->bind(SmsServiceInterface::class, SepahanSmsService::class);
        } elseif ($driver == 'SmsIr') {
            $this->app->bind(SmsServiceInterface::class, SmsIrService::class);
        }
    }

    public function boot()
    {
        $this->publishes([
            dirname(__DIR__, 1) . '/Configs/sms.php' => config_path('sms.php'),
        ]);
    }

}
