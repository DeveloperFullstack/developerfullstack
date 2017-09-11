<?php

namespace App\Form;

use EBM\Field\Field;
use EBM\Form\AbstractBaseForm;

class RegisterForm extends AbstractBaseForm
{
    public function setOnPostActionString()
    {
        $this->onPostActionString = route('front.home.register');

        return $this;
    }

    public function setFields()
    {
        $this->addField('email')
            ->setLabel('Correo electrónico')
            ->setType(Field::TYPE_EMAIL)
            ->required()
            ->setPlaceholder('email@email.com');

        return $this;
    }
}
