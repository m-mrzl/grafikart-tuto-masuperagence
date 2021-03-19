<?php
namespace App\Notification;


use App\Entity\Contact;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\MailerInterface;
use Twig\Environment;

class ContactNotification {

    /**
     * @var Mailer
     */
    private $mailer;
    /**
     * @var Environment
     */
    private $environment;

    public function __construct(MailerInterface $mailer, Environment $environment)
    {

        $this->mailer = $mailer;
        $this->environment = $environment;
    }

    public function notify(Contact $contact) {

        $email = (new TemplatedEmail())
            ->subject('Agence : ' . $contact->getProperty()->getTitle())
            ->from('noreply@mon-agence.local')
            ->replyTo($contact->getEmail())
            ->to('contact@mon-agence.local')
            ->htmlTemplate('emails/contact.html.twig')
            ->textTemplate('emails/contact.txt.twig')
            ->context(['contact' => $contact])
        ;

        $this->mailer->send($email);

    }

}