<?php

require_once __DIR__.'/vendor/autoload.php';

// Choix d'un transport de type SMTP
// Pour utiliser le protocole :
// - SMTPS, c-à-d SMTP sur du TLS, mettez 'ssl' (recommandé)
// - SMTP avec STARTTLS, mettez 'tls'
$transport = (new Swift_SmtpTransport('smtp.example.org', 587, 'ssl'))
    // Choix du compte mail
    ->setUsername('foo.bar@example.com')
    ->setPassword('123')
;

// Création du Mailer avec le Transport
$mailer = new Swift_Mailer($transport);

// Choix du sujet du mail
$message = (new Swift_Message('Hello Swiftmailer SMTP!'))
    // Choix de l'adresse de l'expéditeur
    // Même si mettez une adresse "from" différent du compte SMTP,
    // l'adresse du compte SMTP sera visible dans l'entête du mail
    ->setFrom(['foo.bar@example.com' => 'Foo Bar'])
    // Choix du destinataire
    ->setTo(['bar.baz@example.com'])
    // Choix du message au format texte
    ->setBody('Hello Swiftmailer SMTP!')
;

// Envoi du message
$result = $mailer->send($message);

