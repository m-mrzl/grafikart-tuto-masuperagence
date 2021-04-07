<?php
namespace App\Notification;

use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactNotification
{


    /**
     * @Route("/email")
     * @param MailerInterface $mailer
     * @return Response
     */
    public function sendEmail(MailerInterface $mailer)
    {
        $email = (new Email())
            ->from(new Address('mailtrap@example.com', 'Mailtrap'))
            ->to('newuser@example.com')
            ->cc('mailtrapqa@example.com')
            ->addCc('staging@example.com')
            ->bcc('mailtrapdev@example.com')
            ->replyTo('mailtrap@example.com')
            ->subject('Best practices of building HTML emails')
            ->text('Hey! Learn the best practices of building HTML emails and play with ready-to-go templates. Mailtrap’s Guide on How to Build HTML Email is live on our blog')
            ->html('<html>
<body>
		<p><br>Hey</br>
		Learn the best practices of building HTML emails and play with ready-to-go templates.</p>
		<p><a href="https://blog.mailtrap.io/build-html-email/">Mailtrap’s Guide on How to Build HTML Email</a> is live on our blog</p>
				</body>
			</html>');

        $mailer->send($email);

        return new Response(
            'Email was sent'
        );
    }

}