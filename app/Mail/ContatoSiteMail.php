<?php

// app/Mail/ContatoSiteMail.php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContatoSiteMail extends Mailable
{
    use Queueable, SerializesModels;

    // Propriedade pública para guardar os dados do formulário
    public array $data;

    /**
     * Cria uma nova instância da mensagem.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Define o envelope da mensagem (remetente, assunto).
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new \Illuminate\Mail\Mailables\Address(config('mail.from.address'), config('mail.from.name')),
            subject: 'Nova Mensagem do Formulário do Site',
        );
    }

    /**
     * Define o conteúdo da mensagem (qual view usar).
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contato', // Aponta para resources/views/emails/contato.blade.php
        );
    }
}