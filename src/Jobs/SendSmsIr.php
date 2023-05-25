<?php

namespace EsfahanAhan\Sms\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;
class SendSmsIr implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $mobile;
    protected $template;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($mobile, $template)
    {
        $this->mobile = $mobile;
        $this->template = $template;
    }
    public function handle()
    {
        date_default_timezone_set("Asia/Tehran");

        // your sms.ir panel configuration
        $APIKey = config('app.api_key_smsIr');
        $SecretKey = config('app.secret_key_smsIr');
        // message data
        $data = array(
            "ParameterArray" =>
                $this->template->getParameters(),
            "Mobile" => $this->mobile,
            "TemplateId" => $this->template::TEMPLATE_ID,
            "UserApiKey" => $APIKey,
            "SecretKey" => $SecretKey
        );

// send sms with sms ir with get token remove api key and secret key from data
//            $SmsIR_UltraFastSend = new UltraFastSend($APIKey, $SecretKey);
//            $SmsIR_UltraFastSend->UltraFastSend($data);


// send sms without token must send api and secret key in data
        $result = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post('https://RestfulSms.com/api/UltraFastSend/direct', $data)->body();

        $res = get_object_vars(json_decode($result));

        if ($res['IsSuccessful'] == false) {
            throw new \ErrorException('Sending sms with SmsIr failed with message : '.$res['Message']);
        };
    }
}
