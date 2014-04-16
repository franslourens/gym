<?php

namespace Jimmy\GymBundle\Form\Handler;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Jimmy\GymBundle\Form\Handler\FormHandlerInterface;
use Jimmy\GymBundle\Manager\AbstractBaseManager;

abstract class AbstractFormHandler implements FormHandlerInterface
{
    /**
     * @var Form
     */
    protected $form;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var AbstractBaseManager
     */
    protected $manager;

    /**
     * @var object
     */
    protected $data;

    /**
     * @param Request $request
     * @param object $manager
     */
    public function __construct(Request $request, AbstractBaseManager $manager)
    {
        $this->request = $request;
        $this->manager = $manager;
    }

    public function setForm(Form $form)
    {
        $this->form = $form;

        return $this;
    }

    public function getForm()
    {
        return $this->form;
    }

    public function process()
    {
        if (null === $this->form) {
            throw new \Exception('Form not set in ' . get_class($this) . '.');
        }

        $this->form->handleRequest($this->request);

        if ($this->form->isValid()) {
            $this->data = $this->form->getData();
            $this->onValid();

            return true;
        }

        // TODO: Find a way to display these errors instead.
        if (count($this->form->getErrors())) {
            if (function_exists('ld')) {
                ld($this->form->getErrors());
            }

            throw new \Exception('Form has errors that are not attached to an available element.');
        }

        $this->onInvalid();

        return false;
    }

    /**
     * Callback when form is valid.
     */
    abstract protected function onValid();

    /**
     * Callback when form is invalid.
     */
    protected function onInvalid()
    {
        // Allow no action by default.
    }
}