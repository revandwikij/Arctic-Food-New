<?php

namespace App\Console\Commands;

use App\Models\Pesan;
use Illuminate\Console\Command;
use Carbon\Carbon;

class CheckUnconfirmedOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-unconfirmed-orders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check and cancel unconfirmed orders.';

    /**
     * Execute the console command.
     */

     public function __construct()
     {
         parent::__construct();
     }

    public function handle()
    {

         $cutoffTime = Carbon::now()->subHours(24);

         $unconfirmedOrders = Pesan::where('Status_Pesanan', 'Menunggu Konfirmasi')
             ->where('created_at', '<', $cutoffTime)
             ->get();

         foreach ($unconfirmedOrders as $order) {
            $order->update(['Status_Pesanan' => 'Dibatalkan']);
    }
}
}

