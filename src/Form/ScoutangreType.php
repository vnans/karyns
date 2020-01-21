<?php

namespace App\Form;

use App\Entity\Scoutangre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ScoutangreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomprenoms')
            ->add('datenaiss')
            ->add('lieunaiss')
            ->add('nationalite')
            ->add('situationmatri')
            ->add('sexe')
            ->add('email')
            ->add('profession')
            ->add('tel')
            ->add('bpostale')
            ->add('paroisse')
            ->add('baptise')
            ->add('baptisepar')
            ->add('datebapteme')
            ->add('lieubapteme')
            ->add('confrime')
            ->add('confirmerpar')
            ->add('dateconfirm')
            ->add('lieuconfirm')
            ->add('fonctparoisse')
            ->add('datescout')
            ->add('lieuscout')
            ->add('datepromesse')
            ->add('lieupromesse')
            ->add('fonctscoutactu')
            ->add('datenomi')
            ->add('stage1')
            ->add('stage1date')
            ->add('stage1lieu')
            ->add('stage2')
            ->add('stage2date')
            ->add('stage2lieu')
            ->add('stage3')
            ->add('stage3date')
            ->add('stage3lieu')
            ->add('stageinter1')
            ->add('stageinter1date', DateType::class, ['widget' => 'choice'], array(
                 'widget' => 'choice',
                 'years' => range(date('Y'), date('Y')+100),
                 'months' => range(date('m'), 12),
                 'days' => range(date('d'), 31),
               ))
            ->add('stageinter1lieu')
            ->add('stageinter2')
            ->add('stageinter2date', DateType::class, ['widget' => 'choice',])
            ->add('stageinter2lieu')
            ->add('img', Filetype::class, array('label' => 'Choisir une image','data_class'=>null))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Scoutangre::class,
        ]);
    }
}
