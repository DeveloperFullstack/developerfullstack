<?php

namespace App\Section;

use App\Field\Field;
use App\LuGender;
use App\Utils\RegexUtil;

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
        $this->addField('name')
            ->setModel($this->user)
            ->setLabel('Nombre')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setValueFromDb();

        $this->addField('paternal_last_name')
            ->setModel($this->user)
            ->setLabel('Apellido paterno')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setValueFromDb();

        $this->addField('maternal_last_name')
            ->setModel($this->user)
            ->setLabel('Apellido materno')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setValueFromDb();

        $this->addField('mobile_number')
            ->setModel($this->user)
            ->setLabel('Teléfono celular')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setPlaceholder('eg. +502 1234 567 890')
            ->setValueFromDb();

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
        $phonePattern = RegexUtil::PHONE_PATTERN;

        return [
            'dob' => 'required|date',
            'gender_id' => 'required|regex:/^[1,2]/i',
            'name' => 'required|string|max:40',
            'paternal_last_name' => 'required|string|max:40',
            'maternal_last_name' => 'required|string|max:40',
            'mobile_number' => "required|string|regex:/$phonePattern/", // +5211234567890
        ];
    }

    public function getValidationMessages()
    {
        return [
            'dob.date' => 'El campo debe ser una fecha válida',
            'mobile_number.regex' => 'El teléfono debe contener código de país y 10 dígitos para el número',
        ];
    }
}
