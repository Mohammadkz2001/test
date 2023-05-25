<?php

namespace EsfahanAhan\Sms;

use EsfahanAhan\Sms\Interface\SmsServiceInterface;
use EsfahanAhan\Sms\Jobs\SendSepahanSms;

class SepahanSmsService implements SmsServiceInterface
{
    public function sendSms($to, $message, array $params = [])
    {
        $message = $this->prepareMessages(config('sms.sepahan.' . $message), $params);
        dispatch(new SendSepahanSms($message, $to));
    }

    public function prepareMessages($message, $params)
    {
        foreach ($params as $key => $val) {
            $message = str_replace(':' . $key, $val, $message);
        }
        return $message;
    }
}
