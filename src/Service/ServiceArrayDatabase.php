<?php

namespace App\Service;

class ServiceArrayDatabase
{   
    public function getArrayRoutes($local): array
    {   
        switch($local) {
            case 'en':
                return 
                [
                    'my-training',
                    'my-productions',
                    'about',
                    'legalnotice',
                ];
            break;
            case 'fr':
                return 
                [
                    'ma-formation',
                    'mes-realisations',
                    'a-propos',
                    'mentions-legales',
                ];
            break;        
        }
       
    }   

    public function getArrayHomeText($local): array
    {   
        switch ($local) {
            case 'en':
                return $arrayText =
                [   'title_page' => 'Home',
                    'title_events' => 'Lastest Events',
                    'title_training' => 'My training with',
                    'title_link' => '3W Academy - Training school',
                    'visual_name_training' => 'min_logo_3w_academy',
                    'visual_alt_attribute' => '3W Academy logo',
                    'title_examples' => 'Some examples...',
                    'title_technos' => 'Technos used : ',
                ];
            break;
            case 'fr':
                return $arrayText =
                [   'title_page' => 'Accueil',
                    'title_events' => 'Derniers évènements',
                    'title_training' => 'Ma formation avec la',
                    'title_link' => 'Ecole de foramtion 3W Académy',
                    'visual_name_training' => 'min_logo_3w_academy',
                    'visual_alt_attribute' => 'Logo de la 3W Académy',
                    'title_examples' => 'Quelques exemples...',
                    'title_technos' => 'Technos utilisés : ',
                ];
            break;        
        }
        
    }

    public function getArrayHomeAnimationText($local): array
    {   
        switch ($local) {
            case 'en':
                return $animationText =
                [
                    'name' => 'GUIGUES Laurent',
                    'job' => 'Web Developer',
                ];
            break;
            case 'fr':
                return $animationText =
                [
                    'name' => 'GUIGUES Laurent',
                    'job' => 'Développeur Web',
                ];
            break;       
        }
        
    }

    public function getArrayEvents($local): array
    {   
        switch ($local) {
            case 'en':
                return $events =
                [   
                    [
                    'title' => 'Professional title :',
                    'description' => 'I have obtained my Integrator Developper certificate in creation of web applications. ',
                    'label_obtained' => 'Obtained on the : ',
                    'obtained_date' => 'May 2, 2022',
                    'visual_name' => 'diplome_rncp',
                    'visual_alt_attribute' => 'Professional title illustration',
                    'link_professional_title' => 'https://diplome.3wa.fr/guigues-laurent',
                    'link_text' => 'Link to Professionnale title',
                    'pdf_text_link' => 'Download the certificate in pdf format',
                    'pdf_file_name' => 'diplome_rncp_2_05_2022',                    
                    ],

                    [
                    'title' => 'TOSA PHP Certification :',
                    'description' => 'I have obtained a score of 300/1000 for this TOSA PHP certification. ',
                    'label_obtained' => 'Obtained on the : ',
                    'obtained_date' => 'May 5, 2022',
                    'visual_name' => 'tosa_php_laurent_guigues',
                    'visual_alt_attribute' => 'TOSA PHP Certification of Laurent GUIGUES',
                    'link_professional_title' => 'https://www.tosa.org/FR/Index?param=WmhnUlBvN0g5SXBvUnZTaVVmbkgrQmo3Y2VSc0pkSy9KSndaR0JwMVVDNmp4ZHYrcUtBZUNOMWEwbmRpMS80M0J6SC9UYXhWZlEyeVNXOTVrSEhCeXc9PTo6otg-30vUtL8Zq9RjuhTvng',
                    'link_text' => 'Link to certification',
                    'pdf_text_link' => 'Download the certification in pdf format',
                    'pdf_file_name' => 'Tosa_PHP_laurent_guigues',                    
                    ],
                ];
            break;
            case 'fr':
                return $events =
                [   
                    [
                    'title' => 'Titre Profesionnel :',
                    'description' => 'J\'ai obtenu mon diplôme de Développeur intégrateur en réalisation d\'applications web. ',
                    'label_obtained' => 'Obtenu le : ',
                    'obtained_date' => '2 mai 2022',
                    'visual_name' => 'diplome_rncp',
                    'visual_alt_attribute' => 'illustration titre professionnel',
                    'link_professional_title' => 'https://diplome.3wa.fr/guigues-laurent',
                    'link_text' => 'Lien vers le titre professionnel',
                    'pdf_text_link' => 'Télécharger le certificat au format PDF',
                    'pdf_file_name' => 'diplome_rncp_2_05_2022',                    
                    ],

                    [
                    'title' => 'Certification TOSA PHP :',
                    'description' => 'J\'ai obtenu la note de 300/1000 à cette certification TOSA PHP. ',
                    'label_obtained' => 'Obtenu le : ',
                    'obtained_date' => '5 may 2022',
                    'visual_name' => 'tosa_php_laurent_guigues',
                    'visual_alt_attribute' => 'Certification TOSA PHP de Laurent GUIGUES',
                    'link_professional_title' => 'https://www.tosa.org/FR/Index?param=WmhnUlBvN0g5SXBvUnZTaVVmbkgrQmo3Y2VSc0pkSy9KSndaR0JwMVVDNmp4ZHYrcUtBZUNOMWEwbmRpMS80M0J6SC9UYXhWZlEyeVNXOTVrSEhCeXc9PTo6otg-30vUtL8Zq9RjuhTvng',
                    'link_text' => 'Lien vers la certification',
                    'pdf_text_link' => 'Télécharger la certification au format PDF',
                    'pdf_file_name' => 'Tosa_PHP_laurent_guigues',                    
                    ],
                ];
            break;        
        }        
    }

    public function getArrayExamples($local): array
    {
        $trainings = $this->getArrayTrainings($local);        
        shuffle($trainings['html']);
        foreach ($trainings['html'] as $th) {            
            $html = $th;
        }

        shuffle($trainings['js']);
        foreach ($trainings['js'] as $tj) {            
            $js = $tj;
        }

        shuffle($trainings['php']);
        foreach ($trainings['php'] as $ph) {
           $php = $ph;
        }

        $productions = $this->getArrayProductions($local);
        shuffle($productions);
        foreach ($productions as $prod) {
            $production = $prod;
        }
        
        return [$html,$js,$php,$production];
    }    

    public function getArrayAddressText($local): array
    {   
        switch ($local) {
            case 'en':
                return $addressText =
                [
                    'title' => 'My address',
                    'address' => '35 Chemin du verney - 73220 Argentine - France',
                    'phone' => '+33 06 62 54 22 70',
                    'contact_link' => 'Contact me',
                    'contact_url' => 'contact-me',
                    'url_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d699.3738509112278!2d6.299106311498398!3d45.47996777705833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478bcc73f68f8ecb%3A0xba754a906949935!2s35%20Chem.%20du%20Verney%2C%2073220%20Argentine!5e0!3m2!1sfr!2sfr!4v1638101938792!5m2!1sfr!2sfr',
                ];
            break;
            case 'fr':
                return $addressText =
                [
                    'title' => 'Mon adresse',
                    'address' => '35 Chemin du verney - 73220 Argentine - France',
                    'phone' => '+33 06 62 54 22 70',
                    'contact_link' => 'Me contacter',
                    'contact_url' => 'contact-me',
                    'url_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d699.3738509112278!2d6.299106311498398!3d45.47996777705833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478bcc73f68f8ecb%3A0xba754a906949935!2s35%20Chem.%20du%20Verney%2C%2073220%20Argentine!5e0!3m2!1sfr!2sfr!4v1638101938792!5m2!1sfr!2sfr',
                ];
            break;        
        }
        
    }    
    
