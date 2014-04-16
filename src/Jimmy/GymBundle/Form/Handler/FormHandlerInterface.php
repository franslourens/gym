<?php

namespace Jimmy\GymBundle\Form\Handler;

use Symfony\Component\Form\Form;

interface FormHandlerInterface
{
    /**
     * Sets the form to be handled.
     *
     * @param Form $form
     */
    public function setForm(Form $form);

    /**
     * Gets the form to be handled.
     *
     * @return Form $form
     */
    public function getForm();

    /**
     * Processes the form.
     *
     * @return boolean
     */
    public function process();
}