<?php
namespace gtrias\TimePickerBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TimePickerType extends AbstractType
{
    public function getParent()
    {
        return 'datetime';
    }

    public function getName()
    {
        return 'timepicker';
    }
}
