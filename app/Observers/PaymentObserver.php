<?php

namespace App\Observers;

use App\Models\Commission;
use App\Models\Payment;
use App\Models\TSetting;

class PaymentObserver
{
    /**
     * Handle the Payment "created" event.
     */
    public function created(Payment $payment): void
    {
        // assume payments table has user_id (the payer)
        $payer = $payment->user;


        if (! $payer) return;

        if (! $payer->referred_by) return;


        $referrerId = $payer->referred_by; // integer

        $rate = TSetting::where('s_key', 'rate')->value('s_value');


        $commissionAmount = $payment->price * ($rate / 100);


        Commission::create([
        'referrer_id' => $referrerId,
        'payment_id' => $payment->id,
        'commission_amount' => $commissionAmount,
        'commission_rate' => $rate,
        ]);
    }

    /**
     * Handle the Payment "updated" event.
     */
    public function updated(Payment $payment): void
    {
        //
    }

    /**
     * Handle the Payment "deleted" event.
     */
    public function deleted(Payment $payment): void
    {
        //
    }

    /**
     * Handle the Payment "restored" event.
     */
    public function restored(Payment $payment): void
    {
        //
    }

    /**
     * Handle the Payment "force deleted" event.
     */
    public function forceDeleted(Payment $payment): void
    {
        //
    }
}
