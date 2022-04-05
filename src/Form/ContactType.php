<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class, [
                'label' => 'Nom',
                'attr' => array('placeholder' => 'John DOE'),
                'required'   => true
            ])
            ->add('object', TextType::class, [
                'label' => 'Objet',
                'attr' => array('placeholder' => 'Lorem ipsum.'),
                'required' => true
            ])
            ->add('captcha', TextType::class, [
                'label' => '2 + 3 = ?',
                'attr' => array('placeholder' => '?'),
                'required' => true
            ])
            ->add('email',EmailType::class, [
                'label' => 'Courriel',
                'attr' => array('placeholder' => 'john.doe@example.org'),
                'required'   => true
            ])
            ->add('message', TextareaType::class, [
                'attr' => ['rows' => 6],
                'label' => 'Message',
                'attr' => array('placeholder' => 'Lorem ipsum.'),
                'required'   => true
            ])
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}
