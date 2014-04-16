<?php

namespace Jimmy\GymBundle\Manager;

use Doctrine\Common\Persistence\ObjectManager;
use Jimmy\GymBundle\Entity\User;
use Jimmy\GymBundle\Repository\UserRepository;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Doctrine\UserManager as BaseUserManager;
use FOS\UserBundle\Util\CanonicalizerInterface;
use FOS\UserBundle\Util\TokenGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Jimmy\GymBundle\Roles;
use Doctrine\ORM\EntityRepository;

/**
 * User manager
 */
class UserManager extends BaseUserManager
{
    protected $tokenGenerator;

    /**
     * @var \Jimmy\GymBundle\Repository\UserRepository
     */
    protected $userRepository;

    /**
     * @param string $email
     * @return User
     */
    public function createMember($email, $password)
    {
        // Generate a random password.
        //$password = substr($this->tokenGenerator->generateToken(), 0, 12);

        $user = $this->createUser();

        $user->setEmail($email);
        $user->setPlainPassword($password);
        $user->setRoles(array(Roles::MEMBER));
        $user->setEnabled(true);
        $user->setUsername($user->getEmail());
        $user->setBirthDate(new \DateTime());
        $user->setAddress('localhost');
        $user->setSex(1);
        $user->setContactNo('0761017946');
        ;

        return $user;
    }

    /**
     * Finds an user by id
     *
     * @param unknown $id
     */
    public function findUserById($id)
    {
        return $this->repository->find($id);
    }

    /**
     * @param TokenGeneratorInterface $tokenGenerator
     */
    public function setTokenGenerator(TokenGeneratorInterface $tokenGenerator)
    {
        $this->tokenGenerator = $tokenGenerator;
    }

    /**
     * Updates a user.
     *
     * @param UserInterface $user
     * @param Boolean       $andFlush Whether to flush the changes (default true)
     */
    public function updateUser(UserInterface $user, $andFlush = true)
    {
        /* @var $userInDb \Jimmy\GymBundle\Entity\User */
        $userInDb = $this->findUserByEmail($user->getEmail());

        if ($userInDb) {
            $userInDb->setConfirmationToken($user->getConfirmationToken());
            $userInDb->setEnabled($user->isEnabled());
            $userInDb->setPlainPassword($user->getPlainPassword());
            $userInDb->setRoles($user->getRoles());
            $userInDb->setBirthDate($user->getBirthDate());
            $userInDb->setAddress($user->getAddress());
            $userInDb->setSex($user->getSex());
            $userInDb->setContactNo($user->getContactNo());

            $saveUser = $userInDb;
        }
        else {
        	$user->setUsername($user->getEmail());
        	$user->setBirthDate(new \DateTime());
        	$user->setAddress('localhost');
        	$user->setSex(1);
        	$user->setContactNo('0761017946');

            $saveUser = $user;
        }

        $this->updateCanonicalFields($saveUser);
        $this->updatePassword($saveUser);

        $this->objectManager->persist($saveUser);
        if ($andFlush) {
            $this->objectManager->flush();
        }
    }

    /**
     * Sets the UserRepository
     *
     * @param EntityRepository $userRepository
     */
    public function setUserRepository(EntityRepository $userRepository)
    {
    	$this->userRepository = $userRepository;
    }

    /**
     * Gets the UserRepository
     *
     * @throws \Exception
     * @return \Jimmy\GymBundle\Repository\UserRepository
     */
    protected function getUserRepository()
    {
    	$userRepository = $this->userRepository;

    	if (null === $userRepository) {
    		throw new \Exception('User Repository not set in ' . get_class($this) . '.');
    	}

    	return $userRepository;
    }
}