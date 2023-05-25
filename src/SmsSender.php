<?php

namespace EsfahanAhan\Sms;

use EsfahanAhan\Sms\Interface\SmsServiceInterface;

class SmsSender
{
    private $smsService;

    public function __construct(SmsServiceInterface $smsService)
    {
        $this->smsService = $smsService;
    }

    public function send($to, $message, array $params = [])
    {
        $this->smsService->sendSms($to, $message, $params);
    }
}
