<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * This file is kept for BC reasons, to avoid errors when upgrading from EasyAdmin 2.
 */
class EasyAdminController extends AbstractController
{
    public function __call($name, $arguments)
    {
        throw new \RuntimeException("This file is legacy from easyadmin2, see documentation about upgrade.");
    }
}
