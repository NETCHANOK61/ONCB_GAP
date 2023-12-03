<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use Illuminate\Support\Facades\Cache;

class ThaIDAuthController extends Controller
{
    // show qr code page
    public function showLoginQr()
    {

        $qrLoginLink = route('thaID.loginQr');

        return view("thai_id.login_qr", compact("qrLoginLink"));
    }

    // loginQr will be used encode to QR image to be scaned by mobile phone
    public function loginQr()
    {
        Cache::put('IsUserScanThaIdQrCode', true, now()->addSeconds(20));
        return "Login success!!!";
    }

    public function checkLoginStatus()
    {
        $isUserScanThaIdQrCode = Cache::get('IsUserScanThaIdQrCode', false);

        if ($isUserScanThaIdQrCode) {
            $loginStatus = Status::SUCCESS->value;

            // reset isUserScanThaIdQrCode when login success
            Cache::forget('IsUserScanThaIdQrCode');
        } else {
            $loginStatus = Status::PENDING->value;
        }

        $loginStatusRes = ["loginStatus" => $loginStatus];

        return $loginStatusRes;
    }
}
