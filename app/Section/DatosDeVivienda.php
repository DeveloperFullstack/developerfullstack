<?php

namespace App\Section;

use App\Field\Field;

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
        $this->addField('dob')
            ->setLabel('Fecha de nacimiento')
            ->setType(Field::TYPE_DATE)
            ->required()
            ->setPlaceholder('YYYY/MM/DD');

        return $this;
    }
}
