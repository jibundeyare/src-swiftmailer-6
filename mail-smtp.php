<?php

require_once __DIR__.'/vendor/autoload.php';

// Choix du serveur SMTP
// Pour utiliser le protocole :
// - SMTPS, c-à-d SMTP sur du TLS, mettez 'ssl' (recommandé)
// - SMTP avec STARTTLS, mettez 'tls'
$transport = (new Swift_SmtpTransport('smtp.example.org', 587, 'tls'))
    // Choix du compte mail
    ->setUsername('foo.bar@example.com')
    ->setPassword('123')
;

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

