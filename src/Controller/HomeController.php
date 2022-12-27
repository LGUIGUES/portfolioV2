<?php

namespace App\Controller;

use App\Service\ServiceSession;
use App\Service\ServiceArrayDatabase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{   
    public function __construct(
        private array $languages,        
        private ServiceArrayDatabase $service,
        private ServiceSession $serviceSession,           
    ){}

    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {          
        $local = $this->serviceSession->sessionControl();           

        return $this->render('home/home.html.twig', [            
            'breadcrumb' => $this->service->getArrayBreadcrumbText($local),
            'homeText' => $this->service->getArrayHomeText($local),
            'aboutText' => $this->service->getArrayAboutText($local),
            'animationText' => $this->service->getArrayHomeAnimationText($local),
            'events' => $this->service->getArrayEvents($local),
            'examples' => $this->service->getArrayExamples($local),            
            'addressText' => $this->service->getArrayAddressText($local)
        ]);
    }

    #[Route('/{slug}', name: 'app_displaypage')]
    public function displayPage(string $slug = null): Response
    {   
        $local = $this->serviceSession->sessionControl();
        $routes = $this->service->getArrayRoutes($local);

        if (in_array($slug, $routes)) {
           
            switch($slug) {
                case 'my-training':
                    return $this->render('static/my_formation.html.twig', [
                        'breadcrumb' => $this->service->getArrayBreadcrumbText($local),                   
                        'arrayText' => $this->service->getArrayTrainingsText($local),
                        'trainings' => $this->service->getArrayTrainings($local),
                    ]);
                break;
                case 'ma-formation':
                    return $this->render('static/my_formation.html.twig', [
                        'breadcrumb' => $this->service->getArrayBreadcrumbText($local),                   
                        'arrayText' => $this->service->getArrayTrainingsText($local),
                        'trainings' => $this->service->getArrayTrainings($local),
                    ]);
                break;
                case 'my-productions':
                    return $this->render('production/my_productions.html.twig', [
                        'breadcrumb' => $this->service->getArrayBreadcrumbText($local),
                        'arrayText' => $this->service->getArrayProductionsText($local),
                        'productions' => $this->service->getArrayProductions($local),
                    ]);
                break;                               
                case 'mes-realisations':
                    return $this->render('production/my_productions.html.twig', [
                        'breadcrumb' => $this->service->getArrayBreadcrumbText($local),
                        'arrayText' => $this->service->getArrayProductionsText($local),
                        'productions' => $this->service->getArrayProductions($local),
                    ]);
                break;              
                case 'about':
                    return $this->render('static/about.html.twig', [
                        'breadcrumb' => $this->service->getArrayBreadcrumbText($local),
                        'aboutText' => $this->service->getArrayAboutText($local),
                        'events' => $this->service->getArrayEvents($local),
                        'jobs' =>$this->service->getArrayAboutCareer($local),
                    ]);
                break;
                case 'a-propos':
                    return $this->render('static/about.html.twig', [
                        'breadcrumb' => $this->service->getArrayBreadcrumbText($local),
                        'aboutText' => $this->service->getArrayAboutText($local),
                        'events' => $this->service->getArrayEvents($local),
                        'jobs' =>$this->service->getArrayAboutCareer($local),
                    ]);
                break;             
                case 'legalnotice':
                    return $this->render('static/legal_notice.html.twig', [
                        'breadcrumb' => $this->service->getArrayBreadcrumbText($local),
                        'arrayText' => $this->service->getArrayLegalnoticeText($local),
                    ]);
                break;                     
                case 'mentions-legales':
                    return $this->render('static/legal_notice.html.twig', [
                        'breadcrumb' => $this->service->getArrayBreadcrumbText($local),
                        'arrayText' => $this->service->getArrayLegalnoticeText($local),
                    ]);
                break;            
                }
        } else {
            return $this->errorPage($local);            
        }        
    } 
    
    #[Route('/translate/{locale}', name: 'app_translate')]
    public function translate(Request $request, $locale ): Response
    {  
        if (in_array($locale, $this->languages)) {
            // Save language in Session
            $request->getSession()->set('_locale', $locale);
            
            // Return on home page            
            return $this->redirectToRoute('app_homepage');
        } else {
            $local = 'en'; // Default local
            return $this->errorPage($local);
        }        
    }
    
    public function errorPage($local): Response
    {           
        return $this->render('static/404.html.twig', [
            'breadcrumb' => $this->service->getArrayBreadcrumbText($local),
            'arrayText' => $this->service->getArrayErrorPageText($local),
        ]);
    }
}
