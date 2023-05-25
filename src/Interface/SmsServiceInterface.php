<?php

namespace EsfahanAhan\Sms\Interface;

interface SmsServiceInterface
{
    public function sendSms($to, $message,array $params=[]);
}
