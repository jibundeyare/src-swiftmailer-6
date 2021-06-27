# Swiftmailer 6

Cette projet montre comment utiliser Swiftmailer pour envoyer des mails
en utilisant directement un serveur SMTP ou un service de
transfert de mail.

## Install

    git clone https://github.com/jibundeyare/src-swiftmailer-6
    composer install

## Configuration

Ouvrez les fichiers suivants et configurer vos codes d'accès :

- `mail-mta.php`
- `mail-smtp.php`

## Utilisation

Lancez un server web :

    php -S localhost:8000

Puis visitez les pages :

- [http://localhost:8000/mail-mta.php](http://localhost:8000/mail-mta.php)
- [http://localhost:8000/mail-smtp.php](http://localhost:8000/mail-smtp.php)

