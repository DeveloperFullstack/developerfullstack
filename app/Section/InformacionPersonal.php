<?php

namespace App\Section;

use App\Field\Field;

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

        return $this;
    }
}
