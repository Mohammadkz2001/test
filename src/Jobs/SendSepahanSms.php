<?php

namespace EsfahanAhan\Sms\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;

class SendSepahanSms implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $message;

    protected $mobile;

    public function __construct($message, $mobile)
    {
        $this->message = $message;
        $this->mobile = $mobile;
    }

    public function handle()
    {
        $client = new \SoapClient("http://www.sepahansms.com/smsSendWebServiceforphp.asmx?wsdl");

        $params = array(
            'UserName' => config('app.sepahan_sms_username'),
            'Pass' => config('app.sepahan_sms_password'),
            'Domain' => 'sepahansms',
            'SmsText' => [$this->message],
            'MobileNumber' => [ltrim($this->mobile, 0)],
            'SenderNumber' => '100036268888',
            'sendType' => 'StaticText',
            'smsMode' => 'SaveInPhone'
        );

        $result = $client->SendSms($params)->SendSmsResult;

        if ($result->long <= 0) {
            $errorMessage = config('sms.sepahanError');
            throw new \ErrorException('SMS Sepahan Server error message :  ' . $errorMessage[$result->long]);
        }
    }
}
