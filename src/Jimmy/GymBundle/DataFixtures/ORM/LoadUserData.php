<?php
// src/Jimmy/GymBundle/DataFixtures/ORM/LoadUserData.php

namespace Gimmy\GymBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jimmy\GymBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setEnabled(true);
        $userAdmin->setRoles(array('ROLE_SUPER_ADMIN'));
        $userAdmin->setUsername('admin');
        $userAdmin->setEmail('admin@admin.co.za');
        $userAdmin->setPlainPassword('test');
        $userAdmin->setBirthDate(new \DateTime());
        $userAdmin->setAddress('localhost');
        $userAdmin->setSex(1);
        $userAdmin->setContactNo('0761017946');

        $manager->persist($userAdmin);
        $manager->flush();
    }
}