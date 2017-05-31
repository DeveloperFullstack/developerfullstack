<?php

namespace App\Form;

use App\Field\Field;

class RegisterForm extends AbstractBaseForm
{
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
