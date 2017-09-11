<?php

namespace App\Section;

use EBM\{
    Field\Field
};

use App\LuGender;
use App\Utils\RegexUtil;

class InformacionPersonal extends AbstractApplicationSection
{
    protected $slug = 'informacion-personal';

    public function setFields()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $userInfo = $user->info()->first();

        $this->addField('name')
            ->setModel($userInfo)
            ->setLabel('Nombre')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setValueFromDb();

        $this->addField('paternal_last_name')
            ->setModel($userInfo)
            ->setLabel('Apellido paterno')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setValueFromDb();

        $this->addField('maternal_last_name')
            ->setModel($userInfo)
            ->setLabel('Apellido materno')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setValueFromDb();

        $this->addField('mobile_number')
            ->setModel($userInfo)
            ->setLabel('Teléfono celular')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setPlaceholder('eg. +502 1234 567 890')
            ->setValueFromDb();

        $this->addField('dob')
            ->setModel($userInfo)
            ->setLabel('Fecha de nacimiento')
            ->setType(Field::TYPE_DATE)
            ->required()
            ->setPlaceholder('DD/MM/AAAA')
            ->setValueFromDb();

        $this->addField('gender_id')
            ->setModel($userInfo)
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
            'mobile_number.regex' => 'El teléfono debe contener código de país y 8 dígitos para el número',
        ];
    }
}
