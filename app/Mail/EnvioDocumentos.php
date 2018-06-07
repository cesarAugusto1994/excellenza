<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\EnvioDocumentos as Documentos;

class EnvioDocumentos extends Mailable
{
    use Queueable, SerializesModels;

    private $documento;

    public $from = [['address' => 'adm@excellenza.com.br', 'name' => 'Excellenza']];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Documentos $documento)
    {
        $this->documento = $documento;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.envio-documentos')
                    ->with([
                      'documento' => $this->documento,
                      'url' => '#'
                    ])
                    ->subject('Envio de Documentos')
                    ->attach(storage_path('app/'.$this->documento->arquivo->link));
    }
}
