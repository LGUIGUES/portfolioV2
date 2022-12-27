<?php

namespace App\Controller;

use App\Entity\TaskForm;
use App\Form\ContactType;
use App\Service\ServiceSession;
use Symfony\Component\Mime\Email;
use App\Service\ServiceArrayDatabase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{   
    public function __construct(
        private ServiceArrayDatabase $service,
        private ServiceSession $serviceSession,
    ){}

    #[Route('/contact', name: 'app_contact')]
    public function contact(Request $request, MailerInterface $mailer): Response
    {   
        $local = $this->serviceSession->sessionControl();   
        $task = new TaskForm();
        $task->setTask('Contact : ');        

        $form = $this->createForm(ContactType::class, $task);        

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();            
            
            $email = (new Email())
                ->from($task->getEmail('email'))
                ->to('contact@laurentguigues.fr')
                ->subject($task->getSubject('subject'))
                ->html(
                    $task->getTask('task')
                    .$task->getLastname('lastname').' '
                    .$task->getFirstname('firstname').'<br>Phone : '
                    .$task->getPhone('phone').'<br><br>'
                    .$task->getMessage('message')
                );

            $mailer->send($email);    

            $session = new Session();
            $session->getFlashBag()->add('success', 'Your ask contact was well sended !');
            return $this->redirectToRoute('app_contact');
        }
        
        return $this->render('contact/contact.html.twig', [
            'breadcrumb' => $this->service->getArrayBreadcrumbText($local),
            'contactText' => $this->service->getArrayContactText($local),
            'arrayText' => $this->service->getArrayLegalnoticeText($local),
            'required' => 'Fields marked * are required',
            'contactForm' => $form->createView(),
        ]);
    }
}
