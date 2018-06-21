<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Denuncia as EnvioDenuncia;

class Denuncia extends Mailable
{
    use Queueable, SerializesModels;

    private $denuncia;

    public $from = [['address' => 'adm@excellenza.com.br', 'name' => 'Excellenza']];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(EnvioDenuncia $denuncia)
    {
        $this->denuncia = $denuncia;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->markdown('mail.denuncia')
                  ->with([
                    'documento' => $this->denuncia,
                    'url' => '#'
                  ])
                  ->subject('Envio de Documentos')
                  ->attach(storage_path('app/'.$this->denuncia->arquivo->link));
    }
}
