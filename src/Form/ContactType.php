<?php

namespace App\Form;

use App\Entity\TaskForm;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class ContactType extends AbstractType
{   
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {   
        $builder
            ->add('firstname', TextType::class, [
                'row_attr' => ['class' => 'field'], 
                'attr' => ['placeholder' => 'Your firstname', 'minlenght' => '2', 'maxlenght' => '50'],
                'label' => 'Firstname',
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(['min' => 2, 'max' => 50])
                ],                
                'translation_domain' => 'contact',
            ])            
            ->add('lastname', TextType::class, [
                'row_attr' => ['class' => 'field'], 
                'attr' => ['placeholder' => 'Your lastname', 'minlenght' => '2', 'maxlenght' => '50'],
                'label' => 'Lastname',                
                'constraints' => [
                    new Assert\NotBlank(),                    
                    new Assert\Length(['min' => 2, 'max' => 50])
                ],
                'translation_domain' => 'contact',
            ])
            ->add('email', EmailType::class, [
                'row_attr' => ['class' => 'field'], 
                'attr' => ['placeholder' => 'your@email.com', 'minlenght' => '2', 'maxlenght' => '180'],
                'label' => 'Email',
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Email(),
                    new Assert\Length(['min' => 2, 'max' => 180])
                ],'translation_domain' => 'contact',
            ])            
            ->add('phone', TextType::class, [
                'row_attr' => ['class' => 'field'], 
                'attr' => ['placeholder' => '01.02.03.04.05', 'minlenght' => '1', 'maxlenght' => '20'],
                'label' => 'Phone',
                'constraints' => [
                    new Assert\NotBlank(),                    
                    new Assert\Length(['min' => 1, 'max' => 20])
                ],'translation_domain' => 'contact',
            ])
            ->add('subject', TextType::class, [
                'row_attr' => ['class' => 'field'], 
                'attr' => ['placeholder' => 'Subject of your message', 'minlenght' => '2', 'maxlenght' => '100'],
                'label' => 'Message subject',                
                'constraints' => [
                    new Assert\NotBlank(),                   
                    new Assert\Length(['min' => 2, 'max' => 100])
                ],'translation_domain' => 'contact',
            ])            
            ->add('message', TextareaType::class, [
                'row_attr' => ['class' => 'field'], 
                'attr' => ['placeholder' => 'Enter your message...', 'rows' => '10', 'cols' => '24'],
                'label' => 'Message',
                'constraints' => [
                    new Assert\NotBlank(),
                ],
                'translation_domain' => 'contact',                    
            ])            
            ->add('gpdr', CheckboxType::class, [
                'row_attr' => ['class' => 'rgpd'],
                'attr' => ['class' => 'check-form'],                
                'label' => 'I accept the privacy policy.(Click to read)',
                'label_attr' => ['id' => 'openModal', 'class' => 'label-text'],
                'constraints' => [
                    new Assert\IsTrue(),
                ],
                'translation_domain' => 'contact',
            ])
            ->add('remarks', TextType::class, [
                'row_attr' => ['class' => 'remarks'],
                'attr' => ['placeholder' => 'name@domain.com', 'pattern' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$'],
                'required' => false,
                'constraints' => [
                    new Assert\Blank(),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'row_attr' => ['class' => 'center'],
                'attr' => [
                    'class' => 'button form-button'
                ],
                'label' => 'Submit',
                'translation_domain' => 'contact',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
           'data_class' => TaskForm::class,
        ]);
    }
}
