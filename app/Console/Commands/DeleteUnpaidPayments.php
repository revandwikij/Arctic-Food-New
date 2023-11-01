<?php

namespace App\Console\Commands;

use App\Models\Pembayaran;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DeleteUnpaidPayments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-unpaid-payments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menghapus data setiap 30 menit';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $batas = Carbon::now()->subMinutes(30);
        Pembayaran::where('Status_Pembayaran', 'Belum Lunas')
            ->where('created_at', '<=', $batas)
            ->delete();
    }
}
