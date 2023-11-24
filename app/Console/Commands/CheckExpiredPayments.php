<?php

namespace App\Console\Commands;

use App\Models\Pembayaran;
use Illuminate\Console\Command;

class CheckExpiredPayments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-expired-payments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mengkadaluarsakan pembayaran yang ga dibayar';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $expiredPayments = Pembayaran::where('Status_Pembayaran', 'Belum Lunas')
        ->where('Waktu_Kadaluarsa', '<=', now())
        ->get();

    foreach ($expiredPayments as $payment) {
        $payment->update(['Status_Pembayaran' => 'Kadaluarsa']);
    }

    // $this->info('Expired payments checked and updated successfully.');

    }
}
