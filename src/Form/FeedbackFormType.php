<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class FeedbackFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('full_name' ,TextType::class, [
             'label' =>'Name',
              'label_attr' => [
              'class' =>'form-label'
              ],
              'attr'=>[
                'class' =>'form-control',
                'placeholder'=>'John Doe'
              ],
              'constraints' =>[
               new NotBlank()
              ]
              ])
              ->add('email' ,EmailType::class, [
                   'label' =>'Email',
                   'label_attr' => [
                     'class' => 'form-label'
                   ],
                   'attr'=>[
                    'class' =>'form-control',
                    'placeholder'=>'example@example.com'
                   ],
                   'constraints' =>[
                    new NotBlank(),
                    new Email([
                        'node' => 'strict'
                    ])
                   ]
                  ])

               ->add('address' ,  TextType::class, [
                'label' =>'Address',
                'label_attr' => [
                  'class' =>'form-label'
                ],
                'attr'=>[
                    'class' =>'form-control',
                    'placeholder'=>'banglore '
                ],
                'constraints' =>[
                 new NotBlank()
                ]
                ])

              ->add('description' ,TextareaType::class, [
                'label' =>'description',
                'label_attr' => [
                  'class' =>'form-label'
                ],
                'attr'=>[
                    'class' =>'form-control',
                    'placeholder'=>'type a description here..',
                    'rows' => 5
                ],
                'constraints' =>[
                 new NotBlank()
                ]
                ]);
              
    }
}