    public function getArrayAboutText($local): array
    {   
        switch ($local) {
            case 'en':
                return $aboutText =
                [
                    'title_page' => 'Presentation',
                    'title_diploma' => 'My Diploma',
                    'title_career' => 'My career',
                    'aboutIntro' => 'I love computers since I was 8 years old. Today, I want to continue to learn and develop my skills in a company.',
                    'about' => 'After many years in the retail trade, I crossed an important line in my my professional career by taking up a new challenge. In 2021 september, i have begined a professional retraining to become a web integrator developer. With the 3W Academy and its intensive 3-month remote Bootcamp, I was able to learn the five languages most used in web development. (html, css, javascript, php, sql). The various exercises and the end-of-training project allowed me to put all this knowledge into practice. Today, I want to find a company in which I could continue to learn and bring my past experiences. Self-taught, I am rigorous, organized, persevering, curious and I like to take up new challenges.', 
                    'visual_name' => 'portrait_guigues_laurent',
                    'visual_alt_attribute' => 'Picture of GUIGUES laurent',
                    'url' => 'about',
                    'link_cv' => 'Download my CV in pdf format',
                    'file_name_cv' => 'english_cv_2022',
                ];
            break;
            case 'fr':
                return $aboutText =
                [
                    'title_page' => 'Presentation',
                    'title_diploma' => 'Mes Diplômes',
                    'title_career' => 'Ma carrière',
                    'aboutIntro' => 'J\'aime l\'informatique depuis l\'âge de 8 ans. Aujourd\'hui, je veux continuer à apprendre et à développer mes compétences au sein d\'une entreprise.',
                    'about' => 'Après de nombreuses années dans le commerce de détail, j\'ai franchi un cap important dans ma carrière professionnelle en relevant un nouveau défi. En septembre 2021, j\'ai commencé une reconversion professionnelle pour devenir Développeur web. Grâce à la 3W Académy et son Bootcamp intensif de 3 mois à distance, j\'ai pu apprendre les cinq langages les plus utilisés dans le développement web. (html, css, javascript, php, sql). Les différents exercices et le projet de fin de formation m\'ont permis de mettre en pratique toutes ces connaissances. Aujourd\'hui, je souhaite trouver une entreprise dans laquelle je pourrais continuer à apprendre et apporter mes expériences passées. Autodidacte, je suis rigoureux, organisé, persévérant, curieux et j\'aime relever de nouveaux défis.', 
                    'visual_name' => 'portrait_guigues_laurent',
                    'visual_alt_attribute' => 'Photos de GUIGUES laurent',
                    'url' => 'about',
                    'link_cv' => 'Télécharger mon CV au format PDF',
                    'file_name_cv' => 'french_cv_2022',
                ];
            break;        
        }
        
    }

    public function getArrayAboutCareer($local): array
    {   
        switch ($local) {
            case 'en':
                return $jobs =
                [
                    [
                    'title' => '2022-Today / Photovoltaic panel installer',
                    'description' => 'Installation of photovoltaic panels',
                    'visual_name' => 'logo_md_energie',
                    'visual_alt_attribute' => 'MD Energie logo',
                    'position' => 'right',
                    ],

                    [
                    'title' => '2021-2022 / Web developer training',
                    'description' => 'intensive remote Bootcamp (september 20, 2021 to january 24, 2022) - Learning Html, Css, Javascript, Php et Sql.',
                    'visual_name' => 'logo_3wa_130',
                    'visual_alt_attribute' => '3W Academy logo',
                    'position' => 'left',
                    ],

                    [
                    'title' => '2014-2022 / Warehouse manager',
                    'description' => 'storekeeper then warehouse manager in a group store.',
                    'visual_name' => 'logo_but',
                    'visual_alt_attribute' => 'BUT logo',
                    'position' => 'right',
                    ],

                    [
                    'title' => '2013-2014 / Maintenance technician',
                    'description' => 'Renovation of the bedrooms and bathrooms of an independent hotel under the Ibis franchise.',
                    'visual_name' => 'logo_ibis',
                    'visual_alt_attribute' => 'IBIS logo',
                    'position' => 'left',
                    ],

                    [
                    'title' => ' 2011-2013 / Executive assistant',
                    'description' => 'DIY store under franchise Weldom - Team of 5 people.',
                    'visual_name' => 'logo_weldom',
                    'visual_alt_attribute' => 'WELDOM logo',
                    'position' => 'right',
                    ],

                    [
                    'title' => '2003-2010 / Store manager',
                    'description' => 'DIY store under franchise Weldom - Team of 7 people.',
                    'visual_name' => 'logo_weldom',
                    'visual_alt_attribute' => 'WELDOM logo',
                    'position' => 'left',
                    ],

                    [
                    'title' => '1998-2003 / Selleur',
                    'description' => 'Independent hardware store.',
                    'visual_name' => 'independent_store',
                    'visual_alt_attribute' => 'Picture DIY store',
                    'position' => 'right',
                    ],
                ];
            break;
            case 'fr':
                return $jobs =
                [
                    [
                    'title' => '2022-Ce jour / Installateur de panneaux photovoltaïques',
                    'description' => 'Installation de panneaux photovoltaïques',
                    'visual_name' => 'logo_md_energie',
                    'visual_alt_attribute' => 'Logo MD Energie',
                    'position' => 'right',
                    ],

                    [
                    'title' => '2021-2022 / Formation Développeur Web',
                    'description' => 'Bootcamp intensif à distance (20 sept. 2021 au 24 janv. 2022 - Apprentissage Html, Css, Javascript, Php, Sql.',
                    'visual_name' => 'logo_3wa_130',
                    'visual_alt_attribute' => 'logo 3W Academy',
                    'position' => 'left',
                    ],

                    [
                    'title' => '2014-2022 / Chef de dépôt',
                    'description' => 'Magasinier puis chef de dépôt dans un magasin du groupe. Management de 3 personnes.',
                    'visual_name' => 'logo_but',
                    'visual_alt_attribute' => 'Logo BUT',
                    'position' => 'right',
                    ],

                    [
                    'title' => '2013-2014 / Technicien de maintenance',
                    'description' => 'Rénovation des chambres et des salles de bains d\'un hôtel indépendant sous la franchise Ibis.',
                    'visual_name' => 'logo_ibis',
                    'visual_alt_attribute' => 'Logo IBIS',
                    'position' => 'left',
                    ],

                    [
                    'title' => ' 2011-2013 / Adjoint de direction',
                    'description' => 'Magasin de bricolage sous franchise Weldom - Management de 5 personnes.',
                    'visual_name' => 'logo_weldom',
                    'visual_alt_attribute' => 'Logo WELDOM',
                    'position' => 'right',
                    ],

                    [
                    'title' => '2003-2010 / Directeur et Gérant',
                    'description' => 'Magasin de bricolage sous franchise Weldom - Management de 7 personnes',
                    'visual_name' => 'logo_weldom',
                    'visual_alt_attribute' => 'Logo WELDOM',
                    'position' => 'left',
                    ],

                    [
                    'title' => '1998-2003 / Vendeur',
                    'description' => 'Magasin de bricolage indépendant',
                    'visual_name' => 'independent_store',
                    'visual_alt_attribute' => 'Photo rayon de bricolage',
                    'position' => 'right',
                    ],
                ];
            break;        
        }
        
    }

