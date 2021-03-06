<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pentarim\SyliusAffiliateBundle\Form\Type\Provision;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\Type;

class PercentageProvisionConfigurationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('percentage', 'percent', array(
                'label' => 'sylius.form.provision.percentage_provision_configuration.percentage',
                'type'  => 'integer',
                'constraints' => array(
                    new NotBlank(),
                    new Type(array('type' => 'numeric')),
                    new Range(array('min' => 1, 'max' => 100)),
                )
            ))
        ;
    }

    public function getName()
    {
        return 'sylius_affiliate_provision_percentage_configuration';
    }
}
