<?php

require_once __DIR__.'/vendor/autoload.php';

// Création du Transport
$transport = (new Swift_SmtpTransport('smtp.example.org', 587, 'tls'))
  ->setUsername('foo.bar@example.com')
  ->setPassword('123')
;

// Création du Mailer avec le Transport
$mailer = new Swift_Mailer($transport);

// Création d'un message
$message = (new Swift_Message('Hello Swiftmailer SMTP!'))
  ->setFrom(['foo.bar@example.com' => 'Foo Bar'])
  ->setTo(['bar.baz@example.com'])
  ->setBody('Hello Swiftmailer SMTP!')
  ;

// Envoi du message
$result = $mailer->send($message);

