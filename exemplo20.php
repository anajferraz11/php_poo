<?php

interface INotificador{
    public function enviar($destinatario, $mensagem);
}

// Implementar : e-mail
class NotificadorEmail implements   INotificar{
    public function enviar ($destinatario, $mensagem){
        echo "Email enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

// Implementar:SMS
class NotificadorSMS implements INotificador{
    public function enviar($destinatario, $mensagem){
        echo "SMS enviar {$destinatario}. Mensagem: {$mensagem}.";
    }
}

// Implementar: Whatsapp
class NotificadorWhatsapp implements INotificador{
    public function enviar ($destinatario, $mensagem){
        echo "Whatsapp enviado para {$}"
    }
}

// Classe que usa a interface
class SistemaDeNotificacoes{
    private $notificador;

    public function __construct($notificador $notificador){
        $this->notificador = $notificador;
    }

    public function notificarUsuario($destinatario, $mensagem){
        $this->notificador->enviar($destinatario, $mensagem);
    }
}

$sistemaEmail = new SistemaDeNotificacoe(new NotificadorEmail);
$sistemaSMS = new SistemaDeNotificacoe(new NotificadorSMS);
$sistemaWhatsapp = new SistemaDeNotificacoe(new NotificadorWhatsapp);

$sistemaEmail->notificarUsuario("joão@email.com", "Seu pedido foi confirmado");
$sistemaSMS->notificarUsuario("17997651234", "Seu pedido foi confirmado");
$sistemaEmail->notificarUsuario("17997651234", "Seu pedido foi confirmado");