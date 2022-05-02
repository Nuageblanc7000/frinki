<?php

namespace App\Controller;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class EmailController extends AbstractController
{
    //va permettre de créer des emails garder l'exemple pour mes applications et mettre à jour
    #[Route('/email', name: 'app_email')]
    public function index(MailerInterface $mailer): Response
    {
        $tab = ['user' => 'robert'];
        $email = new TemplatedEmail();
        $email->to('chloe@gmail.com')
              ->subject('bienvenu sur frinki!!')
              ->text('bienvenu chez frinki nous vous remercions pour votre confiance')
              ->htmlTemplate('email/welcome.html.twig')
              ->context($tab);
              $mailer->send($email);
        return $this->render('email/index.html.twig', [
            'controller_name' => 'EmailController',
        ]);
    }
}
