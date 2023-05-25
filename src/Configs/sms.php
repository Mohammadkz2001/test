<?php


use App\Services\IrSms\Template\NewComplaint;
use App\Services\IrSms\Template\RegisteredOrderRequest;
use App\Services\IrSms\Template\ExpireOrderRequest;
use App\Services\IrSms\Template\RechargeWallet;
use App\Services\IrSms\Template\AccountingTransactions;
use App\Services\IrSms\Template\NewsSubscriber;
use App\Services\IrSms\Template\NewComment;
use App\Services\IrSms\Template\NewRecruitment;
use App\Services\IrSms\Template\AdminReturnWallet;
use App\Services\IrSms\Template\UserReturnWallet;
use App\Services\IrSms\Template\ReturnWalletUpdateStatus;
use App\Services\IrSms\Template\OrderSubmissionError;
use App\Services\IrSms\Template\OfflinePayment;
use App\Services\IrSms\Template\TicketReply;
use App\Services\IrSms\Template\Payment;
use App\Services\IrSms\Template\SuccessPayment;
use App\Services\IrSms\Template\OnlineOrder;
use App\Services\IrSms\Template\SubmitOrder;
use App\Services\IrSms\Template\UpdatePrice;
use App\Services\IrSms\Template\SubmitTicket;
use App\Services\IrSms\Template\RechargeWalletAdmin;
use App\Services\IrSms\Template\CommentReply;
use App\Services\IrSms\Template\WalletTransaction;
use App\Services\IrSms\Template\WalletTransactionAdmin;
use App\Services\IrSms\Template\PaymentLink;
use App\Services\IrSms\Template\NewUser;
use App\Services\IrSms\Template\OfflineOrder;
use App\Services\IrSms\Template\OfflineOrderProduct;
use App\Services\IrSms\Template\SaleAgent;
use App\Services\IrSms\Template\OrderStatus;
use App\Services\IrSms\Template\Invoice;
use App\Services\IrSms\Template\SubmitOrderStatus;
use App\Services\IrSms\Template\SaleAgentAdmin;