    public function getArrayTrainingsText($local): array
    {   
        switch ($local) {
            case 'en':
                return $arrayText = 
                [   
                    'title_page' => 'My training',
                    'description_page' => 'You will be able to see the work done throughout this intensive 3-month training (BootCamp) through these few achievements.',           
                    'title_html_part' => 'The Html and Css',
                    'description_html_part' => 'In this first part, you will discover my work in Html 5 and Css 3. These exercises taught me the html architecture, then the css and the practical application of the design in mobile first.',
                    'title_js_part' => 'The Javascript',
                    'description_js_part' => 'This second part shows you my work in javascript. Small Exercises to assimilate the basic notions of JS.',
                    'title_php_part' => 'The PHP and MYSQL',
                    'description_php_part' => 'In this last part, it\'s shadow work. The part that the user does not see, a programming job to put the puzzle together. MVC architecture, Object Oriented Programming, database connection, prepared Sql queries... Here are some examples of my work.'            
                ];
            break;
            case 'fr':
                return $arrayText = 
                [   
                    'title_page' => 'Ma formation',
                    'description_page' => 'Vous pourrez voir le travail effectué tout au long de cette formation intensive de 3 mois(BootCamp) au travers de ces quelques réalisations.',           
                    'title_html_part' => 'Le HTML et le CSS',
                    'description_html_part' => 'Dans cette première partie, vous allez découvrir mon travail en Html 5 et Css 3. Ces exercices m\'ont appris l\'architecture html, puis le css et la mise en pratique de la conception en mobile first.',
                    'title_js_part' => 'Le Javascript',
                    'description_js_part' => 'Cette seconde partie vous montre mon travail en javascript. Des petits exercices pour assimiler les notions de base du JS.',
                    'title_php_part' => 'Le PHP et SQL',
                    'description_php_part' => 'Dans cette dernière partie, c\'est le travail de l\'ombre. La partie que l\'utilisateur ne voit pas, un travail de programmation pour assembler le puzzle. Architecture MVC, Programmation Orientée Objet, connexion à la base de donné, requêtes Sql préparées... Voici quelques exemples de mon travail.'            
                ];
            break;        
        }
        
    }

