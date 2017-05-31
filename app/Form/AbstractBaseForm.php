<?php

namespace App\Form;

use App\Field\Field;

abstract class AbstractBaseForm
{
    protected $fields = [];

    abstract public function setFields();

    public function addField(String $alias): Field
    {
        $field = new Field;

        $field->setName($alias);

        $this->fields[$alias] = $field;

        return $field;
    }

    public function getFields(): array
    {
        return $this->fields;
    }

    public function getField(String $alias): Field
    {
        $fields = $this->getFields();

        return $fields[$alias];
    }
}
