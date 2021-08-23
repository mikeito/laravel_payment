<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonationPostRequest;
use Illuminate\Http\Request;
use SevenGps\PayUnit;

class Donation extends Controller
{
    public function index() {
        // dd($_ENV['PAYUNIT_API_kEY']);
        return view('pages.donating');
    }

    public function status() {
        // dd('status');
        return view('pages.thanks');
    }

    public function donate(DonationPostRequest $request) {
        // dd($request->validated()['amount']);
        $amt = $request->validated()['amount'];
        $transaction_id = uniqid();

        $myPayment = new PayUnit(
            $_ENV['PAYUNIT_API_kEY'],
            $_ENV['PAYUNIT_API_PASSWORD'],
            $_ENV['PAYUNIT_API_USER'],
            route('thanks'),
            "",
            $_ENV['PAYUNIT_MODE'],
            "Test payment",
            "",
            "XAF",
            "Le Rocher",
            $transaction_id
          );

          $myPayment->makePayment($amt);
        //   return '';
    }
}
