<?php

namespace EsfahanAhan\Sms;

use EsfahanAhan\Sms\Interface\SmsServiceInterface;
use EsfahanAhan\Sms\Jobs\SendSmsIr;
use Illuminate\Support\Facades\Http;

class SmsIrService implements SmsServiceInterface
{
    public function sendSms($to, $message, array $params = [])
    {
        $template =  resolve(config('sms.smsIr.'.$message),$params);
        dispatch(new SendSmsIr($to,$template));
    }
}