    public function getArrayTrainings($local): array
    {   
        switch ($local) {
            case 'en':
                return $trainings = 
                [
                    'html' => [
                        [
                        'name' => 'New York exercise',
                        'description' => 'This first Exercise consists of creating a page on the city of New York. Starting from a model (in Jpeg), you have to create the html structure and the css so that the whole thing corresponds to the starting model. We have basic instructions, such as the size of the texts, the colors, the fonts or the width of the content. Then you have to get started !',
                        'visual_name' => 'newyork',
                        'visual_alt_attribute' => 'A beautiful page on the city of New York',
                        'url' => 'new_york',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'HTML logo',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'CSS logo',
                                ],
                            ],                    
                        ],
                        [
                        'name' => 'Hello World exercise',
                        'description' => 'This second Exercise is a travel diary page with a link to a second page. Some additional difficulties to master the notions seen in previous courses.',
                        'visual_name' => 'helloworld',
                        'visual_alt_attribute' => 'A travel diary',
                        'url' => 'hello_world',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'HTML logo',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'CSS logo',
                                ],
                            ],    
                        ],
                        [
                        'name' => 'Move Academy exercise',
                        'description' => 'A third Exercise in one page, with a table and a form. Clean instructions to learn how to work just with a visual.',
                        'visual_name' => 'moveacademy',
                        'visual_alt_attribute' => 'Home page of a dance company',
                        'url' => 'move_academy',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'HTML logo',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'CSS logo',
                                ],
                            ],    
                        ],
                        [
                        'name' => 'ArchiDesign Exercise',
                        'description' => 'This fourth Exercise with several pages had to be done in retrofitting (from the Desktop version to the mobile version). A small difficulty and an upside down reasoning in the use of media queries. In the end a very interesting Exercise that I let you discover.',
                        'visual_name' => 'archidesign',
                        'visual_alt_attribute' => 'A site for an architect',
                        'url' => 'archi_design',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'HTML logo',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'CSS logo',
                                ],
                            ],    
                        ],                                      
                    ],

                    'js' => [
                        [
                        'name' => 'A personal address book',
                        'description' => 'This address book uses the localStorage to store the addresses you enter. You can modify or delete an address at any time. It was an opportunity during this Exercise to also discover VueJs.',
                        'visual_name' => 'carnet_adresse',
                        'visual_alt_attribute' => 'An address book with VueJs',
                        'url' => 'address_book',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'HTML logo',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'CSS logo',
                                ],
                                [
                                'techno_name' => 'Javascript',
                                'visual_logo' => 'logo_javascript',
                                'visual_alt_attribute' => 'JS logo',
                                ],
                            ],    
                        ],
                        [
                        'name' => 'Objective moon',
                        'description' => 'A little game to take off a rocket and go to the moon. Are you ready for this long journey?',
                        'visual_name' => 'rocketmoon',
                        'visual_alt_attribute' => 'Objective moon',
                        'url' => 'rocket_moon',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'HTML logo',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'CSS logo',
                                ],
                                [
                                'techno_name' => 'Javascript',
                                'visual_logo' => 'logo_javascript',
                                'visual_alt_attribute' => 'JS logo',
                                ],
                            ],    
                        ],
                        [
                        'name' => 'Form Validation',
                        'description' => 'Forms are the main interaction between users and the machine to request information, create an account... Field validation control with JS allows the user to be supported in the event of an error with personalized and intuitive messages. This Exercise demonstrates this work.',
                        'visual_name' => 'formvalidator',
                        'visual_alt_attribute' => 'Form validation with JavaScript',
                        'url' => 'form_validator',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'HTML logo',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'CSS logo',
                                ],
                                [
                                'techno_name' => 'Javascript',
                                'visual_logo' => 'logo_javascript',
                                'visual_alt_attribute' => 'JS logo',
                                ],
                            ],    
                        ],
                        [
                        'name' => 'AJAX Request',
                        'description' => 'A small exercise to discover AJAX requests with the JQUERY library.',
                        'visual_name' => 'ajaxrequest',
                        'visual_alt_attribute' => 'AJAX request using JQUERY',
                        'url' => 'ajax_requests',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'HTML logo',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'CSS logo',
                                ],
                                [
                                'techno_name' => 'Javascript',
                                'visual_logo' => 'logo_javascript',
                                'visual_alt_attribute' => 'JS logo',
                                ],
                            ],    
                        ],
                    ],            

                    'php' => [
                        [
                        'name' => 'A blog',
                        'description' => 'To start learning, what better than creating a blog.',
                        'visual_name' => 'blog',
                        'visual_alt_attribute' => 'A blog',
                        'url' => 'blog',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'HTML logo',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'CSS logo',
                                ],
                                [
                                'techno_name' => 'Javascript',
                                'visual_logo' => 'logo_javascript',
                                'visual_alt_attribute' => 'JS logo',
                                ],
                                [
                                'techno_name' => 'PHP',
                                'visual_logo' => 'logo_php',
                                'visual_alt_attribute' => 'PHP logo',
                                ],
                                [
                                'techno_name' => 'SQL',
                                'visual_logo' => 'logo_sql',
                                'visual_alt_attribute' => 'SQL logo',
                                ],
                            ],    
                        ],
                        [
                        'name' => 'The restaurant',
                        'description' => 'After a blog, without OOP and without MVC, here is the site of the restaurant, the Bistrot. Architecture in MVC and OOP.',
                        'visual_name' => 'restaurant_bistrot',
                        'visual_alt_attribute' => 'Le Bistrot restaurant, Savoyard specialties',
                        'url' => 'restaurant_bistrot',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'HTML logo',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'CSS logo',
                                ],
                                [
                                'techno_name' => 'Javascript',
                                'visual_logo' => 'logo_javascript',
                                'visual_alt_attribute' => 'JS logo',
                                ],
                                [
                                'techno_name' => 'PHP',
                                'visual_logo' => 'logo_php',
                                'visual_alt_attribute' => 'PHP logo',
                                ],
                                [
                                'techno_name' => 'SQL',
                                'visual_logo' => 'logo_sql',
                                'visual_alt_attribute' => 'SQL logo',
                                ],
                            ],    
                        ],
                    ],              
                ];
            break;
            case 'fr':
                return $trainings = 
                [
                    'html' => [
                        [
                        'name' => 'Exercice New York',
                        'description' => 'Ce premier exercice consiste à créer une page sur la ville de New York. En partant d\'une maquette (en Jpeg), il faut créer la structure html et le css pour que l\'ensemble corresponde à la maquette de départ. On dispose d\'instructions de bases, comme la taille des textes, les couleurs, les polices de caractère ou la largeur du contenu. Après il faut se lancer !',
                        'visual_name' => 'newyork',
                        'visual_alt_attribute' => 'Une belle page sur la ville de New York',
                        'url' => 'new_york',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'Logo HTML',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'Logo CSS',
                                ],
                            ],                    
                        ],
                        [
                        'name' => 'Exercice Hello World',
                        'description' => 'Ce deuxième exercice est une page de carnet de voyage avec un lien vers une seconde page. Quelques difficultées supplémentaires pour maitriser les notions vues dans les cours précédents.',
                        'visual_name' => 'helloworld',
                        'visual_alt_attribute' => 'Un carnet de voyage',
                        'url' => 'hello_world',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'Logo HTML',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'Logo CSS',
                                ],
                            ],    
                        ],
                        [
                        'name' => 'Exercice Move Academy',
                        'description' => 'Un troisième exercice en une page, avec un tableau et un formulaire. Des instructions épurés pour apprendre à travailler juste avec un visuel.',
                        'visual_name' => 'moveacademy',
                        'visual_alt_attribute' => 'La page d\'accueil d\'une compagie de dance.',
                        'url' => 'move_academy',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'Logo HTML',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'Logo CSS',
                                ],
                            ],    
                        ],
                        [
                        'name' => 'Exercice ArchiDesign',
                        'description' => 'Ce quatrième exercice avec plusieurs pages devait être réaliser en retrofitting (de la version Desktop vers la version mobile). Une petite difficulté et un raisonnement à l\'envers dans l\'utilisation des média queries. Au final un exercice très intérressant que je vous laisse découvrir.',
                        'visual_name' => 'archidesign',
                        'visual_alt_attribute' => 'Le site d\'un architecte',
                        'url' => 'archi_design',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'Logo HTML',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'Logo CSS',
                                ],
                            ],    
                        ],                                      
                    ],

                    'js' => [
                        [
                        'name' => 'Un carnet d\'adresses personnel',
                        'description' => 'Ce carnet d\'adresse utilise le localStorage pour conserver les adresses que l\'on saisie. On peut à tout moment modifer une adresse ou la supprimer. Ce fut l\'occasion pendant cet exercice de découvrir aussi VueJs.',
                        'visual_name' => 'carnet_adresse',
                        'visual_alt_attribute' => 'Un carnet d\'adresse réalisé avec VueJs.',
                        'url' => 'address_book',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'Logo HTML',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'Logo CSS',
                                ],
                                [
                                'techno_name' => 'Javascript',
                                'visual_logo' => 'logo_javascript',
                                'visual_alt_attribute' => 'Logo JS',
                                ],
                                [
                                'techno_name' => 'VueJs',
                                'visual_logo' => 'logo_vuejs',
                                'visual_alt_attribute' => 'Logo VueJs',
                                ],
                            ],    
                        ],
                        [
                        'name' => 'Objectif lune',
                        'description' => 'Un petit jeu pour faire décoller une fusée et se rendre sur la lune. Etes-vous êtes prêt pour ce long voyage ?',
                        'visual_name' => 'rocketmoon',
                        'visual_alt_attribute' => 'Objectif lune',
                        'url' => 'rocket_moon',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'Logo HTML',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'Logo CSS',
                                ],
                                [
                                'techno_name' => 'Javascript',
                                'visual_logo' => 'logo_javascript',
                                'visual_alt_attribute' => 'Logo JS',
                                ],
                            ],    
                        ],
                        [
                        'name' => 'Validation formulaire',
                        'description' => 'Les formulaires sont la principale intéraction entre les utilisateurs et la machine pour demander une information, créer un compte... Le contrôle de la validation des champs avec JS permet d\'accompagner l\'utilisateur en cas d\'erreur avec des messages personnalisés et intuitifs. Cet exercice montre ce travail.',
                        'visual_name' => 'formvalidator',
                        'visual_alt_attribute' => 'Validation de formulaire avec javascript',
                        'url' => 'form_validator',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'Logo HTML',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'Logo CSS',
                                ],
                                [
                                'techno_name' => 'Javascript',
                                'visual_logo' => 'logo_javascript',
                                'visual_alt_attribute' => 'Logo JS',
                                ],
                            ],    
                        ],
                        [
                        'name' => 'Requêtes AJAX',
                        'description' => 'Un petit exercice pour découvrir les requêtes AJAX avec la bibliothèque JQUERY.',
                        'visual_name' => 'ajaxrequest',
                        'visual_alt_attribute' => 'Requêtes AJAX avc Jquery',
                        'url' => 'ajax_requests',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'Logo HTML',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'Logo CSS',
                                ],
                                [
                                'techno_name' => 'Javascript',
                                'visual_logo' => 'logo_javascript',
                                'visual_alt_attribute' => 'JS logo',
                                ],
                                [
                                'techno_name' => 'Jquery',
                                'visual_logo' => 'logo_jquery',
                                'visual_alt_attribute' => 'Logo JQUERY',
                                ],
                            ],    
                        ],
                    ],            

                    'php' => [
                        [
                        'name' => 'Un blog',
                        'description' => 'Pour commencer l\'apprentissage, quoi de mieux que la réalisation d\'un blog.',
                        'visual_name' => 'blog',
                        'visual_alt_attribute' => 'Un blog',
                        'url' => 'blog',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'Logo HTML',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'Logo CSS',
                                ],
                                [
                                'techno_name' => 'Javascript',
                                'visual_logo' => 'logo_javascript',
                                'visual_alt_attribute' => 'Logo JS',
                                ],
                                [
                                'techno_name' => 'PHP',
                                'visual_logo' => 'logo_php',
                                'visual_alt_attribute' => 'Logo PHP',
                                ],
                                [
                                'techno_name' => 'SQL',
                                'visual_logo' => 'logo_sql',
                                'visual_alt_attribute' => 'Logo SQL',
                                ],
                            ],    
                        ],
                        [
                        'name' => 'Un restaurant',
                        'description' => 'Après un blog, sans POO et sans MVC, voici le site du restaurant, le Bistrot. Architecture en MVC et Poo.',
                        'visual_name' => 'restaurant_bistrot',
                        'visual_alt_attribute' => 'Restaurant Le Bistrot - Spécialitées Savoyardes',
                        'url' => 'restaurant_bistrot',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'Logo HTML',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'Logo CSS',
                                ],
                                [
                                'techno_name' => 'Javascript',
                                'visual_logo' => 'logo_javascript',
                                'visual_alt_attribute' => 'Logo JS',
                                ],
                                [
                                'techno_name' => 'PHP',
                                'visual_logo' => 'logo_php',
                                'visual_alt_attribute' => 'Logo PHP',
                                ],
                                [
                                'techno_name' => 'SQL',
                                'visual_logo' => 'logo_sql',
                                'visual_alt_attribute' => 'Logo SQL',
                                ],
                            ],    
                        ],
                    ],              
                ];
            break;
        }       
        
    }     

    public function getArrayProductionsText($local): array
    {   
        switch ($local) {
            case 'en':
                return $arrayText =
                [
                    'title_page' => 'My productions',
                    'description_page' => 'Discover on this page my achievements. Some are only projects and others are online.',
                    'title_technos' => 'Technos used : ',
                ];
            break;
            case 'fr':
                return $arrayText =
                [
                    'title_page' => 'Mes réalisations',
                    'description_page' => 'Découvrez sur cette page mes réalisations. Certaines ne sont que des projets et d\'autres sont en lignes.',
                    'title_technos' => 'Technos utilisés : ',
                ];
            break;        
        }
        
    }

    public function getArrayProductions($local): array
    {   
        switch ($local) {
            case 'en':
                return $productions =
                [
                    [
                    'name' => 'My portfolio',
                    'description' => 'The portfolio you are currently on. This new version has developed with Symfony and i added the choice to english or french language.',
                    'visual_name' => 'portfolio_v2',
                    'visual_alt_attribute' => 'Portfolio Laurent GUIGUES visual',
                    'url' => '/',
                    'target' => '_self',
                    'technos' => [
                            [
                            'techno_name' => 'HTML 5',
                            'visual_logo' => 'logo_html',
                            'visual_alt_attribute' => 'HTML logo',
                            ],
                            [
                            'techno_name' => 'CSS 3',
                            'visual_logo' => 'logo_css',
                            'visual_alt_attribute' => 'CSS logo',
                            ],
                            [
                            'techno_name' => 'Javascript',
                            'visual_logo' => 'logo_javascript',
                            'visual_alt_attribute' => 'JS logo',
                            ],
                            [
                            'techno_name' => 'PHP',
                            'visual_logo' => 'logo_php',
                            'visual_alt_attribute' => 'PHP logo',
                            ],
                            [
                            'techno_name' => 'SYMFONY',
                            'visual_logo' => 'logo_symfony',
                            'visual_alt_attribute' => 'SYMFONY Logo',
                            ],
                            [
                            'techno_name' => 'TWIG',
                            'visual_logo' => 'logo_twig',
                            'visual_alt_attribute' => 'TWIG Logo',
                            ],                     
                        ],    
                    ],

                    [
                        'name' => 'The first version of my portfolio',
                        'description' => 'The first version of my portfolio. MVC architecture and use of OOP',
                        'visual_name' => 'portfolio_v1',
                        'visual_alt_attribute' => 'Old portfolio Laurent GUIGUES visual',
                        'url' => 'https://projects.laurentguigues.fr/portfolioV1',
                        'target' => '_blank',
                        'technos' => [
                                [
                                'techno_name' => 'HTML 5',
                                'visual_logo' => 'logo_html',
                                'visual_alt_attribute' => 'HTML logo',
                                ],
                                [
                                'techno_name' => 'CSS 3',
                                'visual_logo' => 'logo_css',
                                'visual_alt_attribute' => 'CSS logo',
                                ],
                                [
                                'techno_name' => 'Javascript',
                                'visual_logo' => 'logo_javascript',
                                'visual_alt_attribute' => 'JS logo',
                                ],
                                [
                                'techno_name' => 'PHP',
                                'visual_logo' => 'logo_php',
                                'visual_alt_attribute' => 'PHP logo',
                                ],                    
                            ],    
                        ],

                    [
                    'name' => 'Final project of training',
                    'description' => 'In order to validate this training for obtaining the diploma of Web Developer Integrator in mobile application, here is my final project. This is the redesign of the website of a member of my family who owns a flower shop. This project respects the standards of a MVC architecture and uses the Poo. A front-end and a back-end in mobile first with 4 breakpoints and use of Flexbox.',
                    'visual_name' => 'bouton_dor',
                    'visual_alt_attribute' => 'Bouton d\'Or visual project',
                    'url' => 'https://projects.laurentguigues.fr/boutondor',
                    'target' => '_blank',
                    'technos' => [
                            [
                            'techno_name' => 'HTML 5',
                            'visual_logo' => 'logo_html',
                            'visual_alt_attribute' => 'HTML logo',
                            ],
                            [
                            'techno_name' => 'CSS 3',
                            'visual_logo' => 'logo_css',
                            'visual_alt_attribute' => 'CSS logo',
                            ],
                            [
                            'techno_name' => 'Javascript',
                            'visual_logo' => 'logo_javascript',
                            'visual_alt_attribute' => 'JS logo',
                            ],
                            [
                            'techno_name' => 'PHP',
                            'visual_logo' => 'logo_php',
                            'visual_alt_attribute' => 'PHP logo',
                            ],
                            [
                            'techno_name' => 'SQL',
                            'visual_logo' => 'logo_sql',
                            'visual_alt_attribute' => 'SQL logo',
                            ],
                        ],    
                    ],

                    [
                    'name' => 'BMI Calculator',
                    'description' => 'Work on OOP in PHP and use of Bootstrap 5',
                    'visual_name' => 'imc_calculator',
                    'visual_alt_attribute' => 'BMI calculator visual project',
                    'url' => 'https://projects.laurentguigues.fr/calculatorImc',
                    'target' => '_blank',
                    'technos' => [
                            [
                            'techno_name' => 'HTML 5',
                            'visual_logo' => 'logo_html',
                            'visual_alt_attribute' => 'HTML logo',
                            ],
                            [
                            'techno_name' => 'BOOTSTRAP 5',
                            'visual_logo' => 'logo_bootstrap',
                            'visual_alt_attribute' => 'BOOSTRAP logo',
                            ],
                            [
                            'techno_name' => 'CSS 3',
                            'visual_logo' => 'logo_css',
                            'visual_alt_attribute' => 'CSS logo',
                            ],
                            [
                            'techno_name' => 'Javascript',
                            'visual_logo' => 'logo_javascript',
                            'visual_alt_attribute' => 'JS logo',
                            ],
                            [
                            'techno_name' => 'PHP',
                            'visual_logo' => 'logo_php',
                            'visual_alt_attribute' => 'PHP logo',
                            ],                    
                        ],    
                    ],

                    [
                    'name' => 'A small robot to customize',
                    'description' => 'Base Bootstrap 5, PHP with Twig template and personal CSS for Mobile Fisrt.',
                    'visual_name' => 'custom_robot',
                    'visual_alt_attribute' => 'Custom Robot visual project',
                    'url' => 'https://projects.laurentguigues.fr/customRobot',
                    'target' => '_blank',
                    'technos' => [
                            [
                            'techno_name' => 'HTML 5',
                            'visual_logo' => 'logo_html',
                            'visual_alt_attribute' => 'HTML logo',
                            ],
                            [
                            'techno_name' => 'BOOTSTRAP 5',
                            'visual_logo' => 'logo_bootstrap',
                            'visual_alt_attribute' => 'BOOSTRAP logo',
                            ],
                            [
                            'techno_name' => 'CSS 3',
                            'visual_logo' => 'logo_css',
                            'visual_alt_attribute' => 'CSS logo',
                            ],
                            [
                            'techno_name' => 'Javascript',
                            'visual_logo' => 'logo_javascript',
                            'visual_alt_attribute' => 'JS logo',
                            ],
                            [
                            'techno_name' => 'PHP',
                            'visual_logo' => 'logo_php',
                            'visual_alt_attribute' => 'PHP logo',
                            ],
                            [
                            'techno_name' => 'TWIG',
                            'visual_logo' => 'logo_twig',
                            'visual_alt_attribute' => 'TWIG logo',
                            ],                     
                        ],    
                    ],
                ];
            break;
            case 'fr':
                return $productions =
                [
                    [
                    'name' => 'Mon portfolio',
                    'description' => 'Le portfolio sur lequel vous êtes en ce moment. Cette nouvelle version a été développée avec Symfony et j\'ai ajouté le choix de la langue anglaise ou française.',
                    'visual_name' => 'portfolio_v2',
                    'visual_alt_attribute' => 'Visuel du portfolio de GUIGUES Laurent',
                    'url' => '/',
                    'target' => '_self',
                    'technos' => [
                            [
                            'techno_name' => 'HTML 5',
                            'visual_logo' => 'logo_html',
                            'visual_alt_attribute' => 'Logo HTML',
                            ],
                            [
                            'techno_name' => 'CSS 3',
                            'visual_logo' => 'logo_css',
                            'visual_alt_attribute' => 'Logo CSS',
                            ],
                            [
                            'techno_name' => 'Javascript',
                            'visual_logo' => 'logo_javascript',
                            'visual_alt_attribute' => 'Logo JS',
                            ],
                            [
                            'techno_name' => 'PHP',
                            'visual_logo' => 'logo_php',
                            'visual_alt_attribute' => 'Logo PHP',
                            ],
                            [
                            'techno_name' => 'SYMFONY',
                            'visual_logo' => 'logo_symfony',
                            'visual_alt_attribute' => 'Logo SYMFONY',
                            ],
                            [
                            'techno_name' => 'TWIG',
                            'visual_logo' => 'logo_twig',
                            'visual_alt_attribute' => 'Logo TWIG',
                            ],                       
                        ],    
                    ],

                    [
                    'name' => 'La première version de mon portfolio',
                    'description' => 'La première version de mon portfolio. Architecture MVC et utilisation de la POO',
                    'visual_name' => 'portfolio_v1',
                    'visual_alt_attribute' => 'Visuel ancien portfolio de GUIGUES Laurent',
                    'url' => 'https://projects.laurentguigues.fr/portfolioV1',
                    'target' => '_blank',
                    'technos' => [
                            [
                            'techno_name' => 'HTML 5',
                            'visual_logo' => 'logo_html',
                            'visual_alt_attribute' => 'Logo HTML',
                            ],
                            [
                            'techno_name' => 'CSS 3',
                            'visual_logo' => 'logo_css',
                            'visual_alt_attribute' => 'Logo CSS',
                            ],
                            [
                            'techno_name' => 'Javascript',
                            'visual_logo' => 'logo_javascript',
                            'visual_alt_attribute' => 'Logo JS',
                            ],
                            [
                            'techno_name' => 'PHP',
                            'visual_logo' => 'logo_php',
                            'visual_alt_attribute' => 'Logo PHP',
                            ],                    
                        ],    
                    ],

                    [
                    'name' => 'Mon projet de fin de formation',
                    'description' => 'Afin de valider cette formation pour l\'obtention du diplôme de Développeur Intégrateur Web en application mobile, voici mon projet final. Il s\'agit de la refonte du site internet d\'un membre de ma famille qui possède un magasin de fleurs. Ce projet respecte les standards d\'une architecture MVC et utilise la Poo. Un front-end et un back-end en mobile first avec 4 points de ruptures et utilisation de Flexbox.',
                    'visual_name' => 'bouton_dor',
                    'visual_alt_attribute' => 'Visuel du projet Bouton d\'or',
                    'url' => 'https://projects.laurentguigues.fr/boutondor',
                    'target' => '_blank',
                    'technos' => [
                            [
                            'techno_name' => 'HTML 5',
                            'visual_logo' => 'logo_html',
                            'visual_alt_attribute' => 'Logo HTML',
                            ],
                            [
                            'techno_name' => 'CSS 3',
                            'visual_logo' => 'logo_css',
                            'visual_alt_attribute' => 'Logo CSS',
                            ],
                            [
                            'techno_name' => 'Javascript',
                            'visual_logo' => 'logo_javascript',
                            'visual_alt_attribute' => 'Logo JS',
                            ],
                            [
                            'techno_name' => 'PHP',
                            'visual_logo' => 'logo_php',
                            'visual_alt_attribute' => 'Logo PHP',
                            ],
                            [
                            'techno_name' => 'SQL',
                            'visual_logo' => 'logo_sql',
                            'visual_alt_attribute' => 'Logo SQL',
                            ],
                        ],    
                    ],

                    [
                    'name' => 'Une calculatrice IMC',
                    'description' => 'Travail sur la POO en PHP et utilisation de Bootstrap 5.',
                    'visual_name' => 'imc_calculator',
                    'visual_alt_attribute' => 'Visuel calculatrice IMC',
                    'url' => 'https://projects.laurentguigues.fr/calculatorImc',
                    'target' => '_blank',
                    'technos' => [
                            [
                            'techno_name' => 'HTML 5',
                            'visual_logo' => 'logo_html',
                            'visual_alt_attribute' => 'Logo HTML',
                            ],
                            [
                            'techno_name' => 'BOOTSTRAP 5',
                            'visual_logo' => 'logo_bootstrap',
                            'visual_alt_attribute' => 'Logo BOOTSTRAP',
                            ],
                            [
                            'techno_name' => 'CSS 3',
                            'visual_logo' => 'logo_css',
                            'visual_alt_attribute' => 'Logo CSS',
                            ],
                            [
                            'techno_name' => 'Javascript',
                            'visual_logo' => 'logo_javascript',
                            'visual_alt_attribute' => 'Logo JS',
                            ],
                            [
                            'techno_name' => 'PHP',
                            'visual_logo' => 'logo_php',
                            'visual_alt_attribute' => 'Logo PHP',
                            ],                    
                        ],    
                    ],

                    [
                    'name' => 'Un petit robot à personnaliser',
                    'description' => 'Base Bootstrap 5, PHP avec template Twig et CSS personnel pour le Mobile Fisrt.',
                    'visual_name' => 'custom_robot',
                    'visual_alt_attribute' => 'Visuel robot à personnaliser',
                    'url' => 'https://projects.laurentguigues.fr/customRobot',
                    'target' => '_blank',
                    'technos' => [
                            [
                            'techno_name' => 'HTML 5',
                            'visual_logo' => 'logo_html',
                            'visual_alt_attribute' => 'Logo HTML',
                            ],
                            [
                            'techno_name' => 'BOOTSTRAP 5',
                            'visual_logo' => 'logo_bootstrap',
                            'visual_alt_attribute' => 'Logo BOOTSTRAP',
                            ],
                            [
                            'techno_name' => 'CSS 3',
                            'visual_logo' => 'logo_css',
                            'visual_alt_attribute' => 'Logo CSS',
                            ],
                            [
                            'techno_name' => 'Javascript',
                            'visual_logo' => 'logo_javascript',
                            'visual_alt_attribute' => 'Logo JS',
                            ],
                            [
                            'techno_name' => 'PHP',
                            'visual_logo' => 'logo_php',
                            'visual_alt_attribute' => 'Logo PHP',
                            ],
                            [
                            'techno_name' => 'TWIG',
                            'visual_logo' => 'logo_twig',
                            'visual_alt_attribute' => 'Logo TWIG',
                            ],                     
                        ],    
                    ],
                ];
            break;        
        }
        
    }

    public function getArrayContactText($local): array
    {   
        switch ($local) {
            case 'en':
                return $arrayText =
                [
                    'title_page' => 'Contact me',
                    'close_modal' => 'Close',
                    'info_required' => 'All fields are required.',
                ];
            break;
            case 'fr':
                return $arrayText =
                [
                    'title_page' => 'Me contacter',
                    'close_modal' => 'Fermer',
                    'info_required' => 'Tous les champs sont requis.'
                ];
            break;        
        }   
        
    }

    public function getArrayBreadcrumbText($local): array
    {   
        switch ($local) {
            case 'en':
                return $arrayText =
                [
                    'home' => 'Home',         
                ];
            break;
            case 'fr':
                return $arrayText =
                [
                    'home' => 'Accueil',         
                ];
            break;        
        }
        
    }

    public function getArrayLegalnoticeText($local): array
    {   
        switch ($local) {
            case 'en':
                return $arrayText =
                [
                    'title_page' => 'Legal Notice',
                    'web_url' => 'https://www.laurentguigues.fr',
                    'name' => 'Laurent GUIGUES',
                    'label_website' => 'Website : ',
                    'p_intro' => 'Please read carefully the different terms of use of this site before browsing its pages. By connecting to this site, you unreservedly accept these terms and conditions. Also, in accordance with article n°6 of Law n°2004-575 of June 21, 2004 for confidence in the digital economy, the manager of this website ',
                    'p_intro_end' => ' is :',
                    'editor_site_title' => 'Site editor',
                    'editor_name' => 'Laurent GUIGUES',
                    'label_publishing_manager' => 'Publishing manager : ',
                    'name_publishing_manager' => 'Laurent GUIGUES',
                    'label_email_editor' => 'E-Mail : ',
                    'email_editor' => 'contact@laurentguigues.fr',            
                    'editor_website' => 'www.laurentguigues.fr',
                    'website_hosting_title' => 'Website hosting',
                    'label_host' => 'Host : ',
                    'host_address' => 'PlanetHoster 4416 Louis B. Mayer - Laval (Grand Montréal), Québec H7P 0G1 - Canada',            
                    'host_website' => 'www.planethoster.com/fr/',
                    'development_title' => 'Development',
                    'developer_name' => 'Laurent GUIGUES',            
                    'developer_website' => 'www.laurentguigues.fr',
                    'terms_title' => 'Terms of use',
                    'p_terms_start' => 'This site ',
                    'p_terms_end' => ' uses different web languages (HTML5, Javascript, CSS, etc ...) for better user comfort and more pleasant graphics, we recommend that you use modern browsers such as Edge, Safari, Firefox, Google Chrome, etc...
                    Laurent GUIGUES implements all the means at his disposal to ensure reliable information and reliable updating of his website. However, errors or omissions may occur. The Internet user must therefore ensure the accuracy of the information with Laurent GUIGUES, and report any changes to the site that he or she deems useful. Laurent GUIGUES is in no way responsible for the use made of this information, and for any direct or indirect damage that may result.',
                    'hyperlinks_title' => 'Hyperlinks',
                    'p_hyperlinks' => 'Websites may offer links to other websites or other resources available on the Internet. Laurent GUIGUES has no means to control the sites in connection with its websites, does not answer for the availability of such sites and external sources, nor does it guarantee it.
                    Users, subscribers and visitors to websites may not set up a hyperlink to this site without the express prior authorization of Laurent GUIGUES.
                    In the event that a user or visitor wishes to set up a hyperlink to this website, it will be up to him to send an email accessible on the site in order to formulate his request to set up a hyperlink. Laurent GUIGUES reserves the right to accept or refuse a hyperlink without having to justify his decision.',
                    'services_provided_title' => 'Services provided',
                    'p_services_provided_start' => 'Laurent GUIGUES endeavors to provide information on the site ',
                    'p_services_provided_end' => ' that is as precise as possible. The information on the site is not exhaustive and the photos are not contractual. They are given subject to modifications having been made since they were put online. In addition, all the information indicated on the site is given as an indication, and is likely to change or evolve without notice.',
                    'intellectual_property_title' => 'Intellectual property',
                    'p_intellectual_property' => 'All content on this site including, but not limited to, graphics, images, text, videos, animations, sounds, logos, gifs and icons as well as their formatting are the exclusive property of Laurent GUIGUES with the exception of trademarks , logos or content belonging to other partner companies or authors.
                    Any reproduction, distribution, modification, adaptation, retransmission or publication, even partial, of these various elements is strictly prohibited without the express written consent of Laurent GUIGUES. This representation or reproduction, by any means whatsoever, constitutes an infringement punishable by articles L.335-2 and following of the Intellectual Property Code. Failure to comply with this prohibition constitutes an infringement which may engage the civil and criminal liability of the counterfeiter. Additionally, the owners of the copied content may take legal action against you.',
                    'disputes_title' => 'Disputes',
                    'p_disputes' => 'These conditions of the site are governed by French law and any dispute or litigation that may arise from the interpretation or execution of these will be the exclusive jurisdiction of the courts. The reference language for the settlement of any disputes is French.',
                    'gpdr_title' => 'GPDR / Personal Data',
                    'p_gpdr_start' => 'In general, you are not required to communicate your personal data to us when you visit the website ',
                    'p_gpdr_end' => '. However, this principle has certain exceptions. Indeed, you may be required to provide us with certain data such as: your surname, first name, email address or telephone number.
                    In any case, you can refuse to provide your personal data. In this case, you will not be able to use the services of the site, in particular that of soliciting information. Your data is confidential and private and is not passed on to third parties.
                    The databases are protected by the provisions of the law of July 1, 1998 transposing directive 96/9 of March 11, 1996 relating to the legal protection of databases.',
                    'date_legal_notice' => 'Legal notice - 2022 february, 13',
                ];
            break;
            case 'fr':
                return $arrayText =
                [
                    'title_page' => 'Mentions légales ',
                    'web_url' => 'https://www.laurentguigues.fr',
                    'name' => 'Laurent GUIGUES',
                    'label_website' => 'Site web : ',
                    'p_intro' => 'Merci de lire avec attention les différentes modalités d\'utilisation du présent site avant d\'y parcourir ses pages. En vous connectant sur ce site, vous acceptez sans réserves les présentes modalités. Aussi, conformément à l\'article n°6 de la Loi n°2004-575 du 21 Juin 2004 pour la confiance dans l\'économie numérique, le responsable du présent site internet ',
                    'p_intro_end' => ' est :',
                    'editor_site_title' => 'Editeur du site',
                    'editor_name' => 'Laurent GUIGUES',
                    'label_publishing_manager' => 'Responsable publication : ',
                    'name_publishing_manager' => 'Laurent GUIGUES',
                    'label_email_editor' => 'Email : ',
                    'email_editor' => 'contact@laurentguigues.fr',            
                    'editor_website' => 'www.laurentguigues.fr',
                    'website_hosting_title' => 'Hébergement',
                    'label_host' => 'Hébergeur : ',
                    'host_address' => 'PlanetHoster 4416 Louis B. Mayer - Laval (Grand Montréal), Québec H7P 0G1 - Canada',            
                    'host_website' => 'www.planethoster.com/fr/',
                    'development_title' => 'Développement',
                    'developer_name' => 'Laurent GUIGUES',            
                    'developer_website' => 'www.laurentguigues.fr',
                    'terms_title' => 'Conditions d\'utilisation',
                    'p_terms_start' => 'Ce site ',
                    'p_terms_end' => ' est proposé en différents langages web (HTML5, Javascript, CSS, etc ...) pour un meilleur confort d\'utilisation et un graphisme plus agréable, nous vous recommandons de recourir à des navigateurs modernes comme Edge, Safari, Firefox, Google Chrome, etc... Laurent GUIGUES met en oeuvre tous les moyens dont il dispose, pour assurer une information fiable et une mise à jour fiable de son site internet. Toutefois, des erreurs ou omissions peuvent survenir. L\'internaute devra donc s\'assurer de l\'exactitude des informations auprès de Laurent GUIGUES, et signaler toutes modifications du site qu\'il jugerait utile. Laurent GUIGUES n\'est en aucun cas responsable de l\'utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.',
                    'hyperlinks_title' => 'Liens hypertextes',
                    'p_hyperlinks' => 'Les sites internet peuvent offrir des liens vers d\'autres sites internet ou d\'autres ressources disponibles sur Internet. Laurent GUIGUES ne dispose d\'aucun moyen pour contrôler les sites en connexion avec ses sites internet, ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. Les utilisateurs, les abonnés et les visiteurs des sites internet ne peuvent pas mettre en place un hyperlien en direction de ce site sans l\'autorisation expresse et préalable de Laurent GUIGUES. Dans l\'hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction de ce site internet, il lui appartiendra d\'adresser un email accessible sur le site afin de formuler sa demande de mise en place d\'un hyperlien. Laurent GUIGUES se réserve le droit d\'accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.',
                    'services_provided_title' => 'Services fournis',
                    'p_services_provided_start' => 'Laurent GUIGUES s\'efforce de fournir sur le site ',
                    'p_services_provided_end' => ' des informations aussi précises que possible. Les renseignements figurant sur le site ne sont pas exhaustifs et les photos non contractuelles. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. Par ailleurs, tous les informations indiquées sur le site sont données à titre indicatif, et sont susceptibles de changer ou d\évoluer sans préavis.',
                    'intellectual_property_title' => 'Propriété intellectuelle',
                    'p_intellectual_property' => 'Tout le contenu du présent site incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de Laurent GUIGUES à l\'exception des marques, logos ou contenus appartenant à d\'autres sociétés partenaires ou auteurs. Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l\'accord exprès par écrit de Laurent GUIGUES. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des contenus copiés pourraient intenter une action en justice à votre encontre.',
                    'disputes_title' => 'Litiges',
                    'p_disputes' => 'Les présentes conditions du site sont régies par les lois françaises et toute contestation ou litiges qui pourraient naître de l\'interprétation ou de l\'exécution de celles-ci seront de la compétence exclusive des tribunaux. La langue de référence, pour le règlement de contentieux éventuels, est le français.',
                    'gpdr_title' => 'RGPD / Données personnelles',
                    'p_gpdr_start' => 'De manière générale, vous n\'êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez le site Internet ',
                    'p_gpdr_end' => '. Cependant, ce principe comporte certaines exceptions. En effet, vous pouvez être amenés à nous communiquer certaines données telles que : votre nom, prénom, adresse électronique ou votre numéro de téléphone. Dans tous les cas, vous pouvez refuser de fournir vos données personnelles. Dans ce cas, vous ne pourrez pas utiliser les services du site, notamment celui de solliciter des renseignements. Vos données sont confidentielles et privées et ne sont pas transmisent à des tiers. Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.',
                    'date_legal_notice' => 'Mentions légales au 13 février 2022',
                ];
            break;        
        }
        
    }

    public function getArrayErrorPageText($local): array
    {   
        switch ($local) {
            case 'en':
                return $arrayText = 
                [
                    'title_page' => 'This page does not exist',
                    'error_message' => 'The void of a 404 page...',
                    'background_image_name_portrait' => 'bkg_img_portrait',
                    'background_image_name_landscape' => 'bkg_img_landscape',
                    'alt_attribute' => 'The void of a 404 page',
                    'btn_link_return' => 'Return to Home',
                ];
            break;
            case 'fr':
                return $arrayText = 
                [
                    'title_page' => 'Cette page n\'existe pas',
                    'error_message' => 'Le néant d\'une page 404...',
                    'background_image_name_portrait' => 'bkg_img_portrait',
                    'background_image_name_landscape' => 'bkg_img_landscape',
                    'alt_attribute' => 'Néant d\'une page 404.',
                    'btn_link_return' => 'Retour à l\'accueil',
                ];
            break;        
        }
        
    }
}