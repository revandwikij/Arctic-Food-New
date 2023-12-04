<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PesananMasukNotification extends Notification
{
    use Queueable;
    public $informasiPesanan;
    /**
     * Create a new notification instance.
     */
    public function __construct($informasiPesanan)
    {
        $this->informasiPesanan = $informasiPesanan;
    }

    /**
     * Get the notification's delivery channels.
     * @param
     * @return 
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    // public function toMail(object $notifiable): MailMessage
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }

    // /**
    //  * Get the array representation of the notification.
    //  *
    //  * @return array<string, mixed>
    //  */
    public function toArray(object $notifiable): array
    {
        return [
            'id_barang' => $this->informasiPesanan['id_barang'],
            'kuantitas' => $this->informasiPesanan['kuantitas'],
            'total_harga' => $this->informasiPesanan['total_harga'],
            'message' => 'Pesanan baru telah diterima.'
            // Informasi lain yang ingin disimpan dalam notifikasi
        ];
    }
}
