<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelQRCode\Facades\QRCode;

class mainController extends Controller
{


    public function index(Request $request) {

        QRCode::text($request->message)
            ->setOutfile('images/qrCode.svg')
            ->setMargin(2)
            ->setSize(4)
            ->svg();

        return view('qr');

    }


}