return [
    'sepahan' =>
        [
            'RegisteredOrderRequest' => '*اصفهان آهن*' . "\n" .
                ':orderRequestName' . ' عزیز ، سفارش شما در سامانه اصفهان آهن ثبت گردید. به زودی کارشناسان اصفهان آهن با شما تماس خواهند گرفت.',

            'ExpireOrder' => '*اصفهان آهن*' . "\n" .
                'ما تنها مدت کوتاهی میتوانیم سفارش تان را نگه داریم و در صورت عدم پرداخت، ناچار به لغو آن هستیم.' .
                'برای نهایی کردن، از بخش سفارش ها مبلغ آن را پرداخت کنید.',

            'NewComplaint' => 'یک شکایت از طرف ' .
                ':name' .
                ' در سایت ثبت شد',

            'RechargeWallet' => '*اصفهان آهن*' . "\n" .
                'کیف پول شما به مبلغ ' . ':price' . ' ریال با موفقیت شارژ شد' . "\n",

            'AccountingTransactions' => '*اصفهان آهن*' . "\n" .
                'کد تایید شما :  ' . ':code' . "\n" . "این کد برای مشاهده تراکنش های حسابداری میباشد",

            'NewsSubscriber' => '*اصفهان آهن*' . "\n" .
                ':name' . ' عزیز، شما عضو خبرنامه اصفهان آهن شدید.' . "\n" .
                'اصفهان آهن حافظ اعتماد شماست',

            'NewComment' => '*اصفهان آهن*' . "\n" .
                'یک کامنت جدید در سایت توسط ' .
                ':name' .
                ' ثبت شد' .
                "\n" .
                'محصول :' .
                ':product',

            'NewRecruitment' => 'یک فرم استخدام در سایت ثبت شد' . "\n" .
                'عنوان: ' . ':subject' . "\n" .
                'نام: ' . ':name',

            'AdminReturnWallet' => '*اصفهان آهن*' . "\n" .
                'درخواست عودت وجه کاربری به مبلغ ' . ':price' . ' ریال ثبت شد' . "\n" .
                "\n" . ' شماره همراه کاربر : ' . ':phone',

            'UserReturnWallet' => '*اصفهان آهن*' . "\n" .
                'درخواست عودت وجه شما به مبلغ ' . ':price' . ' ریال ثبت شد' . "\n" .
                "\n" . ' وضعیت : درحال برسی ',

            'ReturnWalletUpdateStatus' => '*اصفهان آهن*' . "\n" .
                'درخواست عودت وجه شما به مبلغ ' . ':price' . ' ریال ثبت شد' . "\n" .
                "\n" . ' وضعیت :' . ':status',

            'OrderSubmissionError' => 'خطا در ارسال سفارش به' . "\n" .
                ':mobile' . "\n" .
                ':product',

            'OfflinePayment' => '*اصفهان آهن*' . "\n" .
                'یک پرداخت آفلاین توسط ' .
                ':name' .
                ' در سایت ثبت شد.' . "\n" .
                'شماره سفارش :
                 ' .
                ':id',

            'TicketReply' => "*اصفهان آهن*" . "\n" .
                "پاسخی برای تیکت شما ارسال شد.",

            'Payment' => '*اصفهان آهن*' . "\n" .
                'تراکنش به مبلغ ' . ':price' . ' ریال با موفقیت انجام شد' . "\n" .
                'شماره پیگیری: ' . ':id',

            'SuccessPayment' => '*اصفهان آهن*' . "\n" . 'پرداخت موفق برای سفارش: ' . ':id',

            'OnlineOrder' => '*اصفهان آهن*' . "\n" .
                'یک سفارش آنلاین توسط' . ' :name' . 'به مبلغ ' . ':price ' . 'ریال برای' . ' :product' . ' ثبت شد.' . "\n" .
                'شماره سفارش : ' . ':id',

            'SubmitOrder' => '*اصفهان آهن*' . "\n" .
                ':name' .
                ' عزیز، ' .
                'سفارش شما با موفقیت در سایت ثبت شد.' . "\n" .
                'از طریق لینک زیر میتونید برای پرداخت اقدام نمایید:' . "\n\n" .
                'https://esfahanahan.com/profile/orders/' . ':id' . '/payment',

            'UpdatePrice' => "* اصفهان آهن *\n" .
                "قیمت "
                . ':product' .
                " اعلام شد.\n" .
                'https://l.esfahanahan.com/' . ':page'
            ,

            'SubmitTicket' => "* اصفهان آهن *\n" .
                "تیکت شما ثبت شد. به زودی پاسخ شما توسط کارشناسان اصفهان آهن ثبت می شود.",

            'RechargeWalletAdmin' => '*اصفهان آهن*' . "\n" .
                'کیف پول  کاربری به مبلغ ' . ':price' . ' ریال با موفقیت توسط ادمین شارژ شد.' . "\n" .
                "\n" . ' شماره همراه کاربر: ' . ':adminPhone' . "\n" . ' شماره همراه ادمین : ' . ':userPhone',

            'CommentReply' => '*اصفهان آهن*' . "\n" .
                'پاسخی برای کامنت شما ارسال شد.' . "\n" .
                'مشاهده: ' . ':comment',

            'WalletTransaction' => '*اصفهان آهن*' . "\n" .
                'کیف پول شما به مبلغ ' . ':price' . ' ریال با موفقیت شارژ شد.' . "\n" .
                'شماره پیگیری: ' . ':id',

            'WalletTransactionAdmin' => '*اصفهان آهن*' . "\n" .
                'کیف پول به مبلغ ' . ':price' . ' ریال با موفقیت شارژ شد.' . "\n" .
                'شماره پیگیری: ' . ':id' . "\n" . ' شماره همراه کاربر ' . ':userPhone',

            'PaymentLink' => '*اصفهان آهن* لینک پرداخت به مبلغ ' . ':price' . ' ریال' . "\n" .
                'https://esfahanahan.com/payments/' . ':id' . '/checkout',

            'NewUser' => "*اصفهان آهن*" . "\n " .
                'کاربر جدیدی در سایت ثبت نام گردید.' . "\n" .
                "نام: " . ':name' . "\n" .
                "موبایل: " . ':mobile' . "\n" .
                "تاریخ ثبت نام: " . ':date',

            'OfflineOrder' => "*اصفهان آهن*" . "\n " .
                'یک درخواست جدید به شرح زیر در سایت ثبت شده.' . "\n" .
                'نام: ' . ':name' . "\n" .
                'همراه: ' . ':mobile' . "\n" .
                'نام محصول: ' . ':product' . "\n" .
                'در ' . ':attribute' . ' های: ' . ':item' . "\n" .
                'محل تحویل: ' . ':location' . "\n" .
                'توضیحات: ' . ':description',

            'OfflineOrderProduct' => "*اصفهان آهن*" . "\n " .
                'یک درخواست جدید به شرح زیر در سایت ثبت شده.' . "\n" .
                'نام: ' . ':name' . "\n" .
                'همراه: ' . ':mobile' . "\n" .
                'نام محصول: ' . ':product' . "\n" .
                'محل تحویل: ' . ':location' . "\n" .
                'توضیحات: ' . ':description',

            'SaleAgent' => '*اصفهان آهن*' . "\n" .
                ':name' . ' عزیز ، درخواست شما برای نمایندگی فروش در سامانه اصفهان آهن ثبت گردید. به زودی کارشناسان اصفهان آهن با شما تماس خواهند گرفت.',

            'OrderStatus' => '*اصفهان آهن*' . "\n" .
                ':name' .
                ' عزیز،' .
                ' سفارش شما بارگیری شد.' . "\n" .
                'جهت دریافت اطلاعات بار به لینک زیر مراجعه نمایید: ' . "\n\n" .
                'https://esfahanahan.com/profile/orders/' . ':id' . '/' . ':status',

            'Invoice' => '*اصفهان آهن*' . "\n" .
                ':name' .
                ' عزیز،' .
                ' فاکتور رسمی سفارش شما به شماره ' .
                ':invoice' .
                ' در سایت بارگذاری شد.' . "\n" .
                'جهت مشاهده به لینک زیر مراجعه نمایید: ' . "\n\n" .
                'https://esfahanahan.com/profile/orders/' . ':id' . '/' . ':status',

            'SubmitOrderStatus' => '*اصفهان آهن*' . "\n" .
                ':name' .
                ' عزیز،' .
                ' سفارش شما تایید شد و به وضعیت <' .
                ':status' .
                '> تغییر پیدا کرد.',

            'SaleAgentAdmin' => '*اصفهان آهن*' . "\n" .
                'ادمین گرامی درخواست جدیدی با مشخصات زیر برای نمایندگی فروش ثبت شده است.' . "\n" .
                "نام: " . ':name'  . "\n".
                "تلفن: " .':phone' . "\n" .
                "شهر: " .':city' . "\n",
        ],
    'smsIr' =>
        [
            'RegisteredOrderRequest' => RegisteredOrderRequest::class,
            'ExpireOrder' => ExpireOrderRequest::class,
            'NewComplaint' => NewComplaint::class,
            'RechargeWallet' => RechargeWallet::class,
            'AccountingTransactions' => AccountingTransactions::class,
            'NewsSubscriber' => NewsSubscriber::class,
            'NewComment' => NewComment::class,
            'NewRecruitment' => NewRecruitment::class,
            'AdminReturnWallet' => AdminReturnWallet::class,
            'UserReturnWallet' => UserReturnWallet::class,
            'ReturnWalletUpdateStatus' => ReturnWalletUpdateStatus::class,
            'OrderSubmissionError' => OrderSubmissionError::class,
            'OfflinePayment' => OfflinePayment::class,
            'TicketReply' => TicketReply::class,
            'Payment' => Payment::class,
            'SuccessPayment' => SuccessPayment::class,
            'OnlineOrder' => OnlineOrder::class,
            'SubmitOrder' => SubmitOrder::class,
            'UpdatePrice' => UpdatePrice::class,
            'SubmitTicket' => SubmitTicket::class,
            'RechargeWalletAdmin' => RechargeWalletAdmin::class,
            'CommentReply' => CommentReply::class,
            'WalletTransaction' => WalletTransaction::class,
            'WalletTransactionAdmin' => WalletTransactionAdmin::class,
            'PaymentLink' => PaymentLink::class,
            'NewUser' => NewUser::class,
            'OfflineOrder' => OfflineOrder::class,
            'OfflineOrderProduct' => OfflineOrderProduct::class,
            'SaleAgent' => SaleAgent::class,
            'OrderStatus' => OrderStatus::class,
            'Invoice' => Invoice::class,
            'SubmitOrderStatus' => SubmitOrderStatus::class,
            'SaleAgentAdmin' => SaleAgentAdmin::class,

        ],

];
