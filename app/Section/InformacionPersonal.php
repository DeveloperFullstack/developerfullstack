<?php

namespace App\Section;

use App\Field\Field;
use App\LuGender;

class InformacionPersonal extends AbstractBaseSection
{
    public function setSlug()
    {
        $this->slug = 'informacion-personal';

        return $this;
    }

    public function setOnPostActionString()
    {
        $this->onPostActionString = route('front.application.store', ['slug' => $this->getSlug()]);

        return $this;
    }

    public function setFields()
    {
        $this->addField('dob')
            ->setModel($this->user)
            ->setLabel('Fecha de nacimiento')
            ->setType(Field::TYPE_DATE)
            ->required()
            ->setPlaceholder('DD/MM/AAAA')
            ->setValueFromDb();

        $this->addField('gender_id')
            ->setModel($this->user)
            ->setOptions(LuGender::OPTIONS)
            ->setLabel('Género')
            ->setType(Field::TYPE_RADIO)
            ->required()
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules()
    {
        return [
            'dob' => 'required|date',
            'gender_id' => 'required|regex:/^[1,2]/i'
        ];
    }

    public function getValidationMessages()
    {
        return [
            'dob.date' => 'El campo debe ser una fecha válida',
        ];
    }
}
