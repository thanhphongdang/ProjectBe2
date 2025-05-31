<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
   public function form()
    {
        $banks = [
            'vcb' => 'Vietcombank',
            'bidv' => 'BIDV',
            'vietinbank' => 'VietinBank',
            'agribank' => 'Agribank',
            'acb' => 'ACB',
            'tcb' => 'Techcombank',
            'mb' => 'MB Bank',
        ];

        return view('page.QR-code', compact('banks'));
    }

    // Xử lý form và tạo QR
    public function generateQR(Request $request)
    {
        $request->validate([
            'bank_id' => 'required',
            'account_no' => 'required',
            'account_name' => 'required',
            'amount' => 'nullable|numeric',
            'add_info' => 'nullable|string'
        ]);

        $bankId = $request->bank_id;
        $accountNo = $request->account_no;
        $accountName = strtoupper($request->account_name);
        $amount = $request->amount;
        $addInfo = $request->add_info;

        $qrUrl = "https://img.vietqr.io/image/{$bankId}-{$accountNo}-compact2.png?";
        $qrUrl .= "accountName=" . urlencode($accountName);
        if ($amount) $qrUrl .= "&amount={$amount}";
        if ($addInfo) $qrUrl .= "&addInfo=" . urlencode($addInfo);

        return view('page.QR-code', compact('qrUrl'));
    }
}
