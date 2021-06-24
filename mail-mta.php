<?php

require_once __DIR__.'/vendor/autoload.php';

// Choix d'un transport de type sendmail adapté pour msmtp
$transport = new Swift_SendmailTransport('/usr/sbin/sendmail');

// Création du Mailer avec le Transport
$mailer = new Swift_Mailer($transport);

// Choix du sujet du mail
$message = (new Swift_Message('Hello Swiftmailer SMTP!'))
    // Choix de l'adresse de l'expéditeur
    // Même si mettez un from différent du username, l'adresse du
    // username sera visible dans l'entête du mail
    ->setFrom(['foo.bar@example.com' => 'Foo Bar'])
    // Choix du destinataire
    ->setTo(['bar.baz@example.com'])
    // Choix du message
    ->setBody('Hello Swiftmailer SMTP!')
;

// Envoi du message
$result = $mailer->send($message);

