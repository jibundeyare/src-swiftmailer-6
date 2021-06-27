<?php

require_once __DIR__.'/vendor/autoload.php';

// Choix d'un transport de type sendmail adapté pour msmtp
$transport = new Swift_SendmailTransport('/usr/sbin/sendmail -t');

// Création du Mailer avec le Transport
$mailer = new Swift_Mailer($transport);

// Choix du sujet du mail
$message = (new Swift_Message('Hello Swiftmailer MTA!'))
    // Choix de l'adresse de l'expéditeur
    // Même si mettez une adresse "from" différent du compte SMTP,
    // l'adresse du compte SMTP sera visible dans l'entête du mail
    ->setFrom(['foo.bar@example.com' => 'Foo Bar'])
    // Choix de l'adresse du destinataire
    ->setTo(['bar.baz@example.com'])
    // Choix du message au format texte
    ->setBody('Hello Swiftmailer MTA!')
;

// Envoi du message
$result = $mailer->send($message);

