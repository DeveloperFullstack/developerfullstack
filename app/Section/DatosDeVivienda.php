<?php

namespace App\Section;

use App\Field\Field;
use App\ModelAdapters\UserAddressAdapter as UserAddress;
use App\ModelAdapters\StudentAdapter as Student;
use App\ModelAdapters\LuAddressStatesAdapter as LuAddressStates;
use App\ModelAdapters\LuAddressCountriesAdapter as LuAddressCountries;

class DatosDeVivienda extends AbstractBaseSection
{
    public function setSlug()
    {
        $this->slug = 'datos-de-vivienda';

        return $this;
    }

    public function setOnPostActionString()
    {
        $this->onPostActionString = route('front.application.store', ['slug' => $this->getSlug()]);

        return $this;
    }

    public function setFields()
    {
        $user = $this->user;
        $student = $user->student()->where('program_version', Student::CURRENT_PROGRAM_VERSION)->first();
        $address = UserAddress::where('user_id', $student->user_id)->first();

        $this->addField('zip_code')
            ->setModel($address)
            ->setLabel('Código postal')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setPlaceholder('00000')
            ->setValueFromDb();

        $this->addField('country_id')
            ->setModel($address)
            ->setOptions(LuAddressCountries::getOptions())
            ->setLabel('País')
            ->setType(Field::TYPE_SELECT)
            ->required()
            ->setValueFromDb();

        $this->addField('state_id')
            ->setModel($address)
            ->setOptions(LuAddressStates::getOptions())
            ->setLabel('Estado')
            ->setType(Field::TYPE_SELECT)
            ->required()
            ->setValueFromDb();

        $this->addField('city')
            ->setModel($address)
            ->setLabel('Ciudad')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setPlaceholder('eg. Ciudad de Guatemala')
            ->setValueFromDb();

        $this->addField('street')
            ->setModel($address)
            ->setLabel('Calle y número')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setPlaceholder('Calle y número')
            ->setValueFromDb();

        $this->addField('interior')
            ->setModel($address)
            ->setLabel('No. interior (opcional)')
            ->setType(Field::TYPE_TEXT)
            ->setPlaceholder('eg. int 5-b')
            ->setValueFromDb();

        $this->addField('neighborhood')
            ->setModel($address)
            ->setLabel('Zona')
            ->setType(Field::TYPE_TEXT)
            ->required()
            ->setPlaceholder('eg. zona 4')
            ->setValueFromDb();

        return $this;
    }

    public function getValidationRules()
    {
        return [
            'zip_code' => 'required|string|size:5|regex:/\d/',
            'country_id' => 'required|numeric',
            'state_id' => 'required|numeric',
            'city' => 'required|string|max:60',
            'street' => 'required|string|max:60',
            'interior' => 'required|string|max:60',
            'neighborhood' => 'required|string|max:60',
        ];
    }

    public function getValidationMessages()
    {
        return [
        ];
    }
}
