<?php

namespace App\Jobs;

use App\Models\Payment;
use App\Models\Commission;
use App\Models\TSetting;
use Carbon\Carbon;

class GenerateMonthlyCommissionsJob
{
    // هذه الطريقة تنفذ الكود
    public function handle()
    {
        $rate = TSetting::where('s_key', 'rate')->value('s_value');

        $payments = Payment::where('status', 'confirmed')
            ->whereDate('created_at', '<=', Carbon::now()->subMonth())
            ->doesntHave('commission')
            ->get();

        foreach ($payments as $payment) {
            $payer = $payment->user;

            if (!$payer || !$payer->referred_by) continue;

            $commissionAmount = $payment->price * ($rate / 100);

            Commission::create([
                'referrer_id' => $payer->referred_by,
                'payment_id' => $payment->id,
                'commission_amount' => $commissionAmount,
                'commission_rate' => $rate,
            ]);
        }

        // رسالة نجاح
        echo "Monthly commissions generated successfully.\n";
    }
}
