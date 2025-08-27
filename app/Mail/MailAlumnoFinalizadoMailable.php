<?php

namespace App\Mail;

use Illuminate\Mail\Mailables\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Str;
use App\Models\Alumno;
use App\Models\Correo;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Ramsey\Uuid\Type\Integer;

class MailAlumnoFinalizadoMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        protected Correo $correo,
    )
    {
        //

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from:new Address('utm.repositorio.2025@gmail.com','Subdirección de Tecnologías de la Información'),
            subject:'IMAIT, confirmación de correo.'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.mail_alumno_confirmar',
            with: [
                //'nombre'=>$this->alumno->nombre.' '.$this->alumno->apellidop.' '.$this->alumno->apellidom
                'correo'=>$this->correo,

            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    public function validar_alumno(Alumno $alumno){
        //Mail::to("julio.correa.777@gmail.com")->send(new MailAlumnoFinalizadoMailable);
        //dd($id_correo);
        $password = Str::password(16, true, true, true, false);
         $this->correo->alumno = $alumno;
         $this->correo->password = $password;
         $usuario =new User();
         $usuario->name = $this->correo->alumno->nombre.' ' .$this->correo->alumno->apellidop.' '.$this->correo->alumno->apellidom;
         $usuario->email = $this->correo->alumno->email;
         $usuario->password = $password;
         $usuario->save();
         dd();

        Mail::to($alumno->email)->send(new MailAlumnoFinalizadoMailable($this->correo));



        return "Mensaje enviado...";
    }
}
