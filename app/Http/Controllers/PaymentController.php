<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function allPayments()
    {
        $payments = Payment::orderBy('id', 'desc')->with('book')->paginate(1000);

        return view('admin.payments', [
            'payments'=> $payments
        ]);
    }
}
