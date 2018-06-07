<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Contato as FaleConosco;

class Contato extends Mailable
{
    use Queueable, SerializesModels;

    private $contato;

    public $from = [['address' => 'adm@excellenza.com.br', 'name' => 'Excellenza']];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(FaleConosco $contato)
    {
        $this->contato = $contato;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.contato')
          ->with([
            'contato' => $this->contato,
            'url' => '#'
          ])
          ->subject('Envio de Dados para Contato');
    }
}
