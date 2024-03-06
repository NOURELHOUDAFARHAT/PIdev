<?php

namespace App\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;


class EmailConfirmationListener implements EventSubscriberInterface
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public static function getSubscribedEvents()
    {
        return [
            FormEvents::POST_SUBMIT => 'onPostSubmit',
        ];
    }

    public function onPostSubmit(FormEvent $event)
{
    $form = $event->getForm();
    $data = $form->getData();

    if ($form->isSubmitted() && $form->isValid()) {
       
        $email = $data->getEmail(); 
        $emailObject = (new Email())
            ->from('noorfarhat45@gmail.com')
            ->to($email)
            ->subject('Confirmation de votre demande de visite')
            ->text('Votre demande de visite est confirmée.');

        $this->mailer->send($emailObject);
    }
}
    }
